<?php

$servername = "mysql37.unoeuro.com";
$username = "runelc_dk";
$password = "naBkRHDfr2E49ptzG653";
$dbname = "runelc_dk_db";
$port = "3306";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname, $port);

//check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
