<link rel="stylesheet" href="../styles/styles_myMoscow.css">


<?php

    include_once($_SERVER['DOCUMENT_ROOT'] . '/config/config.php');

    // ФОРМА ОТПРАВКИ ВОПРОСА
    
    // ПРОВЕРКА полей формы на существование и заполненность (поля, общие для всех форм на сайте)
    include_once($_SERVER['DOCUMENT_ROOT'] . '/config/inputsCheck.php');
    
    // ПРОВЕРКА поля с вопросом (только в форме для отправки вопроса, страница «Контакты»)
    if (isset($_POST['message'])) {
        if (empty($_POST['message'])) {
            $faults .= '<p>Введите текст сообщения.</p>';
        }
    } else {
        $faults .= 'Данные формы не были отправлены.';
        }
        

        
    // ВЫВОД СООБЩЕНИЯ ОБ ОТПРАВКЕ ФОРМЫ И ДОБАВЛЕНИЕ ДАННЫХ В БД
    if (!$faults) {
        // Вывод сообщения
        echo "
            <div class='userResponseWrapper'>
                <div class='userResponse'>
                    <a href='/' class='logoI'><img src='/images/logo/logo_mixColorText.svg' alt='Logo'></a>
                    <p><span>{$_POST['name']}</span>,<br>сообщение успешно отправлено.</p>
                    <a href='/contacts.php' class='button'>Вернуться</a>
                </div>
            </div>
        ";

        // Проверка, есть ли пользователь в БД, и, если нет, его добавление.
        // Получение id нового или старого пользователя: id понадобится для дальнейшей работы
        include_once($_SERVER['DOCUMENT_ROOT'] . '/config/addNewUser_and_ReceiveID.php');

        // Добавление в БД сообщения от пользователя (таблица `usersMessages`)
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

    } else {
        echo $faults;
    };

?>
