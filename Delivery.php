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
    <link rel="stylesheet" href="Styles/delivery.css">
    <link rel="stylesheet" href="Styles/main.css">
    <title>Добро пожаловать!</title>
</head>
<body>
    <? require_once(ROOT.'\siteItems\preloader.php'); ?>
    <!-- Header -->
    <? require_once(ROOT.'\siteItems\header.php'); ?>
    <!-- Body -->
    <div class="box_delivery">
        <div>
            <h1>Доставка и оплата</h1>
            <h3>Самовывоз:</h3>
            Вы можете сами забрать заказанный Вами товар с магазина.
            <h3>Доставка от нас</h3>
            <p>
                Производиться нашим водителем на газеле.
            </p>
            <h3>Оплата производиться: </h3>
            <p>
                Оплата в магазине с продавцом.<br>
                Денежный перевод на карту банка: Приват банка.
            </p>
            <h3>Примечание:</h3>
            <p>
                Минимальный заказ для отправки курьерскими службами (200грн.)<br>
                Отрезной товар (ПРОВОД) отпускаеться только при полной предоплате.<br>
                Товары дороже 2000грн. отправляются курьерскими службами при 10% предоплате.
            </p>
        </div>
        <div>
            <img src="images/Gazel.jpg" alt="" width="700">
        </div>
    </div>
    <!-- Footer -->
    <? require_once(ROOT.'\siteItems\footer.php'); ?>
</body>
<script src="JavaScript/preloader.js"></script>
<script src="JavaScript/mainPage.js"></script>
<script src="JavaScript/aboutUs.js"></script>
</html>