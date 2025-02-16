<?php
$host = 'localhost';
$username = 'u413666390_wheel';
$password = 'PyraDev1*';
$database = 'u413666390_wheel';

$conn = new mysqli($host, $username, $password, $database);
if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}
?>
