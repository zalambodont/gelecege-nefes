<?php
header("Content-Type: application/json; charset=UTF-8");
$array = array(
	'top' => array(1 => '34', 2 => '35', 3 => '06', 4 => '53', 5 => '01'),
	'places' => array(
		'01' => array(
			'name' => 'Adana',
			'target' => 1000,
			'completed' => 500,
			'percent' => 50
		),
		'02' => array(
			'name' => 'Adıyaman',
			'target' => 1000,
			'completed' => 500,
			'percent' => 50
		),
		'03' => array(
			'name' => 'Afyon',
			'target' => 1000,
			'completed' => 500,
			'percent' => 50
		),
		'04' => array(
			'name' => 'Ağrı',
			'target' => 1000,
			'completed' => 500,
			'percent' => 50
		),
		'05' => array(
			'name' => 'Amasya',
			'target' => 1000,
			'completed' => 500,
			'percent' => 50
		),
		'06' => array(
			'name' => 'Ankara',
			'target' => 1000,
			'completed' => 500,
			'percent' => 50
		),
		'07' => array(
			'name' => 'Antalya',
			'target' => 1000,
			'completed' => 500,
			'percent' => 50
		),
		'08' => array(
			'name' => 'Artvin',
			'target' => 1000,
			'completed' => 500,
			'percent' => 50
		),
		'09' => array(
			'name' => 'Aydın',
			'target' => 1000,
			'completed' => 500,
			'percent' => 50
		),
		'10' => array(
			'name' => 'Balıkesir',
			'target' => 1000,
			'completed' => 500,
			'percent' => 50
		),
		'11' => array(
			'name' => 'Bilecik',
			'target' => 1000,
			'completed' => 500,
			'percent' => 50
		),
		'12' => array(
			'name' => 'Bingöl',
			'target' => 1000,
			'completed' => 500,
			'percent' => 50
		),
		'13' => array(
			'name' => 'Bitlis',
			'target' => 1000,
			'completed' => 500,
			'percent' => 50
		),
		'14' => array(
			'name' => 'Bolu',
			'target' => 1000,
			'completed' => 500,
			'percent' => 50
		),
		'15' => array(
			'name' => 'Burdur',
			'target' => 1000,
			'completed' => 500,
			'percent' => 50
		),
		'16' => array(
			'name' => 'Bursa',
			'target' => 1000,
			'completed' => 500,
			'percent' => 50
		),
		'17' => array(
			'name' => 'Çanakkale',
			'target' => 1000,
			'completed' => 500,
			'percent' => 50
		),
		'18' => array(
			'name' => 'Çankırı',
			'target' => 1000,
			'completed' => 500,
			'percent' => 50
		),
		'19' => array(
			'name' => 'Çorum',
			'target' => 1000,
			'completed' => 500,
			'percent' => 50
		),
		'20' => array(
			'name' => 'Denizli',
			'target' => 1000,
			'completed' => 500,
			'percent' => 50
		),
		'21' => array(
			'name' => 'Diyarbakır',
			'target' => 1000,
			'completed' => 500,
			'percent' => 50
		),
		'22' => array(
			'name' => 'Edirne',
			'target' => 1000,
			'completed' => 500,
			'percent' => 50
		),
		'23' => array(
			'name' => 'Elazığ',
			'target' => 1000,
			'completed' => 500,
			'percent' => 50
		),
		'24' => array(
			'name' => 'Erzincan',
			'target' => 1000,
			'completed' => 500,
			'percent' => 50
		),
		'25' => array(
			'name' => 'Erzurum',
			'target' => 1000,
			'completed' => 500,
			'percent' => 50
		),
		'26' => array(
			'name' => 'Eskişehir',
			'target' => 1000,
			'completed' => 500,
			'percent' => 50
		),
		'27' => array(
			'name' => 'Gaziantep',
			'target' => 1000,
			'completed' => 500,
			'percent' => 50
		),
		'28' => array(
			'name' => 'Giresun',
			'target' => 1000,
			'completed' => 500,
			'percent' => 50
		),
		'29' => array(
			'name' => 'Gümüşhane',
			'target' => 1000,
			'completed' => 500,
			'percent' => 50
		),
		'30' => array(
			'name' => 'Hakkari',
			'target' => 1000,
			'completed' => 500,
			'percent' => 50
		),
		'31' => array(
			'name' => 'Hatay',
			'target' => 1000,
			'completed' => 500,
			'percent' => 50
		),
		'32' => array(
			'name' => 'Isparta',
			'target' => 1000,
			'completed' => 500,
			'percent' => 50
		),
		'33' => array(
			'name' => 'Mersin',
			'target' => 1000,
			'completed' => 500,
			'percent' => 50
		),
		'34' => array(
			'name' => 'İstanbul',
			'target' => 1000,
			'completed' => 500,
			'percent' => 50
		),
		'35' => array(
			'name' => 'İzmir',
			'target' => 1000,
			'completed' => 500,
			'percent' => 50
		),
		'36' => array(
			'name' => 'Kars',
			'target' => 1000,
			'completed' => 500,
			'percent' => 50
		),
		'37' => array(
			'name' => 'Kastamonu',
			'target' => 1000,
			'completed' => 500,
			'percent' => 50
		),
		'38' => array(
			'name' => 'Kayseri',
			'target' => 1000,
			'completed' => 500,
			'percent' => 50
		),
		'39' => array(
			'name' => 'Kırklareli',
			'target' => 1000,
			'completed' => 500,
			'percent' => 50
		),
		'40' => array(
			'name' => 'Kırşehir',
			'target' => 1000,
			'completed' => 500,
			'percent' => 50
		),
		'41' => array(
			'name' => 'Kocaeli',
			'target' => 1000,
			'completed' => 500,
			'percent' => 50
		),
		'42' => array(
			'name' => 'Konya',
			'target' => 1000,
			'completed' => 500,
			'percent' => 50
		),
		'43' => array(
			'name' => 'Kütahya',
			'target' => 1000,
			'completed' => 500,
			'percent' => 50
		),
		'44' => array(
			'name' => 'Malatya',
			'target' => 1000,
			'completed' => 500,
			'percent' => 50
		),
		'45' => array(
			'name' => 'Manisa',
			'target' => 1000,
			'completed' => 500,
			'percent' => 50
		),
		'46' => array(
			'name' => 'Kahramanmaraş',
			'target' => 1000,
			'completed' => 500,
			'percent' => 50
		),
		'47' => array(
			'name' => 'Mardin',
			'target' => 1000,
			'completed' => 500,
			'percent' => 50
		),
		'48' => array(
			'name' => 'Muğla',
			'target' => 1000,
			'completed' => 500,
			'percent' => 50
		),
		'49' => array(
			'name' => 'Muş',
			'target' => 1000,
			'completed' => 500,
			'percent' => 50
		),
		'50' => array(
			'name' => 'Nevşehir',
			'target' => 1000,
			'completed' => 500,
			'percent' => 50
		),
		'51' => array(
			'name' => 'Niğde',
			'target' => 1000,
			'completed' => 500,
			'percent' => 50
		),
		'52' => array(
			'name' => 'Ordu',
			'target' => 1000,
			'completed' => 500,
			'percent' => 50
		),
		'53' => array(
			'name' => 'Rize',
			'target' => 1000,
			'completed' => 500,
			'percent' => 50
		),
		'54' => array(
			'name' => 'Sakarya',
			'target' => 1000,
			'completed' => 500,
			'percent' => 50
		),
		'55' => array(
			'name' => 'Samsun',
			'target' => 1000,
			'completed' => 500,
			'percent' => 50
		),
		'56' => array(
			'name' => 'Siirt',
			'target' => 1000,
			'completed' => 500,
			'percent' => 50
		),
		'57' => array(
			'name' => 'Sinop',
			'target' => 1000,
			'completed' => 500,
			'percent' => 50
		),
		'58' => array(
			'name' => 'Sivas',
			'target' => 1000,
			'completed' => 500,
			'percent' => 50
		),
		'59' => array(
			'name' => 'Tekirdağ',
			'target' => 1000,
			'completed' => 500,
			'percent' => 50
		),
		'60' => array(
			'name' => 'Tokat',
			'target' => 1000,
			'completed' => 500,
			'percent' => 50
		),
		'61' => array(
			'name' => 'Trabzon',
			'target' => 1000,
			'completed' => 500,
			'percent' => 50
		),
		'62' => array(
			'name' => 'Tunceli',
			'target' => 1000,
			'completed' => 500,
			'percent' => 50
		),
		'63' => array(
			'name' => 'Şanlıurfa',
			'target' => 1000,
			'completed' => 500,
			'percent' => 50
		),
		'64' => array(
			'name' => 'Uşak',
			'target' => 1000,
			'completed' => 500,
			'percent' => 50
		),
		'65' => array(
			'name' => 'Van',
			'target' => 1000,
			'completed' => 500,
			'percent' => 50
		),
		'66' => array(
			'name' => 'Yozgat',
			'target' => 1000,
			'completed' => 500,
			'percent' => 50
		),
		'67' => array(
			'name' => 'Zonguldak',
			'target' => 1000,
			'completed' => 500,
			'percent' => 50
		),
		'68' => array(
			'name' => 'Aksaray',
			'target' => 1000,
			'completed' => 500,
			'percent' => 50
		),
		'69' => array(
			'name' => 'Bayburt',
			'target' => 1000,
			'completed' => 500,
			'percent' => 50
		),
		'70' => array(
			'name' => 'Karaman',
			'target' => 1000,
			'completed' => 500,
			'percent' => 50
		),
		'71' => array(
			'name' => 'Kırıkkale',
			'target' => 1000,
			'completed' => 500,
			'percent' => 50
		),
		'72' => array(
			'name' => 'Batman',
			'target' => 1000,
			'completed' => 500,
			'percent' => 50
		),
		'73' => array(
			'name' => 'Şırnak',
			'target' => 1000,
			'completed' => 500,
			'percent' => 50
		),
		'74' => array(
			'name' => 'Bartın',
			'target' => 1000,
			'completed' => 500,
			'percent' => 50
		),
		'75' => array(
			'name' => 'Ardahan',
			'target' => 1000,
			'completed' => 500,
			'percent' => 50
		),
		'76' => array(
			'name' => 'Iğdır',
			'target' => 1000,
			'completed' => 500,
			'percent' => 50
		),
		'77' => array(
			'name' => 'Yalova',
			'target' => 1000,
			'completed' => 500,
			'percent' => 50
		),
		'78' => array(
			'name' => 'Karabük',
			'target' => 1000,
			'completed' => 500,
			'percent' => 50
		),
		'79' => array(
			'name' => 'Kilis',
			'target' => 1000,
			'completed' => 500,
			'percent' => 50
		),
		'80' => array(
			'name' => 'Osmaniye',
			'target' => 1000,
			'completed' => 500,
			'percent' => 50
		),
		'81' => array(
			'name' => 'Düzce',
			'target' => 1000,
			'completed' => 500,
			'percent' => 50
		),
		'100' => array(
			'name' => 'Türkiye',
			'target' => 81000,
			'completed' => 40500,
			'percent' => 50
		)
	)
);
echo(json_encode($array, JSON_FORCE_OBJECT));
