<?php
// connect to data base
define("SERVER",'localhost');
define("LOGIN",'root');
define("PASSWORD",'mysql');
define("DATABASE",'buildingcompany');
$connect = mysqli_connect(SERVER,LOGIN,PASSWORD,DATABASE);