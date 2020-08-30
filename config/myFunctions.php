<?php

function getConnect($host, $user, $password, $db_name)
{
    static $connect;

    if (null === $connect) {
    $connect = mysqli_connect($host, $user, $password, $db_name)
        or die('Ошибка подключения к базе данных' . mysqli_error($connect));
    }

    return $connect;
}


function getData($db, $select, $from, $where=NULL, $condition=NULL)
{
    if ($where && $condition) {
        $query = "SELECT $select FROM $from WHERE $where = '{$condition}'";
    } else {
        $query = "SELECT $select FROM $from";
    }
    $result = mysqli_query($db, $query);

    return $result;
}