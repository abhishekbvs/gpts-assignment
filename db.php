<?php

$servername = 'localhost';
$username = 'websetter';
$password = '';
$db = 'gpts-shop';

$con = mysqli_connect($servername, $username, $password,$db);

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

?>
