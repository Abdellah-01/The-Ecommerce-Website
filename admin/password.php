<?php
// Enable errors for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

require 'dbcon.php';
// Get POST data safely
$heading = $_POST['heading'] ?? '';
$sub_heading = $_POST['sub_heading'] ?? '';
$password = $_POST['password'] ?? '';

// Optional: sanitize inputs
$heading = $con->real_escape_string($heading);
$sub_heading = $con->real_escape_string($sub_heading);
$password = $con->real_escape_string($password);

// Update record where sno = 1
$sql = "UPDATE preference_settings SET heading = ?, sub_heading = ?, password = ? WHERE sno = 1";
$stmt = $con->prepare($sql);
$stmt->bind_param("sss", $heading, $sub_heading, $password);

if ($stmt->execute()) {
    echo "<script>alert('Authentication updated successfully!'); window.location.href = 'preference.php';</script>";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
?>
