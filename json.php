<?php
include('app/db.php');

header("Content-Type: application/json; charset=UTF-8");

function roundUpToAny($n, $x = 5) {
	return (ceil($n)%$x === 0) ? ceil($n) : round(($n+$x/2)/$x)*$x;
}

$turkiye['hedef'] = 0;
$turkiye['sonDurum'] = 0;
$turkiye['sonYuzde'] = 0;

$sqlIller = $db->query("SELECT * FROM `iller`");
while($il = $sqlIller->fetch(PDO::FETCH_ASSOC))
{
	$sonDurum = $il['durum']+$il['ekDurum'];
	if($sonDurum>$il['hedef']) $sonDurum = $il['hedef'];

	$sonYuzde = round($il['yuzde']);

	$turkiye['hedef'] = $turkiye['hedef']+$il['hedef'];
	$turkiye['sonDurum'] = $turkiye['sonDurum']+$sonDurum;
	$turkiye['sonYuzde'] = $turkiye['sonYuzde']+$il['yuzde'];

	$sonDurum = $sonDurum;
	$sonYuzde = $sonYuzde;

	if(strlen($il['id'])==1) $il['id'] = '0'.$il['id'];
	$array['places'][$il['id']] = array(
		'name' => $il['il'],
		'target' => number_format(roundUpToAny($il['hedef']), 0, ',', '.'),
		'completed' => number_format($sonDurum, 0, ',', '.'),
		'percent' => 100
	);
}

$array['places'][100] = array(
	'name' => 'TÜRKİYE',
	'target' => number_format(roundUpToAny($turkiye['hedef']), 0, ',', '.'),
	'completed' => number_format($turkiye['sonDurum'], 0, ',', '.'),
	'percent' => round($turkiye['sonYuzde']/81)
);

$sqlIller = $db->query("SELECT `id` FROM `iller` ORDER BY `iller`.`yuzde` DESC LIMIT 0,5");
while($il = $sqlIller->fetch(PDO::FETCH_ASSOC))
{
	if(strlen($il['id'])==1) $il['id'] = '0'.$il['id'];
	$array['top'][] = $il['id'];
}

echo(json_encode($array, JSON_FORCE_OBJECT));
