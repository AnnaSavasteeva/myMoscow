<?php
    $title = 'Главная';
    include_once($_SERVER['DOCUMENT_ROOT'] . '/modules/header.php');
?>


<main>
    <!-- Services -->
    <section class="wrapperService" id="service">
        <h2>Что мы предлагаем</h2>

        <p class="brief">
            Наша главная цель&nbsp;&mdash; рассказать о Москве так, чтобы это было интересно всем!
        </p>

        <div class="wrapperService_Items">
            <?php
                $resultServices = getData($db, '*', 'services');
                while ($row = mysqli_fetch_assoc($resultServices)):
            ?>
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


    <!-- About us -->
    <section class="wrapperAbout" id="about">
        <div class="aboutPicture"></div>
        <div class="aboutText">
            <h2>Кто мы такие</h2>

            <?php
                $resultAbout = getData($db, '*', 'about');
                while ($row = mysqli_fetch_assoc($resultAbout)):
            ?>
                <p><?= $row['aboutText'] ?></p>
            <?php endwhile; ?>
            
            <a href="contacts.php" class="button">Наши контакты</a>
        </div>
    </section>


    <!-- Photo -->
    <section class="wrapperFoto" id="foto">
        <h2>Москва в фотографиях</h2>

        <p class="brief">Проще всего рассказать обо&nbsp;всем в&nbsp;фотографиях: смотрите наши фотоотчеты и&nbsp;делитесь своими снимками.</p>
        
        <div class="foto">
            <?php
                $resultFoto = getData($db, '*', 'fotoReports');
                while($row = mysqli_fetch_assoc($resultFoto)):
            ?>
                <img class="fotoBox" src="images/main/<?= $row['foto'] ?>" alt="<?= $row['altText'] ?>">
            <?php endwhile; ?>
        </div>
    </section>


    <!-- Testimonials -->
    <section class="wrapperComments" id="testimon">
        <h2>Отзывы</h2>
        <div class="commentSlider">
            <div class="commentItems">
                <?php
                    $resultComments = getData($db, '*', 'userComments');
                    while($row = mysqli_fetch_assoc($resultComments)):
                ?>
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

            <div class="sliderBtn">
                <span class="leftArrow" title="Назад"></span>
                <span class="rightArrow" title="Вперед"></span>
            </div>
        </div>
    </section>

</main>


<?php
    include_once($_SERVER['DOCUMENT_ROOT']) . '/modules/footer.php';
?>
