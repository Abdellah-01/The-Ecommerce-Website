<?php
// Database connection
include 'dbcon.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $product_id = $_POST['product_id'];
    $upload_date = date('Y-m-d H:i:s');
    
    // Directory where images will be stored
    $target_dir = "products/";
    
    // Process each uploaded file
    foreach ($_FILES['image']['tmp_name'] as $key => $tmp_name) {
        $file_name = $_FILES['image']['name'][$key];
        $file_tmp = $_FILES['image']['tmp_name'][$key];
        $file_size = $_FILES['image']['size'][$key];
        $file_error = $_FILES['image']['error'][$key];
        
        // Generate unique filename to prevent overwrites
        $file_ext = pathinfo($file_name, PATHINFO_EXTENSION);
        $new_file_name = uniqid('img_', true) . '.' . $file_ext;
        $target_path = $target_dir . $new_file_name;
        
        // Check for upload errors
        if ($file_error === 0) {
            // Validate file type
            $allowed_types = ['jpg', 'jpeg', 'png', 'gif'];
            if (in_array(strtolower($file_ext), $allowed_types)) {
                // Validate file size (e.g., 5MB max)
                if ($file_size <= 5000000) {
                    // Move uploaded file to target directory
                    if (move_uploaded_file($file_tmp, $target_path)) {
                        // Insert into database
                        $sql = "INSERT INTO `product_images` (`product_id`, `image_path`, `upload_date`) 
                                VALUES (?, ?, ?)";
                        $stmt = $conn->prepare($sql);
                        $stmt->bind_param("iss", $product_id, $target_path, $upload_date);
                        
                        if ($stmt->execute()) {
                            $success = true;
                        } else {
                            // Log database error
                            error_log("Database error: " . $stmt->error);
                        }
                        $stmt->close();
                    } else {
                        // Log file move error
                        error_log("Failed to move uploaded file: " . $file_name);
                    }
                } else {
                    // File too large
                    error_log("File too large: " . $file_name);
                }
            } else {
                // Invalid file type
                error_log("Invalid file type: " . $file_name);
            }
        } else {
            // Upload error
            error_log("Upload error (" . $file_error . "): " . $file_name);
        }
    }
    
    // Redirect back with success/error message
    if (isset($success) && $success) {
        header("Location: edit-product.php?id=".$product_id."&status=success");
    } else {
        header("Location: edit-product.php?id=".$product_id."&status=error");
    }
    exit();
}
?>