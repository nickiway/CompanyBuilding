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
    <link rel="stylesheet" href="Styles/main.css">
    <link rel="stylesheet" href="Styles/mainPage.css">
    <link rel="stylesheet" href="Styles/header.css">
    <link rel="stylesheet" href="Styles/preloader.css">
    <title>Добро пожаловать!</title>
</head>
<body>
    <? require_once(ROOT.'\siteItems\preloader.php'); ?>
    <!-- Header -->
    <? require_once(ROOT.'\siteItems\header.php'); ?> 
    <!-- Body -->
    <div class="main">
        <div class="toCenter">
            <div class="main__namer font-bold">Товары на Ваш выбор</div>
        </div>
        <div class="toCenter">
            <div class="main__items toCenter">
                <? require_once(ROOT.'\functions\getGoods.php');?>
            </div>
        </div>
    </div>
    <!-- Footer -->

</body>
<script src="JavaScript/preloader.js"></script>
<script src="JavaScript/mainPage.js"></script>
</html>