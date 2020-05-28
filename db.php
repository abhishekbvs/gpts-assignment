<?php

$servername = 'localhost';
$username = 'websetter';
$password = 'Abhi$shek';
$db = 'onlineshop';

$con = mysqli_connect($servername, $username, $password,$db);

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


?>
