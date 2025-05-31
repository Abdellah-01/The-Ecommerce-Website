<?php
require 'dbcon.php';
// Assuming these variables already have values
$product_id = mysqli_real_escape_string($con, $_POST['product_id']);
$varient = mysqli_real_escape_string($con, $_POST['varient']);
$varient_price = mysqli_real_escape_string($con, $_POST['varient_price']);
$available = mysqli_real_escape_string($con, $_POST['available']);


// Insert query
$sql = "INSERT INTO `variant`( `product_id`, `varient`, `varient_price`, `available`) VALUES ('$product_id','$varient','$varient_price','$available')";


echo "$sql";


if (mysqli_query($con, $sql)) {
    echo "Product added successfully!";
 header("Location: varient.php?id=$product_id");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}

mysqli_close($con);
?>