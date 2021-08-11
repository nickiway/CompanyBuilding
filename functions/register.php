<?php
define('ROOT', dirname(__FILE__, 2));
require_once(ROOT.'\config\connect.php');
// All inputs
$data = array(
    'Name' => $_POST['Name'],
    'Email' => $_POST['Email'],
    'Password' => $_POST['Pass'],
    'PasswordRepeat' => $_POST['PassRepeat']
);
// Patern to Check email
$pattern = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i";
// Function to check the repetion
function checkMail($data, $connect){
    $getItem = mysqli_query($connect, "SELECT Email FROM users");
    while ($row = mysqli_fetch_assoc($getItem)) {
        if ($row['Email'] == $data['Email'])  { return true; break;} 
    }
}
// Check Name

// Checkign if some of parametrs are incorect or repeateble
if($_POST != null && $data['Password'] == $data['PasswordRepeat'] >= 6 && preg_match($pattern, $data['Email'])){
    print_r("Ok");
    if (checkMail($data, $connect) == null ) {
        $passwordHash =  password_hash($data['Password'], PASSWORD_DEFAULT);
        mysqli_query($connect, "INSERT INTO `users`(Name,Email,Password) VALUES ('$data[Name]','$data[Email]','$passwordHash')");
    } else{
        die("<h1 class = 'toCenter'>You have already used this email.</h1>");
    }
}


