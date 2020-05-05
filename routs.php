<?php
// Подключение к БД 'myMoscow'
include_once($_SERVER['DOCUMENT_ROOT'] . '/config/config.php');

// Получение данных по маршрутам (таблица 'routs')
$query = "SELECT * FROM `routs`";
$resultRouts = mysqli_query($db, $query);

?>



<!-- HEAD -->
<?php
    $title = 'Маршруты';
    include_once($_SERVER['DOCUMENT_ROOT'] . '/modules/head.php');
?>

<body id="top">

    <!-- Intro -->
    <section class="topInfo">
        <div class="wrapperTop bgRouts">
            <!-- Шапка -->
            <?php
                // $linkClassMain = 'class="hide"';
                // $linkClassRouts = 'class="notActive"';
                // $linkClassContacts = '';
                // include_once($_SERVER['DOCUMENT_ROOT'] . '/modules/header.php');
            ?>

            <header>
                <!-- Лого -->
                <a href="/" class="logoI"><img src="images/logo/logo_mixColorText.svg" alt="Logo"></a>

                <!-- Навигация -->
                <nav>
                    <a href="/" class="hide">На главную</a>
                    <a href="index.php#service">Наши услуги</a>
                    <a href="#" class="notActive">Маршруты</a>
                    <a href="index.php#about">О нас</a>
                    <a href="index.php#foto">Фотоотчеты</a>
                    <a href="index.php#testimon">Отзывы</a>
                    <a href="#news">Новости</a>
                    <a href="contacts.php" target="blank">Контакты</a>

                    <!-- Кнопка отображения меню для экрана <780px -->
                    <div class="menu-btn">
                        <div class="btn-lines"></div>
                        <div class="btn-lines"></div>
                        <div class="btn-lines"></div>
                    </div>
                </nav>
            </header>

            <div class="textInfo">
                <h1>Маршруты</h1>
                    <p>
                        <span class="logoT"><span>My</span>.Moscow</span>&nbsp;&mdash; агентство интересных маршрутов&nbsp;&mdash; приглашает на самые разные экскурсии по&nbsp;Москве: автобусные и&nbsp;пешеходные,
                        на&nbsp;целый день или несколько часов, на&nbsp;свежем воздухе или по&nbsp;музеям&nbsp;&mdash; у&nbsp;нас более двадцати авторских экскурсий
                        по&nbsp;городу.
                    </p>
                    <p>
                        Выбирайте маршрут и&nbsp;узнавайте Москву вместе с&nbsp;нами!
                    </p>
            </div>

            <div>
                <a href="/" class="button">Вернуться на главную</a>
            </div>
        </div>

    </section>


    <!-- Маршруты -->
    <main>
        <section class="wrapperRoutsPOP">
            <h2>Популярные маршруты</h2>

            <?php while($row = mysqli_fetch_assoc($resultRouts)): ?>
                <div class="rout">
                    <img class="routImage mCity" src="images/routs/<?= $row['image'] ?>" alt="<?= $row['altText'] ?>">
                    <div class="routText">
                        <!-- Описание экскурсии -->
                        <h3><?= $row['routName'] ?></h3>
                        <?= $row['routDescription'] ?>

                        <!-- Стоимость -->
                        <p class="price"><?= $row['duration'] ?>&nbsp;&mdash; <?= $row['price'] ?></p>

                        <!-- «Забронировать» -->
                        <div>
                            <a href="" class="button reserve" target="blank" data-name="<?= $row['routName'] ?>">Забронировать</a>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>

        </section>
    </main>


    <!-- Подвал и кнопка «В начало» -->
    <?php
        // Подвал 
        include_once($_SERVER['DOCUMENT_ROOT']) . '/modules/footer.php';
        
        // «В начало»
        include_once($_SERVER['DOCUMENT_ROOT']) . '/modules/buttonToUp.php';
    ?>


    <!-- Форма записи на экскурсию -->
    <div class="formReserveWrapper">

        <div class="formReserve">
            <!-- Лого -->
            <a href='/' class='logoI'><img src='/images/logo/logo_mixColorText.svg' alt='Logo'></a>
            
            <!-- Форма -->
            <form action="handlers/form_Routs.php" method="POST" class="routPage">
                <input type="text" name="routName">
                <input type="text" name="name" placeholder="ФИО">
                <input type="email" name="email" placeholder="E-mail">
                <input type="text" name="phonenumber" placeholder="Телефон">

                <textarea name="message" placeholder="Комментарий"></textarea>
                
                <div class="submit">
                    <input type="submit" value="Забронировать">
                </div>
            </form>
        </div>

        <!-- Кнопка закрытия формы -->
        <div class="closeForm" title="Close"></div>

    </div>


    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="js/main.js"></script>
    
</body>
</html>