<?php

include_once($_SERVER['DOCUMENT_ROOT'] . '/config/db.php');

$db = getConnect($host, $user, $password, $db_name);
mysqli_set_charset($db, 'utf8');
unset($host, $user, $password, $db_name);
