<?php
require '../admin/dbcon.php';

$ipaddress = getenv("REMOTE_ADDR"); // or use $_SESSION/email if logged in
$count_query = "SELECT COUNT(*) as total_rows FROM temp_cart WHERE email='$ipaddress'";
$result = mysqli_query($con, $count_query);
$row = mysqli_fetch_assoc($result);

echo $row['total_rows'];
?>
