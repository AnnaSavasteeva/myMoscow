<?php
    $title = 'Маршруты';
    include_once($_SERVER['DOCUMENT_ROOT'] . '/modules/header.php');
?>


<main>
    <section class="wrapperRoutsPOP">
        <h2>Популярные маршруты</h2>

        <?php
            $resultRouts = getData($db, '*', 'routs');
            while($row = mysqli_fetch_assoc($resultRouts)):
        ?>
            <div class="rout">
                <img class="routImage mCity" src="images/routs/<?= $row['image'] ?>" alt="<?= $row['altText'] ?>">
                <div class="routText">
                    <h3><?= $row['routName'] ?></h3>
                    <?= $row['routDescription'] ?>
                    <p class="price"><?= $row['duration'] ?>&nbsp;&mdash; <?= $row['price'] ?></p>
                    <div>
                        <a href="" class="button reserve" data-name="<?= $row['routName'] ?>">Забронировать</a>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    </section>
</main>


<!-- Form for booking -->
<div class="formReserveWrapper">
    <div class="formReserve">
        <a href='/' class='logoI'><img src='/images/logo/logo_mixColorText.svg' alt='Logo'></a>
        <form action="handlers/form_Routs.php" method="POST" class="routPage">
            <input type="text" name="routName" class="reserveBorders">
            <input type="text" name="name" class="reserveBorders" placeholder="ФИО">
            <input type="email" name="email" class="reserveBorders" placeholder="E-mail">
            <input type="text" name="phonenumber" class="reserveBorders" placeholder="Телефон">

            <textarea name="message" class="reserveBorders" placeholder="Комментарий"></textarea>
            
            <div class="submit">
                <input type="submit" value="Забронировать">
            </div>
        </form>
    </div>

    <div class="closeForm" title="Close"></div>
</div>


<?php
    include_once($_SERVER['DOCUMENT_ROOT']) . '/modules/footer.php';
?>
