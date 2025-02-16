<?php
header("Content-Type: application/json");
require_once "db.php"; // Database connection

if ($_SERVER['REQUEST_METHOD'] !== 'DELETE') {
    echo json_encode(["status" => "error", "message" => "Invalid request method."]);
    exit;
}

// Get school ID from the URL
$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

if ($id <= 0) {
    echo json_encode(["status" => "error", "message" => "Invalid school ID."]);
    exit;
}

// Delete the school
$stmt = $conn->prepare("DELETE FROM schools WHERE id = ?");
$stmt->bind_param("i", $id);
if ($stmt->execute()) {
    echo json_encode(["status" => "success", "message" => "School deleted successfully."]);
} else {
    echo json_encode(["status" => "error", "message" => "Failed to delete school."]);
}

$stmt->close();
$conn->close();
?>
