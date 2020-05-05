<?php
// Подключение к БД 'myMoscow'
include_once($_SERVER['DOCUMENT_ROOT'] . '/config/config.php');

// Получение данных по услугам (таблица 'services')
$query = "SELECT * FROM `services`";
$resultServices = mysqli_query($db, $query);

// Получение данных о компании (таблица 'about')
$query = "SELECT * FROM `about`";
$resultAbout = mysqli_query($db, $query);

// Получение данных для фотоотчета (таблица 'fotoReports')
$query = "SELECT * FROM `fotoReports`";
$resultFoto = mysqli_query($db, $query);

// Получение данных для отзывов (таблица 'userComments')
$query = "SELECT * FROM `userComments`";
$resultComments = mysqli_query($db, $query);

?>



<!-- HEAD -->
<?php
    $title = 'Главная';
    include_once($_SERVER['DOCUMENT_ROOT'] . '/modules/head.php');
?>

<!-- BODY -->
<body id="top">

    <!-- Intro -->
    <section class="topInfo">
        <div class="wrapperTop">
            <!-- Шапка -->
            <?php
                // $linkClassMain = 'class="hide notActive"';
                // $linkClassRouts = '';
                // $linkClassContacts = '';
                // include_once($_SERVER['DOCUMENT_ROOT'] . '/modules/header.php');
            ?>

            <header>
                <!-- Лого -->
                <a href="/" class="logoI"><img src="images/logo/logo_mixColorText.svg" alt="Logo"></a>

                <!-- Навигация -->
                <nav>
                    <a href="/" class="hide notActive">На главную</a>
                    <a href="#service">Наши услуги</a>
                    <a href="routs.php" target="blank">Маршруты</a>
                    <a href="#about">О нас</a>
                    <a href="#foto">Фотоотчеты</a>
                    <a href="#testimon">Отзывы</a>
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

            <!-- Текст -->
            <div class="textInfo">
                <h1>Необычная Москва</h1>
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
                <a href="routs.php" class="button" target="blank">Выбрать маршрут</a>
            </div>
        </div>

    </section>


    <!-- Основное содержимое -->
    <main>
        
        <!-- Услуги -->
        <section class="wrapperService" id="service">
            <h2>Что мы предлагаем</h2>

            <p class="brief">
                Наша главная цель&nbsp;&mdash; рассказать о Москве так, чтобы это было интересно всем!
            </p>

            <div class="wrapperService_Items">
                <?php while ($row = mysqli_fetch_assoc($resultServices)): ?>
                    <div class="service_Item">
                        <img src="images/icons/<?= $row['icon'] ?>" alt="<?= $row['altText'] ?>" class="item_Icon">
                        <div class="item_Text">
                            <h3><?= $row['serviceName'] ?></h3>
                            <p><?= $row['serviceDescription'] ?></p>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>

        </section>


        <!-- «О нас» -->
        <section class="wrapperAbout" id="about">
            <div class="aboutPicture"></div>
            <div class="aboutText">
                <h2>Кто мы такие</h2>

                <?php while ($row = mysqli_fetch_assoc($resultAbout)): ?>
                    <p><?= $row['aboutText'] ?></p>
                <?php endwhile; ?>
                
                <!-- Переход на страницу «Контакты» -->
                <a href="contacts.php" target="blank" class="button">Наши контакты</a>
            </div>
        </section>


        <!-- Фотографии -->
        <section class="wrapperFoto" id="foto">
            <h2>Москва в фотографиях</h2>

            <p class="brief">Проще всего рассказать обо&nbsp;всем в&nbsp;фотографиях: смотрите наши фотоотчеты и&nbsp;делитесь своими снимками.</p>
            
            <div class="foto">
                <?php while($row = mysqli_fetch_assoc($resultFoto)): ?>
                    <img class="fotoBox" src="images/main/<?= $row['foto'] ?>" alt="<?= $row['altText'] ?>">
                <?php endwhile; ?>
            </div>
        </section>


        <!-- Отзывы -->
        <section class="wrapperComments" id="testimon">
            <h2>Отзывы</h2>
            <div class="commentSlider">
                <div class="commentItems">
                    <?php while($row = mysqli_fetch_assoc($resultComments)): ?>
                        <div class="comment">
                            <div class="sign">
                                <img src="images/main/<?= $row['avatar'] ?>" alt="comment">
                                <p><?= $row['userName'] ?></p>
                            </div>
                            <div class="text">
                                <p><?= $row['userComment'] ?></p>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>

                <!-- Кнопки перехода от слайда к слайду -->
                <div class="sliderBtn">
                    <span class="leftArrow" title="Назад"></span>
                    <span class="rightArrow" title="Вперед"></span>
                </div>
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