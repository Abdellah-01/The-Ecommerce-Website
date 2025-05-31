<?php
require '../admin/dbcon.php';

if(isset($_GET['email'])) {
    $email = $_GET['email'];
    $query = "SELECT SUM(total_price) AS total FROM temp_cart WHERE email='$email'";
    $result = mysqli_query($con, $query);
    $row = mysqli_fetch_assoc($result);
    echo number_format($row['total'] ?? 0, 2);
} else {
    echo '0.00';
}
?>