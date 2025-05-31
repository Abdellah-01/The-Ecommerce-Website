<?php
require 'dbcon.php';
// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

// Process form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $category_name = $_POST['category_name'];
    $inserted_date = date('Y-m-d H:i:s'); // Current date and time
    
    // Handle file upload
    $target_dir = "uploads/"; // Directory where you want to save images
    $target_file = $target_dir . basename($_FILES["category_image"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    
    // Check if image file is an actual image
    $check = getimagesize($_FILES["category_image"]["tmp_name"]);
    if($check === false) {
        die("File is not an image.");
    }
    
    // Check file size (e.g., 2MB max)
    if ($_FILES["category_image"]["size"] > 2000000) {
        die("Sorry, your file is too large.");
    }
    
    // Allow certain file formats
    if(!in_array($imageFileType, ["jpg", "png", "jpeg", "gif"])) {
        die("Sorry, only JPG, JPEG, PNG & GIF files are allowed.");
    }
    
    // Create uploads directory if it doesn't exist
    if (!file_exists($target_dir)) {
        mkdir($target_dir, 0777, true);
    }
    
    // Upload file
    if (move_uploaded_file($_FILES["category_image"]["tmp_name"], $target_file)) {
        // Insert into database
        $stmt = $con->prepare("INSERT INTO `catagory`(`catagory_name`, `image`, `inserted_date`) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $category_name, $target_file, $inserted_date);
        
        if ($stmt->execute()) {
            echo "New category created successfully";
                header("Location: category-list.php");

        } else {
            echo "Error: " . $stmt->error;
        }
        
        $stmt->close();
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

$con->close();
?>