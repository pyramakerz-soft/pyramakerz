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

// Query to fetch schools where taken = 0
$sql = "SELECT id, name FROM schools WHERE taken = 0";
$result = $conn->query($sql);

$schools = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $schools[] = ["label" => $row["name"], "value" => $row["id"], "question" => "Select this school?"];
    }
}

// Close connection
$conn->close();

// Return JSON response
echo json_encode($schools);
?>
