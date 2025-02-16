<?php
header("Content-Type: application/json");
require_once "db.php"; // Database connection

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(["status" => "error", "message" => "Invalid request method."]);
    exit;
}

// Validate prize name
if (!isset($_POST['prize_name']) || empty(trim($_POST['prize_name']))) {
    echo json_encode(["status" => "error", "message" => "Prize name is required."]);
    exit;
}

$prize_name = trim($_POST['name']);

// Check if an image was uploaded
if (!isset($_FILES['prize_image']) || $_FILES['prize_image']['error'] !== UPLOAD_ERR_OK) {
    echo json_encode(["status" => "error", "message" => "Prize image is required."]);
    exit;
}

// Image upload directory
$target_dir = "../prizes/";
$image_name = time() . "_" . basename($_FILES["image"]["name"]);
$target_file = $target_dir . $image_name;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
$allowed_types = ["jpg", "jpeg", "png", "gif"];

// Validate image type
if (!in_array($imageFileType, $allowed_types)) {
    echo json_encode(["status" => "error", "message" => "Invalid image format. Allowed: JPG, PNG, GIF."]);
    exit;
}

// Move uploaded file
if (!move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
    echo json_encode(["status" => "error", "message" => "Error uploading image."]);
    exit;
}

// Insert into database
$stmt = $conn->prepare("INSERT INTO prizes (prize_name, prize_image) VALUES (?, ?)");
$stmt->bind_param("ss", $prize_name, $image_name);

if ($stmt->execute()) {
    echo json_encode(["status" => "success", "message" => "Prize added successfully."]);
} else {
    echo json_encode(["status" => "error", "message" => "Failed to add prize."]);
}

$stmt->close();
$conn->close();
?>
