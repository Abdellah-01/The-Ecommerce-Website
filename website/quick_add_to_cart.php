<?php
require '../admin/dbcon.php';

$product_id = mysqli_real_escape_string($con, $_POST['product_id']);
$product_title = mysqli_real_escape_string($con, $_POST['product_title']);
$catagory_name = mysqli_real_escape_string($con, $_POST['catagory_name']);
$sub_catagory_name = mysqli_real_escape_string($con, $_POST['sub_catagory_name']);
$ip_address = mysqli_real_escape_string($con, $_POST['ip_address']);
$varient = mysqli_real_escape_string($con, $_POST['varient']);
$quantity = mysqli_real_escape_string($con, $_POST['quantity']);
$price = mysqli_real_escape_string($con, $_POST['price']);

$product_sql = mysqli_query($con, "SELECT * FROM variant WHERE product_id='$product_id' AND varient='$varient'");
$variant_row = mysqli_fetch_assoc($product_sql); // don't overwrite $varient

$total_price = $quantity * $price;

// Prepare the query
$sql = "INSERT INTO `temp_cart`(`varient`, `email`, `product_id`, `product_title`, `qty`, `price`, `catagory_name`, `sub_catagory_name`, `inserted_date`, `total_price`) 
        VALUES ('$varient', '$ip_address', '$product_id', '$product_title', '$quantity', '$price', '$catagory_name', '$sub_catagory_name', NOW(), '$total_price')";

// Debugging line (can be removed later)
// echo "$sql";

// If you want to execute it:
if (mysqli_query($con, $sql)) {
    echo "Product added successfully!";
    header("Location: index.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}

mysqli_close($con);
?>
