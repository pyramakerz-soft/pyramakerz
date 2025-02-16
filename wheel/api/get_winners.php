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

// Get recent winners
$sql = "SELECT school_name, prize_name, prize_image FROM winners ORDER BY id DESC LIMIT 10";
$result = $conn->query($sql);

$winners = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $winners[] = $row;
    }
}

// Close connection
$conn->close();

// Return JSON response
echo json_encode($winners);
?>
