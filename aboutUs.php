<?php
// common settings
ini_set('display_errors', 1);
error_reporting(E_ALL);
// connecting files
define('ROOT', dirname(__FILE__));
require_once(ROOT.'\config\connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Bootstrap/css/all.css">
    <link rel="stylesheet" href="Styles/medias.css">
<!--    <link rel="stylesheet" href="Styles/footer.css">-->
    <link rel="stylesheet" href="Styles/header.css">
    <link rel="stylesheet" href="Styles/preloader.css">
    <link rel="stylesheet" href="Styles/aboutUs.css">
    <link rel="stylesheet" href="Styles/main.css">
    <title>Добро пожаловать!</title>
</head>
<body>
    <? require_once(ROOT.'\siteItems\preloader.php'); ?>
    <!-- Header -->
    <? require_once(ROOT.'\siteItems\header.php'); ?>
    <!-- Body -->
    <div class="box">
        <div class="info_left">
            <div>
                <img src="images/Img1.jpg" alt="About Us" width="100%">
                <div>
                    <h2>Быстро работаем</h2>
                    <p class="info">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                </div>
            </div>
            <div>
                <img src="images/Img1.jpg" alt="About Us" width="100%">
                <div>
                    <h2>Быстро работаем</h2>
                    <p class="info">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                </div>
            </div>
            <div>
                <img src="images/Img1.jpg" alt="About Us" width="100%">
                <div>
                    <h2>Быстро работаем</h2>
                    <p class="info">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                </div>
            </div>
        </div>
        <div class="info_center">
            <div class="punkt">
                1
            </div>
            <div  class="line">
            </div>
            <div class="punkt">
                2
            </div>
            <div  class="line">
            </div>
            <div class="punkt">
                3
            </div>
            <div  class="line">
            </div>
            <div class="punkt">
                4
            </div>
            <div  class="line">
            </div>
            <div class="punkt">
                5
            </div>
            <div  class="line">
            </div>
            <div class="punkt">
                6
            </div>
        </div>
        <div class="info_right">
            <div>
                <div>
                    <h2>Быстро работаем</h2>
                    <p class="info">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                </div>
                <img src="images/Img1.jpg" alt="About Us" width="100%">
            </div>
            <div>
                <div>
                    <h2>Быстро работаем</h2>
                    <p class="info">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                </div>
                <img src="images/Img1.jpg" alt="About Us" width="100%">
            </div>
            <div>
                <div>
                    <h2>Быстро работаем</h2>
                    <p class="info">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                </div>
                <img src="images/Img1.jpg" alt="About Us" width="100%">
            </div>
        </div>
    </div>
    <!-- Footer -->

</body>
<script src="JavaScript/preloader.js"></script>
<script src="JavaScript/mainPage.js"></script>
<script src="JavaScript/aboutUs.js"></script>
</html>