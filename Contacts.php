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
    <link rel="shortcut icon" href="icons/favicon_created_by_logaster.ico" style="border-radius: 100%" type="image/x-icon">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Bootstrap/css/all.css">
    <link rel="stylesheet" href="Styles/medias.css">
    <link rel="stylesheet" href="Styles/footer.css">
    <link rel="stylesheet" href="Styles/header.css">
    <link rel="stylesheet" href="Styles/preloader.css">
    <link rel="stylesheet" href="Styles/contacts.css">
    <link rel="stylesheet" href="Styles/main.css">
    <title>Добро пожаловать!</title>
</head>
<body>
    <? require_once(ROOT.'\siteItems\preloader.php'); ?>
    <!-- Header -->
    <? require_once(ROOT.'\siteItems\header.php'); ?>
    <!-- Body -->
    <div class="box_contacts">
        <div class="text_contacts">
            <h1>Свяжитесь с нами</h1>
            <p>Приходите к нам или свяжитесь с нами в удобный вам способ</p>
            <h3>Адресс</h3>
            Днепропетровская область, г. Днепр, Ул. Горяная, 25
            <h3>Рабочие дни</h3>
            <p style=>
                Понедельник-Пятница: 08.30 - 18.00<br>
                Суббота-Воскресенье: 09.00 - 17.00
            </p>
            <h3>Контакты</h3>
            <p>
                +38 (050) 205 4564<br>
                tchaban.aleksandr4002@gmail.com
            </p>
            <div class="socials">
                <div><i class="fab fa-telegram-plane fa-MyX1"></i></div>
                <div><i class="fab fa-viber fa-MyX1"></i></div>
                <div><i class="fab fa-google fa-MyX1"></i></div>
            </div>
        </div>
        <div  class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1323.6729341030089!2d35.0555076349812!3d48.43070132179847!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40dbfcc9cd38add9%3A0xec74071e4dd6c554!2sHoryana%20St%2C%2025%2C%20Dnipropetrovs&#39;k%2C%20Dnipropetrovs&#39;ka%20oblast%2C%2049000!5e0!3m2!1sen!2sua!4v1624214830990!5m2!1sen!2sua" loading="eager"></iframe>
        </div>
    </div>
    <!--    <h2 style="text-align: center">Где мы находимся</h2>-->
    <!--    <div >-->
    <!--        -->
    <!--    </div>-->
    <!-- Footer -->
    <? require_once(ROOT.'\siteItems\footer.php'); ?>

</body>
<script src="JavaScript/preloader.js"></script>
<script src="JavaScript/mainPage.js"></script>
<script src="JavaScript/aboutUs.js"></script>
</html>