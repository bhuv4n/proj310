<?php
$servername = "localhost";
$username = "root";
$password = "Bhuvan@11";
$database = "fast_travel";
$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
