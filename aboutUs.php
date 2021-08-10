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
    <link rel="stylesheet" href="Styles/footer.css">
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
    <h2>Про нас</h2>
    <div class="main_box">
        <div class="box">
            <img src="images/Img4.jpg" alt="About Us" width="200px">
            <img src="images/Img4.jpg" alt="About Us" width="200px">
            <img src="images/Img4.jpg" alt="About Us" width="200px">
            <img src="images/Img4.jpg" alt="About Us" width="200px">
        </div>
        <ul class="list_about">
            <li>Почему мы?</li>
            <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam tempor quam ex, sit amet euismod leo viverra vitae. Etiam eget risus id eros ornare accumsan. Curabitur feugiat finibus odio, at lacinia risus pellentesque vitae. Etiam eu iaculis turpis. Vestibulum ac neque magna. Integer quis rutrum sem. Phasellus consectetur tincidunt risus in finibus. Maecenas nec nulla tempor, accumsan nisl lacinia, vehicula turpis. Mauris nibh arcu, molestie non vulputate a, hendrerit a lacus. Ut ut aliquet neque. Suspendisse consequat ex vitae velit sagittis laoreet. Vestibulum gravida, dolor tincidunt fringilla finibus, lacus nisi iaculis justo, id pharetra odio orci non mauris. Donec felis mi, pellentesque ut elit nec, aliquet viverra lorem. Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sodales purus mi.</li>
        </ul>
    </div>
<!--    <h2 style="text-align: center">Где мы находимся</h2>-->
<!--    <div class="map">-->
<!--        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1323.6729341030089!2d35.0555076349812!3d48.43070132179847!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40dbfcc9cd38add9%3A0xec74071e4dd6c554!2sHoryana%20St%2C%2025%2C%20Dnipropetrovs&#39;k%2C%20Dnipropetrovs&#39;ka%20oblast%2C%2049000!5e0!3m2!1sen!2sua!4v1624214830990!5m2!1sen!2sua" loading="eager"></iframe>-->
<!--    </div>-->
    <!-- Footer -->
    <? require_once(ROOT.'\siteItems\footer.php'); ?>

</body>
<script src="JavaScript/preloader.js"></script>
<script src="JavaScript/mainPage.js"></script>
<script src="JavaScript/aboutUs.js"></script>
</html>