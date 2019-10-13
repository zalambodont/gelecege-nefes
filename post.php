<?php
$rcKey = '6LdPOr0UAAAAAJKDf7Qdr3DuieqYI_nv8S9LUVzd';

if(substr(parse_url($_SERVER['HTTP_REFERER'], PHP_URL_HOST), 0-strlen($_SERVER['HTTP_HOST']))==$_SERVER['HTTP_HOST'])
{
	header("Content-Type: application/json; charset=UTF-8");

	$data = json_decode(file_get_contents('php://input'), true);

	if(isset($data) && count($data)>0)
	{
		include('app/db.php');

		/*Genel form verisi kontrolleri */
		$inputNames = array('g-recaptcha-response' => 'Güvenlik', 'name' => 'İsim Soyisim', 'email' => 'Email', 'province' => 'Şehir');
		foreach($inputNames as $key => $input)
		{
			if(!isset($data[$key]) || (isset($data[$key]) && empty($data[$key])))
			{
				$array['result'] = false;
				$array['message'] = $input.' kutucuğu doldurulmalıdır.';
				break;
			}
			else $array['result'] = true;
		}

		/* ReCaptcha kontrolü */
		if($array['result']!=false) $rResponse = json_decode(file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$rcKey.'&response='.$data['g-recaptcha-response'].'&remoteip='.$_SERVER['REMOTE_ADDR']), true);
		if($array['result']!=false && $rResponse['success']!=true)
		{
			$array['result'] = false;
			$array['message'] ='Güvenlik kontrolünden geçemedi.';
		}

		/* İsim geçerlilik kontrolü */
		if($array['result']!=false && is_numeric($data['name']))
		{
			$array['result'] = false;
			$array['message'] = 'İsim doğrulama kontrolünden geçemedi.';
		}

		/* Email geçerlilik kontrolü */
		if($array['result']!=false && !filter_var($data['email'], FILTER_VALIDATE_EMAIL))
		{
			$array['result'] = false;
			$array['message'] = 'Email doğrulama kontrolünden geçemedi.';
		}

		/* Şehir geçerlilik kontrolü */
		if($array['result']!=false && !is_numeric($data['province']))
		{
			$array['result'] = false;
			$array['message'] = 'Şehir doğrulama kontrolünden geçemedi.';
		}

		if($array['result']!=false)
		{
			/* Daha önce kayıt var mı kontrolü (Veritabanında benzersiz sütun olarak işaretlenmiş olmasına rağmen spesifik uyarı için kontrol yapılıyor.) */
			$sqlSearch = $db->prepare("SELECT * FROM `kayitlar` WHERE `email` LIKE :email");
			$sqlSearch->execute(array(':email' => $data['email']));
			$emailCounter = $sqlSearch->rowCount();
			if($emailCounter>0)
			{
				$array['result'] = false;
				$array['message'] = 'Bu email ile daha önce kayıt yapılmış.';
			}
			else if($emailCounter==0)
			{
				/* Seçilen ilden rastgele bölge atama */
				$sqlSelect = $db->prepare("SELECT * FROM `bolgeler` WHERE `plaka` = :province AND `bolgeler`.`durum` < `bolgeler`.`hedef` ORDER BY RAND() LIMIT 1");
				$sqlSelect->execute(array(':province' => $data['province']));
				$provinceCounter = $sqlSelect->rowCount();

				/* Seçilen ildeki bölgeler doluysa o ilden rastgele bir bölge seç */
				if($provinceCounter==0)
				{
					$sqlSelect = $db->prepare("SELECT * FROM `bolgeler` WHERE `plaka` = :province ORDER BY RAND() LIMIT 1");
					$sqlSelect->execute(array(':province' => $data['province']));
				}

				$select = $sqlSelect->fetch(PDO::FETCH_ASSOC);

				/* Kayıt işlemi */
				$sqlInsert = $db->prepare("INSERT INTO `kayitlar` SET `isim` = :isim, `email` = :email, `sehir` = :sehir, `ip` = :ip");
				$insert = $sqlInsert->execute(array(
					'isim' => $data['name'],
					'email' => $data['email'],
					'sehir' => $data['province'],
					'ip' => ip2long($_SERVER['REMOTE_ADDR'])
				));

				/* Bölge durum güncelleme işlemi */
				$updateBolge = $db->prepare("UPDATE `bolgeler` SET `durum` = (`durum` + 5) WHERE `id` = :id");
				$updateBolge->execute(array(':id' => $select['id']));

				/* İl durum güncelleme işlemi */
				$updateIl = $db->prepare("UPDATE `iller` SET `durum` = `durum` + 5 WHERE `id` = :id");
				$updateIl->execute(array(':id' => $data['province']));

				/* Tüm veritabanı işlemleri tamamsa olumlu yanıt hazırlanıyor */
				if($updateIl && $insert && $updateBolge)
				{
					$array['result'] = true;
					$array['name'] = $data['name'];
					$array['province'] = $data['province'];
					$array['area'] = $select['il'].' / '.$select['ilce'].' / '.$select['mahalle'].' / '.$select['bolge'];
				}
			}
		}
		/* PDO bağlantısının katılması */
		$db = null;
		echo(json_encode($array, JSON_FORCE_OBJECT));
	}
}
else header('HTTP/1.0 404 Not Found');
