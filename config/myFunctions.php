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


function getData($db, $select, $from)
{
    $query = "SELECT $select FROM $from";
    $result = mysqli_query($db, $query);

    return $result;
}