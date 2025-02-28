<?php
$servername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "php_demo";

$conn = mysqli_connect($servername, $dbUsername, $dbPassword, $dbName);
if (!$conn) {
    die("connection failed:" . mysqli_connect_error());
    # code...
}
