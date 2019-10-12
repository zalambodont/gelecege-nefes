<?php
header("Content-Type: application/json; charset=UTF-8");
$array = array(
	'result' => false,
	'name' => 'Deneme Meneme',
	'message' => 'Bu email adresiyle daha önce kayıt yapılmış. Her kayıdın 5 ağaç sahiplenebilir.',
	'place' => 53
);
echo(json_encode($array, JSON_FORCE_OBJECT));
