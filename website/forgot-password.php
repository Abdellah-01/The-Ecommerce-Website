<?php
session_start();
include '../admin/dbcon.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = mysqli_real_escape_string($con, $_POST['email']);
    
    // Validate email
    if (empty($email)) {
        $_SESSION['error'] = "Email is required";
        header("Location: forgot-password.php");
        exit();
    }
    
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['error'] = "Invalid email format";
        header("Location: forgot-password.php");
        exit();
    }
    
    // Check if email exists
    $query = "SELECT * FROM users WHERE email='$email'";
    $query_run = mysqli_query($con, $query);
    
    if (mysqli_num_rows($query_run) > 0) {
        $user = mysqli_fetch_assoc($query_run);
        
        // Generate reset token (you'll need to add a reset_token column to your users table)
        $reset_token = bin2hex(random_bytes(32));
        $expiry = date("Y-m-d H:i:s", time() + 3600); // 1 hour expiry
        
        // Store token in database
        $update_query = "UPDATE users SET reset_token='$reset_token', token_expiry='$expiry' WHERE email='$email'";
        $update_run = mysqli_query($con, $update_query);
        
        if ($update_run) {
            // Send email with reset link (you'll need to implement this)
            $reset_link = "http://localhost/abdur/website/forgot-password.php?token=$reset_token";
            
            // In a real application, you would send an email here
            $_SESSION['success'] = "Password reset link has been sent to your email";
            header("Location: login.php");
            exit();
        } else {
            $_SESSION['error'] = "Failed to generate reset token";
            header("Location: forgot-password.php");
            exit();
        }
    } else {
        $_SESSION['error'] = "No account found with this email";
        header("Location: forgot-password.php");
        exit();
    }
} else {
    header("Location: forgot-password.php");
    exit();
}
?>