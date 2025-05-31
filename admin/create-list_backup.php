<?php
require 'dbcon.php'; // Include your database connection

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $category_name = trim($_POST['category_name']);
    
    // Basic validation
    if (empty($category_name)) {
        die("Category name cannot be empty");
    }

    // Default empty image value
    $image = ''; // You can set a default image path if needed
    
    // Prepare and execute INSERT
    $stmt = $con->prepare("INSERT INTO catagory (catagory_name, image, inserted_date) VALUES (?, ?, NOW())");
    $stmt->bind_param("ss", $category_name, $image);
    
    if ($stmt->execute()) {
        header("Location: category-list.php?success=1");
    } else {
        header("Location: category-list.php?error=1");
    }
    exit();
} else {
    header("Location: category-list.php");
    exit();
}
?>