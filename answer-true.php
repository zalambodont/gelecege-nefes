<?php
header("Content-Type: application/json; charset=UTF-8");

$array = array(
	'result' => true,
	'name' => 'Deneme Meneme',
	'area' => 'Adana / Sarıçam / Gökbuket mahallesi / Orman Arazisine Ait Ağaçlandırma Alanı',
	'place' => 53
);

echo(json_encode($array, JSON_FORCE_OBJECT));
