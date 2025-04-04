<?php
$host = "localhost";
$port = "3307"; // Custom port
$user = "root";
$pass = "";
$dbname = "simple_login";

$conn = new mysqli($host, $user, $pass, $dbname, $port);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
