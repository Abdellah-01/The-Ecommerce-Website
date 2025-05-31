<?php
require 'dbcon.php';
// Assuming these variables already have values
$collection_name = mysqli_real_escape_string($con, $_POST['collection_name']);
$label_name = mysqli_real_escape_string($con, $_POST['label_name']);


// Insert query
$sql = "INSERT INTO `multi_tabs`( `collection_name`,`label_name`) VALUES ('$collection_name','$label_name')";


echo "$sql";


if (mysqli_query($con, $sql)) {
    echo "Product added successfully!";
 header("Location: th-multi-tabs-products.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}

mysqli_close($con);
?>