<?php
include 'dbcon.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $category_name = mysqli_real_escape_string($con, $_POST['category_name']);
    $sub_category_name = mysqli_real_escape_string($con, $_POST['sub_category_name']);
    $inserted_date = date('Y-m-d H:i:s');
    
    // File upload handling
    $target_dir = "uploads/subcategories/";
    $original_file_name = basename($_FILES["sub_category_image"]["name"]);
    $imageFileType = strtolower(pathinfo($original_file_name, PATHINFO_EXTENSION));
    
    // Generate unique filename to prevent overwrites
    $new_file_name = uniqid() . '_' . time() . '.' . $imageFileType;
    $target_file = $target_dir . $new_file_name;
    
    // Check if image file is a actual image
    $check = getimagesize($_FILES["sub_category_image"]["tmp_name"]);
    if($check === false) {
        die("Error: File is not an image.");
    }
    
    // Check file size (2MB max)
    if ($_FILES["sub_category_image"]["size"] > 2000000) {
        die("Error: File is too large. Max size is 2MB.");
    }
    
    // Allow certain file formats
    $allowed_types = ["jpg", "png", "jpeg", "gif"];
    if(!in_array($imageFileType, $allowed_types)) {
        die("Error: Only JPG, JPEG, PNG & GIF files are allowed.");
    }
    
    // Create directory if it doesn't exist
    if (!file_exists($target_dir)) {
        mkdir($target_dir, 0777, true);
    }
    
    // Upload file
    if (move_uploaded_file($_FILES["sub_category_image"]["tmp_name"], $target_file)) {
        // Insert into database
        $sql = "INSERT INTO `sub_catagory` (`catagory_name`, `sub_catagory_name`, `image`, `inserted_date`) 
                VALUES ('$category_name', '$sub_category_name', '$target_file', '$inserted_date')";
        
        if (mysqli_query($con, $sql)) {
            header("Location: sub-categories.php?success=1");
            exit();
        } else {
            die("Error: " . mysqli_error($con));
        }
    } else {
        die("Error: There was an error uploading your file.");
    }
    
    mysqli_close($con);
} else {
    header("Location: your-form-page.php");
    exit();
}
?>