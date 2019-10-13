<?php
$site['db']['server'] = 'localhost';
$site['db']['user'] = 'u8447238_orman';
$site['db']['pass'] = 'REbm50V7CIkn19E';
$site['db']['table'] = 'u8447238_orman';

try
{
	$db = new PDO('mysql:host='.$site['db']['server'].';dbname='.$site['db']['table'].';charset=utf8', $site['db']['user'], $site['db']['pass']);
}
catch(PDOException $e)
{
	die($e->getMessage());
}
