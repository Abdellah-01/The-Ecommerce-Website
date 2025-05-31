<?php
// Set folder paths
$desktopFolder = 'desktop_banner/';
$mobileFolder = 'mobile_banner/';

// Get link
$link = $_POST['link'] ?? '';

// Get file details
$desktopFile = $_FILES['desktop_banner'];
$mobileFile = $_FILES['mobile_banner'];

// Generate unique file names
$desktopFilename = uniqid() . '_' . basename($desktopFile['name']);
$mobileFilename = uniqid() . '_' . basename($mobileFile['name']);

$desktopPath = $desktopFolder . $desktopFilename;
$mobilePath = $mobileFolder . $mobileFilename;

// Move uploaded files
$desktopUploaded = move_uploaded_file($desktopFile['tmp_name'], $desktopPath);
$mobileUploaded = move_uploaded_file($mobileFile['tmp_name'], $mobilePath);

if ($desktopUploaded && $mobileUploaded) {
    // DB connection (edit your credentials)
require 'dbcon.php';

    // Insert into database
    $stmt = $con->prepare("INSERT INTO banner (desktop_banner, mobile_banner, link) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $desktopPath, $mobilePath, $link);

    if ($stmt->execute()) {
        // echo "Banner uploaded and saved successfully.";
        echo "<script>window.location.href = 'th-banner.php';</script>";

    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $con->close();
} else {
    echo "File upload failed.";
}
?>
