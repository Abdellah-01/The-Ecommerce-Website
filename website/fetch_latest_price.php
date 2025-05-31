<?php
include '../admin/dbcon.php'; // Your DB connection

// Query to get sum of total_price for ALL records in temp_cart
$qsql = "SELECT SUM(total_price) AS total_amount FROM temp_cart";
$result = $con->query($qsql);

if ($result && $result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $total_amount = $row['total_amount'];
    
    // Format the output with 2 decimal places
    echo $total_amount ? number_format($total_amount, 2, '.', '') : "0.00";
} else {
    echo "0.00"; // Fallback if no records found
}
?>