<?php
include('app/db.php');
$min = 21;
$max = 31;

$sqlIller = $db->query("SELECT * FROM `iller`");
while($il = $sqlIller->fetch(PDO::FETCH_ASSOC))
{
	$istenenYuzde = rand($min, $max);
	$ekDurum = ($il['hedef']/100)*$istenenYuzde;

	$yuzde = ($il['durum']*100)/$il['hedef'];

	$updateIl = $db->prepare("UPDATE `iller` SET `yuzde` = :yuzde, `ekDurum` = :ekDurum WHERE `id` = :id");
	$updateIl->execute(array(
		':yuzde' => round($istenenYuzde, 2),
		':ekDurum' => round($ekDurum),
		':id' => $il['id']
	));

	echo('&#9679; <strong>'.$il['il'].': </strong>'.round($yuzde).' / '.round($istenenYuzde, 2).' <small>(+'.round($ekDurum).')</small><br>');
}
