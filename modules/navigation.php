<!-- Navigation -->
<nav>
    <a
        href="<?= ($_SERVER['REQUEST_URI'] === '/') ? '#' : '/' ?>"
        class="hide <?= ($_SERVER['REQUEST_URI'] === '/') ? 'notActive' : ''?>"
    >На главную</a>

    <a href="<?= ($_SERVER['REQUEST_URI'] === '/') ? '' : '/' ?>#service">Наши услуги</a>

    <a
        <?php if ($_SERVER['REQUEST_URI'] === '/routs.php') {?>
            href="#" class="notActive"
        <?php } else { ?>
            href="routs.php"
        <?php } ?>
    >Маршруты</a>

    <a href="<?= ($_SERVER['REQUEST_URI'] === '/') ? '' : '/' ?>#about">О нас</a>
    
    <a href="<?= ($_SERVER['REQUEST_URI'] === '/') ? '' : '/' ?>#foto">Фотоотчеты</a>

    <a href="<?= ($_SERVER['REQUEST_URI'] === '/') ? '' : '/' ?>#testimon">Отзывы</a>

    <a href="#news">Новости</a>

    <a
        <?php if ($_SERVER['REQUEST_URI'] === '/contacts.php') {?>
            href="#" class="notActive"
        <?php } else { ?>
            href="contacts.php"
        <?php } ?>
    >Контакты</a>


    <!-- Menu button for screens <780px -->
    <div class="menu-btn">
        <div class="btn-lines"></div>
        <div class="btn-lines"></div>
        <div class="btn-lines"></div>
    </div>
</nav>