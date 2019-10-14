<?php
include('app/db.php');

header("Content-Type: application/json; charset=UTF-8");

$sqlIller = $db->query("SELECT * FROM `iller`");
while($il = $sqlIller->fetch(PDO::FETCH_ASSOC))
{
	$sonDurum = $il['durum']+$il['ekDurum'];
	if($sonDurum>$il['hedef']) $sonDurum = $il['hedef'];
	$sonDurum = strval($sonDurum);

	$sonYuzde = round($il['yuzde']);
	$sonYuzde = strval($sonYuzde);

	$array['places'][$il['id']] = array(
		'name' => $il['il'],
		'target' => $il['hedef'],
		'completed' => $sonDurum,
		'percent' => $sonYuzde
	);
}

$sqlIller = $db->query("SELECT `id` FROM `iller` ORDER BY `iller`.`yuzde` ASC LIMIT 0,5");
while($il = $sqlIller->fetch(PDO::FETCH_ASSOC))
{
	$array['top'][] = $il['id'];
}

echo(json_encode($array, JSON_FORCE_OBJECT));
