<?php
    $title = 'Контакты';
    include_once($_SERVER['DOCUMENT_ROOT'] . '/modules/header.php');
?>


<main>
    <section class="wrapperContactUs" id="contact">
            <h2>Контактная информация</h2>
            
            <div class="contactItems">
                <?php
                    $resultContacts = getData($db, '*', 'contacts');
                    while($row = mysqli_fetch_assoc($resultContacts)):
                ?>
                    <div class="contactItem">
                        <h3 class="contacts"><?= $row['service'] ?></h3>
                        <p><i class="fa fa-at" aria-hidden="true"></i><?= $row['email'] ?></p>
                        <p><i class="fa fa-phone" aria-hidden="true"></i><?= $row['tel'] ?></p>
                        <p><i class="fa fa-clock-o icons" aria-hidden="true"></i><?= $row['workHours'] ?></p>
                    </div>
                <?php endwhile; ?>                
            </div>

    </section>


    <!-- Map -->
    <section class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2243.9878951089627!2d37.64559751563289!3d55.776082080559576!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46b54a7a220c9e5f%3A0x262ed08bf1f58a9c!2z0JHQvtC70YzRiNCw0Y8g0KHQv9Cw0YHRgdC60LDRjyDRg9C7LiwgMTIsINCc0L7RgdC60LLQsCwgMTI5MDkw!5e0!3m2!1sru!2sru!4v1573723611439!5m2!1sru!2sru" allowfullscreen="">
        </iframe>
    </section>


    <!-- Address and form -->
    <section class="wrapperAddressForm">

        <div class="address">
            <h3 class="contacts">Наш адрес</h3>
            <?php
                $addressStyle = "";
                include_once($_SERVER['DOCUMENT_ROOT'] . '/modules/address_socNet.php');
            ?> 
        </div>

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


<?php
    include_once($_SERVER['DOCUMENT_ROOT']) . '/modules/footer.php';
?>
