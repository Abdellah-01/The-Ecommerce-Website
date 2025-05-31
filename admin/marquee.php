<?php
require 'dbcon.php';
// Assuming these variables already have values
$label = mysqli_real_escape_string($con, $_POST['label']);


// Insert query
$sql = "INSERT INTO `marquee`( `label`) VALUES ('$label')";


echo "$sql";


if (mysqli_query($con, $sql)) {
    echo "Product added successfully!";
 header("Location: th-marque.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}

mysqli_close($con);
?>