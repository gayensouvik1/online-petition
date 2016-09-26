<?php
 
$servername = "mysql.hostinger.in";
$username = "u346462061_uname";
$password = "uname123";
$dbname = "u346462061_data";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>