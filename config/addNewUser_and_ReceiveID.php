<?php

// Проверка, есть ли пользователь в БД, и, если нет, его добавление.
// Получение id нового или старого пользователя: id понадобится для дальнейшей работы

    // Проверка, есть ли в БД введенный пользователем e-mail, и получение id пользователя:
    // – если искомого e-mail нет, то создается новый пользователь в таблице `users` и получается присвоенный ему id;
    // – если есть — получается id этого пользователя
    $query = "SELECT id FROM `users` WHERE `email` = '{$_POST['email']}'";
    $resultUserID = mysqli_query($db, $query);
    if (mysqli_num_rows($resultUserID) == 0) {
        // Добавление данных нового пользователя и получение его id
        $query = "INSERT INTO `users`
                (`name`,
                `email`,
                `tel`
                )
            VALUES (
                '{$_POST['name']}',
                '{$_POST['email']}',
                '{$_POST['phonenumber']}'
                )
        ";
        $newUser = mysqli_query($db, $query);
        // Получение id последней добавленной строчки, т.е. того id, который присвоился новому пользователю,
        // и добавление этого id в переменную $userID
        $userID = mysqli_insert_id($db);
    } else {
        // Получение id существующего пользователя и добавление этого id в переменную $userID
        $row = mysqli_fetch_assoc($resultUserID);
        $userID = $row['id'];
    }

?>