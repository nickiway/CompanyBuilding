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
    <link rel="stylesheet" href="Styles/main.css">
    <link rel="stylesheet" href="Styles/mainPage.css">
<!--    <link rel="stylesheet" href="Styles/footer.css">-->
    <link rel="stylesheet" href="Styles/header.css">
    <link rel="stylesheet" href="Styles/preloader.css">
    <title>Добро пожаловать!</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
</head>
<body>
    <!-- <? require_once(ROOT.'\siteItems\preloader.php'); ?> -->
    <!-- Header -->
    <? 
        require_once('functions/sort.php');
        require_once('functions/search.php');
    ?>
    <? require_once(ROOT.'\siteItems\header.php'); ?> 
    <!-- Body -->
    <div class="toCenter">
        <div class="main-cards">
            <div class="main__filter" >
                Filter
                <form method="get" >
                    <select onchange="if (this.value) window.location.href = this.value">
                        <option style = "display:none;" value="current">Сортировать по имени (по убыванию)</option>
                        <optgroup label = "По названию"></optgroup>
                        <option value="index.php?sort=Name&Search=<?echo $getQuerySerach?>">Сортировать по имени (по возвростанию)</option>
                        <option value="index.php?sort=Name-desc&Search=<?echo $getQuerySerach?>">Сортировать по имени (по убыванию)</option>
                        <optgroup label = "По цене"></optgroup>
                        <option value="index.php?sort=Cost&Search=<?echo $getQuerySerach?>">Сортировать по цене (по возвростанию)</option>
                        <option value="index.php?sort=Cost-desc&Search=<?echo $getQuerySerach?>">Сортировать по цене (по убыванию)</option>
                    </select>
                </form>
            </div>
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