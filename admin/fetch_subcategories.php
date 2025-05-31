<?php
include 'dbcon.php';

header('Content-Type: application/json');

if(isset($_GET['category'])) {
    $category = $_GET['category'];
    $query = mysqli_query($con, "SELECT * FROM sub_catagory WHERE catagory_name = '$category'");
    
    $subcategories = array();
    while($row = mysqli_fetch_assoc($query)) {
        $subcategories[] = $row;
    }
    
    echo json_encode($subcategories);
} else {
    echo json_encode([]);
}
?>