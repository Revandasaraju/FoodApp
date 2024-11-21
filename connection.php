<?php
$servername = "localhost"; // Replace with your server
$username = "root"; // Replace with your username
$password = ""; // Replace with your password
$dbname = "demo"; // Replace with your database name

// Create connection
$connection = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}
?>
