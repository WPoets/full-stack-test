<?php
$servername = "localhost"; // Change to your database server hostname
$username = "root"; // Change to your database username
$password = "Bhise@123"; // Change to your database password
$dbname = "wpoet"; // Change to your database name

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
