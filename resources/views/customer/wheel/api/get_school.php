<?php
header("Content-Type: application/json");
require_once "db.php"; // Database connection

// Fetch all schools
$result = $conn->query("SELECT id, name FROM schools WHERE taken = 0");

$schools = [];
while ($row = $result->fetch_assoc()) {
    $schools[] = $row;
}

// Close connection
$conn->close();

// Return JSON response
echo json_encode($schools);
?>
