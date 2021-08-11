<?php
// connect to data base
define("SERVER",'localhost');
define("LOGIN",'mysql');
define("PASSWORD",'mysql');
define("DATABASE",'buildingcompany');
$connect = mysqli_connect(SERVER,LOGIN,PASSWORD,DATABASE);