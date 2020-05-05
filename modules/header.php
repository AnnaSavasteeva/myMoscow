<!-- Шапка -->
<header>
    <!-- Лого -->
    <a href="/" class="logoI"><img src="/images/logo/logo_mixColorText.svg" alt="Logo"></a>

    <!-- Навигация -->
    <nav>
        <a href="/" <?= $linkClassMain ?>>На главную</a>
        <a href="index.php#service">Наши услуги</a>
        <a href="routs.php" target="blank" <?= $linkClassRouts ?>>Маршруты</a>
        <a href="index.php#about">О нас</a>
        <a href="index.php#foto">Фотоотчеты</a>
        <a href="index.php#testimon">Отзывы</a>
        <a href="index.php#news">Новости</a>
        <a href="contacts.php" target="blank" <?= $linkClassContacts ?>>Контакты</a>

        <!-- Кнопка отображения меню для экрана <780px -->
        <div class="menu-btn">
            <div class="btn-lines"></div>
            <div class="btn-lines"></div>
            <div class="btn-lines"></div>
        </div>
    </nav>
</header>