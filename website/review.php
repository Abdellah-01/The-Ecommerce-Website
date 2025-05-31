<?php
require '../admin/dbcon.php';
// Assuming these variables already have values
$product_id = mysqli_real_escape_string($con, $_POST['product_id']);
$rate = mysqli_real_escape_string($con, $_POST['rate']);
$product_review_title = mysqli_real_escape_string($con, $_POST['product_review_title']);
$product_review = mysqli_real_escape_string($con, $_POST['product_review']);
$username = mysqli_real_escape_string($con, $_POST['username']);
$email = mysqli_real_escape_string($con, $_POST['email']);


$sql = "INSERT INTO `review`( `product_id`, `rate`, `product_review_title`, `product_review`, `username`, `email`) VALUES ('$product_id','$rate','$product_review_title','$product_review','$username','$email')";


// echo "$sql";


if (mysqli_query($con, $sql)) {
    echo "Product added successfully!";
 header("Location: product-images-grouped.php?id=$product_id");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}

mysqli_close($con);
?>
?>