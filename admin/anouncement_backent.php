<?php
$label=$_POST['label'];
$link=$_POST['link'];

require 'dbcon.php';


$sql="INSERT INTO `announcement_bar`( `label`, `link`) VALUES ('$label','$link')";
mysqli_query($con,$sql);

if ($sql) {
    echo "Product added successfully!";
 header("Location: th-announcement.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}



?>