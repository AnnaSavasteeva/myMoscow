<link rel="stylesheet" href="../styles/styles_myMoscow.css">


<?php

    include_once($_SERVER['DOCUMENT_ROOT'] . '/config/config.php');



    // ПРОВЕРКА ПОЛЕЙ ФОРМЫ (на существование и заполненность)

    // Переменная для сообщений об ошибках
    $faults = '';

    // Проверка поля «ФИО»
    if (isset($_POST['name'])) {
        if (empty($_POST['name'])) {
            $faults .= '<p>Укажите фамилию, имя, отчество.</p>';
        }
    } else {
        $faults .= 'Данные формы не были отправлены.';
        }

    // Проверка поля «E-mail»
    if (isset($_POST['email'])) {
        if (empty($_POST['email'])) {
            $faults .= '<p>Укажите ваш e-mail.</p>';
        }
    } else {
        $faults .= 'Данные формы не были отправлены.';
        }

    // Проверка поля «Телефон»
    if (isset($_POST['phonenumber'])) {
        if (empty($_POST['phonenumber'])) {
            $faults .= '<p>Укажите ваш телефон.</p>';
        }
    } else {
        $faults .= 'Данные формы не были отправлены.';
        }



    // ПРОВЕРКА ТЕХ ПОЛЕЙ, КОТОРЫЕ ОТЛИЧАЮТСЯ в зависимости от страницы сайта

    // Форма бронирования экскурсии на странице «Маршруты»
    if ($_SERVER['REQUEST_URI'] === '/routs.php') {
        // Проверка заблокированного поля с названием экскурсии
        if (isset($_POST['routName'])) {
            if (empty($_POST['routName'])) {
                $faults .= '<p>Сбой в работе сайта. Пожалуйста, попробуйте снова забронировать экскурсию.</p>';
            }
        } else {
            $faults .= 'Сбой в работе сайта. Пожалуйста, попробуйте снова забронировать экскурсию.';
            }

        // Проверка, есть ли такая экскурсия в БД и, если есть, получение ее id, или, если нет, вывод сообщения об ошибке
        $query = "SELECT id FROM `routs` WHERE `routName` = '{$_POST['routName']}'";
        $resultRoutID = mysqli_query($db, $query);
        if (mysqli_num_rows($resultRoutID) != 0) {
            $row = mysqli_fetch_assoc($resultRoutID);
            $routID = $row['id'];
        } else {
            $faults .= '<p>Сбой в работе сайта. Пожалуйста, попробуйте снова забронировать экскурсию.</p>';
        }
    }

    // Форма отправки сообщения на странице «Контакты»
    if ($_SERVER['REQUEST_URI'] === '/contacts.php') {
        // Проверка поля с вопросом
        if (isset($_POST['message'])) {
            if (empty($_POST['message'])) {
                $faults .= '<p>Введите текст сообщения.</p>';
            }
        } else {
            $faults .= 'Данные формы не были отправлены.';
        }
    }
        

        
    // ВЫВОД СООБЩЕНИЯ ОБ ОТПРАВКЕ ФОРМЫ И ДОБАВЛЕНИЕ ДАННЫХ В БД
    if (!$faults) {
        // Вывод сообщения
        echo "
            <div class='userResponseWrapper'>
                <div class='userResponse'>
                    <a href='/' class='logoI'><img src='/images/logo/logo_mixColorText.svg' alt='Logo'></a>
                    <p><span>{$_POST['name']}</span>,<br>
            ";
        // Для страницы «Маршруты»
        if ($_SERVER['REQUEST_URI'] === '/routs.php') {
            echo 'экскурсия забронирована.';
        };
        // Для страницы «Контакты»
        if ($_SERVER['REQUEST_URI'] === '/contacts.php') {
            echo 'сообщение успешно отправлено.';
        };
        echo "
                    </p>
                    <a href='/routs.php' class='button'>Вернуться</a>
                </div>
            </div>
        ";   


        // Добавление данных в БД
        // Получение id пользователя по введенному e-mail (если такой пользователь есть).
        // id нужен для дальнейшей работы.
        $query = "SELECT id FROM `users` WHERE `email` = '{$_POST['email']}'";
        $resultUserID = mysqli_query($db, $query);
        // Добавление пользователя в БД, если по запросу resultUserID ничего не нашлось.
        // А также получение присвоенного ему id и добавление его в переменную $userID.
        // ИЛИ Получение id существующего пользователя и добавление этого id в переменную $userID.
        if (mysqli_num_rows($resultUserID) == 0) {
            $query = "INSERT INTO `users`
                    (
                        `name`,
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

        // Для страницы «Маршруты» — добавление в таблицу забронированных экускурсий выбранной экскурсии, id пользователя и его комментария (если есть).
        if ($_SERVER['REQUEST_URI'] === '/routs.php') {
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
        };
        
        // Для страницы «Контакты» — добавление в БД сообщения от пользователя.
        if ($_SERVER['REQUEST_URI'] === '/contacts.php') {
                $query = "INSERT INTO `usersMessages`
                (
                `userID`,
                `userMessage`
                )
                VALUES (
                    '$userID',
                    '{$_POST['message']}')
            ";
            $resultMessage = mysqli_query($db, $query);
        };

    } else {
        echo $faults;
};
    
?>
