<?php
require 'dbcon.php';
// Assuming these variables already have values
$product_id = mysqli_real_escape_string($con, $_POST['product_id']);
$product_title = mysqli_real_escape_string($con, $_POST['product_title']);
$description = mysqli_real_escape_string($con, $_POST['description']);
$category = mysqli_real_escape_string($con, $_POST['category']);
$subcategory = mysqli_real_escape_string($con, $_POST['subcategory']);
$product_type = mysqli_real_escape_string($con, $_POST['product_type']);
$regular_price = floatval($_POST['regular_price']);
$offer_price = floatval($_POST['offer_price']);

// Insert query
$sql = "INSERT INTO product 
        (product_id, product_title, description, catagory_name, sub_catagory_name, product_type, regular_price, offer_price,inserted_date) 
        VALUES ('$product_id', '$product_title', '$description', '$category', '$subcategory', '$product_type', $regular_price, $offer_price,NOW())";



if (mysqli_query($con, $sql)) {
    echo "Product added successfully!";
 header("Location: varient.php?id=$product_id");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}

mysqli_close($con);
?>