<?php
    include_once($_SERVER['DOCUMENT_ROOT'] . '/modules/head.php');
?>

<!-- BODY -->
<body id='top'>

    <!-- Intro -->
    <section class='topInfo'>

        <div class='wrapperTop <?php
            // additional class depending on the page
            if ($_SERVER['REQUEST_URI'] === '/contacts.php') { 
                echo 'bgContacts';
            } elseif ($_SERVER['REQUEST_URI'] === '/routs.php') {
                echo 'bgRouts';
            } ?>
        '>
            
        <header>
            <!-- Logo -->
            <a href='/' class='logoI'><img src='images/logo/logo_mixColorText.svg' alt='Logo'></a>

            <?php
                include_once($_SERVER['DOCUMENT_ROOT'] . '/modules/navigation.php');
            ?>

        </header>