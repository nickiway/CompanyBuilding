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
    <link rel="shortcut icon" href="icons/favicon_created_by_logaster.ico" style="border-radius: 100%" type="image/x-icon">
    <title>Добро пожаловать!</title>
</head>
<body>
    <? require_once(ROOT.'\siteItems\preloader.php'); ?>
    <!-- Header -->
    <? require_once(ROOT.'\siteItems\header.php'); ?>
    <!-- Body -->
    <div class="main_box">
        <div class="box">
            <img src="images/Img4.jpg" alt="About Us" width="200px">
            <img src="images/Img4.jpg" alt="About Us" width="200px">
            <img src="images/Img4.jpg" alt="About Us" width="200px">
            <img src="images/Img4.jpg" alt="About Us" width="200px">
        </div>
        <ul class="list_about">
            <h1>Про нас</h1>
            <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam tempor quam ex, sit amet euismod leo viverra vitae. Etiam eget risus id eros ornare accumsan. Curabitur feugiat finibus odio, at lacinia risus pellentesque vitae. Etiam eu iaculis turpis. Vestibulum ac neque magna. Integer quis rutrum sem. Phasellus consectetur tincidunt risus in finibus. Maecenas nec nulla tempor, accumsan nisl lacinia, vehicula turpis. Mauris nibh arcu, molestie non vulputate a, hendrerit a lacus. Ut ut aliquet neque. Suspendisse consequat ex vitae velit sagittis laoreet. Vestibulum gravida, dolor tincidunt fringilla finibus, lacus nisi iaculis justo, id pharetra odio orci non mauris. Donec felis mi, pellentesque ut elit nec, aliquet viverra lorem. Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sodales purus mi.</li>
        </ul>
    </div>
    <!-- Footer -->
    <? require_once(ROOT.'\siteItems\footer.php'); ?>

</body>
<script src="JavaScript/preloader.js"></script>
<script src="JavaScript/mainPage.js"></script>
<script src="JavaScript/aboutUs.js"></script>
</html>