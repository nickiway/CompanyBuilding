<?php
// consts
$pattern = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i";
//autohorisation
if (isset($_POST['Submit'])) {
    $email = $_POST['Email'];
    $password = $_POST['Password'];
// checkig if email exists
    preg_match($pattern, $email) == false ? exit("This  email is incorrect  \"". $email. "\"") : passthru;
// checking if the user is signed up
    $result = mysqli_query($connect,"SELECT * FROM users WHERE Email = '$email'");
    count(mysqli_fetch_assoc($result)) == null ? exit("There is no email like this \"". $email. "\"") : passthru;
// checking the password 
    password_verify($password,  mysqli_fetch_assoc($result)['Password']) == false ? exit("The password is incorrect :  \"". $password. "\"") : print_r("Welcome :)");
}
 