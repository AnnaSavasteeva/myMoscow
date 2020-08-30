<address>
    <?php
        $resultCG = getData($db, '*', 'contactsGeneral');
        while($row = mysqli_fetch_assoc($resultCG)):
    ?>
        <p><i class="fa fa-home" aria-hidden="true"></i><?= $row['address'] ?></p>
        <p><i class="fa fa-at" aria-hidden="true"></i><?= $row['email'] ?></p>
        <p><i class="fa fa-phone" aria-hidden="true"></i><?= $row['tel'] ?></p>
    <?php endwhile; ?>

    <div class="socNet">
        <?php
            $resultSN = getData($db, '*', 'socialNetworks');
            while($row = mysqli_fetch_assoc($resultSN)):
        ?>
            <a href="<?= $row['href'] ?>" rel="nofollow" target="blank"><img src="images/icons/<?= $row['icon'] ?>" alt="<?= $row['altText'] ?>"></a>
        <?php endwhile; ?>
    </div>
</address>
