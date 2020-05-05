<?php
// БД
// Подключение к БД 'myMoscow'
include_once($_SERVER['DOCUMENT_ROOT'] . '/config/config.php');

// Получение контактов (таблица 'contacts')
$query = "SELECT * FROM `contacts`";
$resultContacts = mysqli_query($db, $query);

?>



<!-- HEAD -->
<?php
    $title = 'Контакты';
    include_once($_SERVER['DOCUMENT_ROOT'] . '/modules/head.php');
?>

<body id="top">
    
    <!-- Intro -->
    <section class="topInfo">
        <div class="wrapperTop bgContacts">
            <!-- Шапка -->
                <?php
                // $linkClassMain = 'class="hide"';
                // $linkClassRouts = '';
                // $linkClassContacts = 'class="notActive"';
                // include_once($_SERVER['DOCUMENT_ROOT'] . '/modules/header.php');
                ?>

            <header>
                <!-- Лого -->
                <a href="/" class="logoI"><img src="images/logo/logo_mixColorText.svg" alt="Logo"></a>

                <!-- Навигация -->
                <nav>
                    <a href="/" class="hide">На главную</a>
                    <a href="index.php#service">Наши услуги</a>
                    <a href="routs.php" target="blank">Маршруты</a>
                    <a href="index.php#about">О нас</a>
                    <a href="index.php#foto">Фотоотчеты</a>
                    <a href="index.php#testimon">Отзывы</a>
                    <a href="#news">Новости</a>
                    <a href="#" class="notActive">Контакты</a>

                    <!-- Кнопка отображения меню для экрана <780px -->
                    <div class="menu-btn">
                        <div class="btn-lines"></div>
                        <div class="btn-lines"></div>
                        <div class="btn-lines"></div>
                    </div>
                </nav>
            </header>

            <div class="textInfo">
                <h1>Обратная связь</h1>   
                <p>
                    Если у&nbsp;вас есть вопросы, идеи маршрутов, конструктивные замечания или предложения&nbsp;&mdash; пожалуйста, свяжитесь
                    с&nbsp;нами любым удобным для вас способом&nbsp;&mdash; мы открыты для общения! А&nbsp;еще лучше&nbsp;&mdash; приезжайте к&nbsp;нам в&nbsp;гости
                    и&nbsp;вступайте в&nbsp;наш клуб&nbsp;&mdash; там, помимо замечательных людей и&nbsp;интересного общения, есть еще вкусный кофе, чай и печенье!
                </p>
            </div>

            <div class="forButtonTop">
                <a href="/" class="button">Вернуться на главную</a>
            </div>
        </div>

    </section>


    <!-- Основное содержимое -->
    <main>

        <!-- Связь -->
        <section class="wrapperContactUs" id="contact">
                <h2>Контактная информация</h2>
                
                <div class="contactItems">
                    <?php while($row = mysqli_fetch_assoc($resultContacts)): ?>
                        <div class="contactItem">
                            <h3 class="contacts"><?= $row['service'] ?></h3>
                            <p><i class="fa fa-at" aria-hidden="true"></i><?= $row['email'] ?></p>
                            <p><i class="fa fa-phone" aria-hidden="true"></i><?= $row['tel'] ?></p>
                            <p><i class="fa fa-clock-o icons" aria-hidden="true"></i><?= $row['workHours'] ?></p>
                        </div>
                    <?php endwhile; ?>                
                </div>

        </section>


        <!-- Карта -->
        <section class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2243.9878951089627!2d37.64559751563289!3d55.776082080559576!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46b54a7a220c9e5f%3A0x262ed08bf1f58a9c!2z0JHQvtC70YzRiNCw0Y8g0KHQv9Cw0YHRgdC60LDRjyDRg9C7LiwgMTIsINCc0L7RgdC60LLQsCwgMTI5MDkw!5e0!3m2!1sru!2sru!4v1573723611439!5m2!1sru!2sru" allowfullscreen="">
            </iframe>
        </section>


        <!-- Адрес и форма обратной связи -->
        <section class="wrapperAddressForm">
            
            <!-- Адрес и соц. сети -->
            <div class="address">
                <h3 class="contacts">Наш адрес</h3>
                <?php
                    $addressStyle = "";
                    include_once($_SERVER['DOCUMENT_ROOT'] . '/modules/address_socNet.php');
                ?> 
            </div>

            <!-- Форма обратной связи -->
            <div class="form">
                <h3 class="contacts">Обратная связь</h3>
                <form action="handlers/form_Contact.php" method="POST" class="contactPage">
                <!-- <form action="" method="POST" class="contactPage"> -->
                    <input type="text" name="name" placeholder="ФИО">
                    <input type="e-mail" name="email" placeholder="E-mail">
                    <input type="text" name="phonenumber" placeholder="Телефон">

                    <textarea name="message" placeholder="Ваше сообщение"></textarea>
                    
                    <div class="submit">
                        <input type="submit" value="Отправить вопрос">
                    </div>
                </form>
            </div>

        </section>

    </main>


    <!-- Подвал и кнопка «В начало» -->
    <?php
        // Подвал
        include_once($_SERVER['DOCUMENT_ROOT']) . '/modules/footer.php';

        // «В начало»
        include_once($_SERVER['DOCUMENT_ROOT']) . '/modules/buttonToUp.php';
    ?>


    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>