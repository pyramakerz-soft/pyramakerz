<?php
require 'db.php';

$sql = "UPDATE prizes SET taken = 0";
if (mysqli_query($conn, $sql)) {
    echo json_encode(["status" => "success", "message" => "All prizes have been reset."]);
} else {
    echo json_encode(["status" => "error", "message" => "Error resetting prizes"]);
}
?>
