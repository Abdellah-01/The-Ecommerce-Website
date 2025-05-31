<?php
// get_price.php
require '../admin/dbcon.php';

if (!isset($_GET['product_id']) || !is_numeric($_GET['product_id'])) {
    echo "0";
    exit();
}

$product_id = (int)$_GET['product_id'];
$query = "SELECT total_price FROM temp_cart WHERE sno = ?";
$stmt = $con->prepare($query);
$stmt->bind_param("i", $product_id);
$stmt->execute();
$result = $stmt->get_result();

if ($row = $result->fetch_assoc()) {
    echo $row['total_price'];
} else {
    echo "0";
}
exit();
?>