<?php
// upload.php - Simple image upload handler

require 'dbcon.php';
// Process form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['image'])) {
    $product_id = $_POST['product_id'];
    
    // File upload handling
    $upload_dir = 'products/';
    $file_name = uniqid() . '_' . basename($_FILES['image']['name']);
    $target_path = $upload_dir . $file_name;
    
    // Move uploaded file
    if (move_uploaded_file($_FILES['image']['tmp_name'], $target_path)) {
        // Insert into database
        $sql = "INSERT INTO `product_images` (`product_id`, `image_path`) 
                VALUES ('$product_id', '$target_path')";
        
        if ($con->query($sql)) {
            echo "Image uploaded successfully!";
                header("Location: add-image.php?id=$product_id  ");

        } else {
            echo "Error: " . $con->error;
        }
    } else {
        echo "Error uploading file.";
    }
}
$con->close();
?> 