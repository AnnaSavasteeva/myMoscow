<link rel="stylesheet" href="../styles/styles_myMoscow.css">


<?php

    include_once($_SERVER['DOCUMENT_ROOT'] . '/config/config.php');

    // ФОРМА БРОНИРОВАНИЯ ЭКСКУРСИИ

    // ПРОВЕРКА полей формы на существование и заполненность (поля, общие для всех форм на сайте)
    include_once($_SERVER['DOCUMENT_ROOT'] . '/config/inputsCheck.php');

    // ПРОВЕРКА заблокированного поля с названием экскурсии (только в форме бронирования, страница «Маршруты»)
    if (isset($_POST['routName'])) {
        if (empty($_POST['routName'])) {
            $faults .= '<p>Сбой в работе сайта. Пожалуйста, попробуйте снова забронировать экскурсию.</p>';
        }
    } else {
        $faults .= 'Сбой в работе сайта. Пожалуйста, попробуйте снова забронировать экскурсию.';
        }

    // ПРОВЕРКА, есть ли экскурсия в БД и, если есть, получение ее id (только в форме бронирования).
    // Если экскурсия не нашлась в БД по названию (например, в БД в названии есть символ-мнемоник), вывод сообщения об ошибке
    $query = "SELECT id FROM `routs` WHERE `routName` = '{$_POST['routName']}'";
    $resultRoutID = mysqli_query($db, $query);
    if (mysqli_num_rows($resultRoutID) != 0) {
        $row = mysqli_fetch_assoc($resultRoutID);
        $routID = $row['id'];
    } else {
        $faults .= '<p>Сбой в работе сайта. Пожалуйста, попробуйте снова забронировать экскурсию.</p>';
    }
        

        
    // ВЫВОД СООБЩЕНИЯ ОБ ОТПРАВКЕ ФОРМЫ И ДОБАВЛЕНИЕ ДАННЫХ В БД
    if (!$faults) {
        // Вывод сообщения
        echo "
            <div class='userResponseWrapper'>
                <div class='userResponse'>
                    <a href='/' class='logoI'><img src='/images/logo/logo_mixColorText.svg' alt='Logo'></a>
                    <p><span>{$_POST['name']}</span>,<br>экскурсия забронирована.</p>
                    <a href='/routs.php' class='button'>Вернуться</a>
                </div>
            </div>
        ";   

        // Проверка, есть ли пользователь в БД, и, если нет, его добавление.
        // Получение id нового или старого пользователя: id понадобится для дальнейшей работы
        include_once($_SERVER['DOCUMENT_ROOT'] . '/config/addNewUser_and_ReceiveID.php');

        // Добавление в БД выбранной экскурсии, id пользователя и его комментария, если такой есть.
        // Все — в таблицу забронированных экскурсий
        $query = "INSERT INTO `routsReserved`
                (
                    `routID`,
                    `routName`,
                    `userID`,
                    `comment`
                )
                VALUES (
                    '$routID',
                    '{$_POST['routName']}',
                    '$userID',
                    '{$_POST['message']}'   
                )
            ";
        $newReserve = mysqli_query($db, $query);

    } else {
        echo $faults;
};
    
?>
