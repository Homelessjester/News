<?php

require __DIR__ . '/classes/DB.php';

$db = new DB('localhost', 'root', '', 'news');
//$items = $db->query('SELECT * FROM "news"');
$res = $db->query('SELECT * FROM news');
var_dump($res);