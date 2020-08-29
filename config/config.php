<?php
$host = 'localhost';
$user = 'root';
$password = '';
$db_name = 'myMoscow';

$db = getConnect($host, $user, $password, $db_name);
mysqli_set_charset($db, 'utf8');

?>