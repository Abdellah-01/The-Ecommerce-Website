<?php
require '../admin/dbcon.php';

// Calculate subtotal
$subtotalQuery = "SELECT SUM(qty * price) as subtotal FROM temp_cart WHERE email = '$ipaddress'";
$subtotalResult = mysqli_query($con, $subtotalQuery);
$subtotalRow = mysqli_fetch_assoc($subtotalResult);

// Get item count
$countQuery = "SELECT COUNT(*) as total_rows FROM temp_cart WHERE email = '$ipaddress'";
$countResult = mysqli_query($con, $countQuery);
$countRow = mysqli_fetch_assoc($countResult);

// Return as JSON
header('Content-Type: application/json');
echo json_encode([
    'subtotal' => $subtotalRow['subtotal'] ?? 0,
    'itemCount' => $countRow['total_rows'] ?? 0
]);
?>