<?php

$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "db";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Unable to Connect database: " . mysqli_connect_error());
}
?>