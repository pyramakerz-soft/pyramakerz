<?php
header("Content-Type: application/json");
require_once "db.php"; // Database connection

// Get POST data
$data = json_decode(file_get_contents("php://input"), true);
if (!isset($data["name"]) || empty(trim($data["name"]))) {
    echo json_encode(["status" => "error", "message" => "School name is required."]);
    exit;
}

$school_name = trim($data["name"]);

// Check if school already exists
$stmt = $conn->prepare("SELECT id FROM schools WHERE name = ?");
$stmt->bind_param("s", $school_name);
$stmt->execute();
$stmt->store_result();
if ($stmt->num_rows > 0) {
    echo json_encode(["status" => "error", "message" => "School already exists."]);
    exit;
}
$stmt->close();

// Insert into database
$stmt = $conn->prepare("INSERT INTO schools (name) VALUES (?)");
$stmt->bind_param("s", $school_name);
if ($stmt->execute()) {
    echo json_encode(["status" => "success", "message" => "School added successfully."]);
} else {
    echo json_encode(["status" => "error", "message" => "Failed to add school."]);
}
$stmt->close();
$conn->close();
?>
