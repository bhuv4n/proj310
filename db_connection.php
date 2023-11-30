<?php
// db_connection.php

$servername = "localhost";
$username = "root";
$password = "Bhuvan@11";
$database = "fast_travel";

// Creating connection
$conn = mysqli_connect($servername, $username, $password, $database);

// to Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
