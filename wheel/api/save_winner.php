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

// Get POST data
$data = json_decode(file_get_contents("php://input"), true);
$school_id = $data['school_id'];
$school_name = $data['school_name'];
$prize_id = $data['prize_id'];
$prize_name = $data['prize_name'];
$prize_image = $data['prize_image'];

// Insert winner into the winners table
$sql = "INSERT INTO winners (school_id, school_name, prize_id, prize_name, prize_image) VALUES (?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("issss", $school_id, $school_name, $prize_id, $prize_name, $prize_image);
$stmt->execute();

// Update taken field for the prize
$conn->query("UPDATE prizes SET taken = 1 WHERE id = $prize_id");

// Close connection
$stmt->close();
$conn->close();

echo json_encode(["success" => true]);
?>
