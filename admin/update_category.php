<?php
// Start session and include database connection
require 'session.php';
require 'dbcon.php';

// Check if form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get form data
    $sno = $_POST['sno'];
    $catagory_name = $_POST['catagory_name'];
    
    // Validate inputs (basic example)
    if (empty($catagory_name)) {
        $_SESSION['error'] = "Category name cannot be empty";
        header("Location: category-list.php");
        exit();
    }
    
    // Prepare update statement
    $sql = "UPDATE catagory SET catagory_name = ? WHERE sno = ?";
    $stmt = mysqli_prepare($con, $sql);
    
    if ($stmt) {
        // Bind parameters
        mysqli_stmt_bind_param($stmt, "si", $catagory_name, $sno);
        
        // Execute statement
        if (mysqli_stmt_execute($stmt)) {
            $_SESSION['success'] = "Category updated successfully";
        } else {
            $_SESSION['error'] = "Error updating category: " . mysqli_error($con);
        }
        
        // Close statement
        mysqli_stmt_close($stmt);
    } else {
        $_SESSION['error'] = "Database error: " . mysqli_error($con);
    }
    
    // Redirect back to category list
    header("Location: category-list.php");
    exit();
} else {
    // If not a POST request, redirect
    header("Location: category-list.php");
    exit();
}
?>