<!DOCTYPE html>
<?php
    require_once ("functions\logInFunction.php");
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in Page</title>
    <link rel="stylesheet" href="Styles/main.css">
    <link rel="stylesheet" href="Styles/registerOrLogin.css">
</head>
<body>
    <div class="toCenter">
        <form class = "register font-bold" method = post>
            <div><input name = "Email"  type="text"></div>
            <div><input name = "Password"  type="text"></div>
            <div><input name = "Submit" type="submit"></div>        
        </form>
    </div>
</body>
</html>