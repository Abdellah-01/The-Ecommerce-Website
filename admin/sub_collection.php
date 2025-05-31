<?php
require 'dbcon.php';
// Assuming these variables already have values
$collection_name = mysqli_real_escape_string($con, $_POST['collection_name']);
$label = mysqli_real_escape_string($con, $_POST['label']);


// Insert query
$sql = "INSERT INTO `sub_featured_collections`( `collection_name`,`label`) VALUES ('$collection_name','$label')";


echo "$sql";


if (mysqli_query($con, $sql)) {
    echo "Product added successfully!";
 header("Location: th-sub-collections.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}

mysqli_close($con);
?>