<footer>

    <div class="wrapperEndInfo" id="news">
        <div class="contactsNews">

            <!-- Logo & contacts -->
            <div class="logoContacts <?= ($_SERVER['REQUEST_URI'] === '/contacts.php') ? 'noAddressLogo' : '' ?>">
                <a href="/" class="logoI"><img src="images/logo/logo_mixColorText.svg" alt="Logo"></a>           
                <!-- Address and social networks (but not on the page 'Contacts') -->
                <?php
                    if ($_SERVER['REQUEST_URI'] != '/contacts.php') {
                        include_once($_SERVER['DOCUMENT_ROOT'] . '/modules/address_socNet.php');
                    };
                ?>
            </div>
            
            <!-- News -->
            <div class="news <?= ($_SERVER['REQUEST_URI'] === '/contacts.php') ? 'noAddressNews' : '' ?>">
                <h4>Последние новости</h4>

                <?php
                    $resultNews = getData($db, '*', 'news');
                    while($row = mysqli_fetch_assoc($resultNews)):
                ?>
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

<?php
    include_once($_SERVER['DOCUMENT_ROOT']) . '/modules/buttonToUp.php';
?>

    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="js/main.js"></script>

</body>
</html>