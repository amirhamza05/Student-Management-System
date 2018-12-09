<?php
$servername = "localhost";
$username = "root";
$password = "jkc1234jkc123";
$dbname = "hamza_new";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>