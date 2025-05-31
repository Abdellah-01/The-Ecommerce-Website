<?php
require 'dbcon.php';
// Assuming these variables already have values
$collection_name = mysqli_real_escape_string($con, $_POST['collection_name']);


// Insert query
$sql = "INSERT INTO `featured_collections`( `collection_name`) VALUES ('$collection_name')";


echo "$sql";


if (mysqli_query($con, $sql)) {
    echo "Product added successfully!";
 header("Location: th-featured-collections.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}

mysqli_close($con);
?>