<?php
require '../admin/dbcon.php';

if(isset($_POST['id']) && isset($_POST['product_id'])) {
    $sno = mysqli_real_escape_string($con, $_POST['id']);
    $product_id = mysqli_real_escape_string($con, $_POST['product_id']);
    
    // Delete the item from the database
    $deleteQuery = "DELETE FROM temp_cart WHERE sno = '$sno'";
    if(mysqli_query($con, $deleteQuery)) {
        echo "success";
    } else {
        echo "error";
    }
} else {
    echo "error";
}
?>