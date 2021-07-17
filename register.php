<?php
    require_once("functions/register.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регестрируйтесь с нами</title>
    <link rel="stylesheet" href="Styles/main.css">
    <link rel="stylesheet" href="Styles/registerOrLogin.css">
</head>
<body>
    <h1 class = "toCenter">Registration !</h1>
    <div class="toCenter">
        <form class = "register font-bold" method = post>
            
            <input type="text" name = "Name" id = "name" placeholder = "name">

                <div class = "dispay-flex position-relative setShadow">
                    <input type="email" name = "Email" placeholder = "email">
                    <label for="name" class = "register__notification font-bold">✕</label> 
                </div>
                <input type="password" id = "Pass" name = "Pass" placeholder = "password">
        
                
                <br><input type="password" name = "PassRepeat" placeholder = "Repeat password">
                <br><input type="submit" value="Register">
            </form>
    </div>
    <p class = "toCenter">
        <button class = "register__button" onclick = "showPass('Pass')">Show pass</button>
    </p>
</body>
<script src="JavaScript/registerOrLogin.js"></script>
</html>