<?php
    // Подключение к БД 'myMoscow'
    include_once($_SERVER['DOCUMENT_ROOT'] . '/config/config.php');

    // Получение адреса (таблица 'contactsGeneral')
    $query = "SELECT * FROM `contactsGeneral`";
    $resultCG = mysqli_query($db, $query);

    // Получение данных соц. сетей (таблица 'socialNetworks')
    $query = "SELECT * FROM `socialNetworks`";
    $resultSN = mysqli_query($db, $query);

?>

<!-- <address class="<?= $addressStyle ?>"> -->
<address>
    <?php while($row = mysqli_fetch_assoc($resultCG)): ?>
        <p><i class="fa fa-home" aria-hidden="true"></i><?= $row['address'] ?></p>
        <p><i class="fa fa-at" aria-hidden="true"></i><?= $row['email'] ?></p>
        <p><i class="fa fa-phone" aria-hidden="true"></i><?= $row['tel'] ?></p>
    <?php endwhile; ?>

    <div class="socNet">
        <?php while($row = mysqli_fetch_assoc($resultSN)): ?>
            <a href="<?= $row['href'] ?>" rel="nofollow" target="blank"><img src="images/icons/<?= $row['icon'] ?>" alt="<?= $row['altText'] ?>"></a>
        <?php endwhile; ?>
    </div>
</address>
