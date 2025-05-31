<?php
// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

// DB connection
require'dbcon.php';
$id = isset($_POST['id']) ? (int)$_POST['id'] : 0;
$status = $_POST['status'] ?? 'Inactive';

if ($id > 0 && in_array($status, ['Active', 'Inactive'])) {
    $stmt = $con->prepare("UPDATE preference_settings SET status = ? WHERE sno = ?");
    $stmt->bind_param("si", $status, $id);

    if ($stmt->execute()) {
        echo "Status updated to $status.";
    } else {
        echo "Error updating status.";
    }

    $stmt->close();
} else {
    echo "Invalid input.";
}

 ?>
