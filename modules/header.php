<?php
    include_once($_SERVER['DOCUMENT_ROOT'] . '/config/config.php');
    

    // Navigation
    $anchors = '/';
    $bg = '';
    $button = 'Вернуться на главную';
    $classContacts = '';
    $classMain = '';
    $classRouts = '';
    $hrefButton = '/';
    $hrefContacts = 'contacts.php';
    $hrefMain = '/';
    $hrefRouts = 'routs.php';
    $page = 'main';

    switch ($_SERVER['REQUEST_URI']) {
        case '/':
            $anchors = '';
            $hrefMain = '#';
            $classMain = 'notActive';
            $button = 'Выбрать маршрут';
            $hrefButton = 'routs.php';
        break;
        case '/routs.php':
            $page = 'routs';
            $bg = 'bgRouts';
            $hrefRouts = '#';
            $classRouts = 'class = "notActive"';
        break;
        case '/contacts.php':
            $page = 'contacts';
            $bg = 'bgContacts';
            $hrefContacts = '#';
            $classContacts = 'class = "notActive"';
        break;
    }
    
?>


<!-- HEAD -->
<?php
    include_once($_SERVER['DOCUMENT_ROOT'] . '/modules/head.php');
?>

<!-- BODY -->
<body id='top'>

    <!-- Intro -->
    <section class='topInfo'>
        <div class='wrapperTop <?= $bg ?>'>
            
            <header>
                <!-- Logo -->
                <a href='<?= $hrefMain ?>' class='logoI'><img src='images/logo/logo_mixColorText.svg' alt='Logo'></a>

                <!-- Navigation -->
                <nav>
                    <a href="<?= $hrefMain ?>" class="hide <?= $classMain ?>">На главную</a>
                    <a href="<?= $anchors ?>#service">Наши услуги</a>
                    <a href="<?= $hrefRouts ?>" <?= $classRouts ?>>Маршруты</a>
                    <a href="<?= $anchors ?>#about">О нас</a>                    
                    <a href="<?= $anchors ?>#foto">Фотоотчеты</a>
                    <a href="<?= $anchors ?>#testimon">Отзывы</a>
                    <a href="#news">Новости</a>
                    <a href="<?= $hrefContacts ?>" <?= $classContacts ?>>Контакты</a>

                    <!-- Menu button for screens <780px -->
                    <div class="menu-btn">
                        <div class="btn-lines"></div>
                        <div class="btn-lines"></div>
                        <div class="btn-lines"></div>
                    </div>
                </nav>
            </header>

            <!-- Page description -->
            <div class="textInfo">
                <?php
                    $result = getData($db, '*', 'pages_all_intro', 'page_name', $page);
                    $row = mysqli_fetch_assoc($result);
                ?>
                <h1><?= $row['title'] ?></h1>
                <?= $row['description'] ?>
            </div>

            <div>
                <a href="<?= $hrefButton ?>" class="button">
                    <?= $button ?>
                </a>
            </div>

        </div>
    </section>
