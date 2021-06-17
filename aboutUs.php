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
    <title>Добро пожаловать!</title>
</head>
<body>
    <? require_once(ROOT.'\siteItems\preloader.php'); ?>
    <!-- Header -->
    <? require_once(ROOT.'\siteItems\header.php'); ?>
    <!-- Body -->
    <div class="box">
        <div class="info_left">
            <img src="" alt="About Us" width="100%">
        </div>
        <div class="list">
            <ul>
                <li>1</li>
                <li>2</li>
                <li>3</li>
                <li>4</li>
            </ul>
        </div>
        <div class="info_right">
            <img src="" alt="About Us" width="100%">
        </div>
    </div>
    <!-- Footer -->
</body>
<script src="JavaScript/preloader.js"></script>
<script src="JavaScript/mainPage.js"></script>
</html>