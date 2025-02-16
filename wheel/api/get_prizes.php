<?php
header('Content-Type: application/json');

$host = 'localhost';
$username = 'u413666390_wheel';
$password = 'PyraDev1*';
$database = 'u413666390_wheel';

// Create connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die(json_encode(["error" => "Connection failed: " . $conn->connect_error]));
}

// Fetch one available prize where taken = 0
$sql = "SELECT id, prize_name, prize_image  FROM prizes WHERE taken = 0 LIMIT 1";
$result = $conn->query($sql);

$prize = null;
if ($result->num_rows > 0) {
    $prize = $result->fetch_assoc();
}

// Close connection
$conn->close();

// Return JSON response
echo json_encode($prize);
?>
