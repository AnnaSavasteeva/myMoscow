<?php
    // Подключение к БД 'myMoscow'
    include_once($_SERVER['DOCUMENT_ROOT'] . '/config/config.php');

    // Получение данных для новостей (таблица 'news')
    $query = "SELECT * FROM `news`";
    $resultNews = mysqli_query($db, $query);

    // Присвоение CSS-стилей элементам в зависимости от страницы
    $logoStyle = 'logoContacts';
    $newsStyle = 'news';
    if ($_SERVER['REQUEST_URI'] === '/contacts.php') {
        $logoStyle .= ' noAddressLogo';
        $newsStyle .= ' noAddressNews';
    };

?>

<footer>

    <!-- Контакты и новости -->
    <div class="wrapperEndInfo" id="news">
        <div class="contactsNews">

            <!-- Лого и контакты -->
            <div class="<?= $logoStyle ?>">
                <a href="/" class="logoI"><img src="images/logo/logo_mixColorText.svg" alt="Logo"></a>           
                <!-- Адрес и соц. сети, но не на странице «Контакты» -->
                <?php
                    if ($_SERVER['REQUEST_URI'] != '/contacts.php') {
                        include_once($_SERVER['DOCUMENT_ROOT'] . '/modules/address_socNet.php');
                    };
                ?>
            </div>
            
            <!-- Новости -->
            <!-- <div class="news"> -->
            <div class="<?= $newsStyle ?>">
                <h4>Последние новости</h4>

                <!-- Добавление данных из БД (таблица 'news') -->
                <?php while($row = mysqli_fetch_assoc($resultNews)): ?>
                <p>
                    <span class="date"><?= $row['newsDate'] ?></span>
                    <?= $row['newsText'] ?>
                </p>
                <?php endwhile; ?>
            </div>

        </div>
    </div>

    <!-- Copyright -->
    <div class="copyright">
        <p>© 2019 My.Moscow. Все права защищены</p>
    </div>

</footer>