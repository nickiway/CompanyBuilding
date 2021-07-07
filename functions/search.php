<?php
// Search block
$getQuerySerach = null;
if(empty($_GET['Search']) == false) { 
    $getQuerySerach = $_GET['Search'];
    $cancelButton = "flex"; 
} 
