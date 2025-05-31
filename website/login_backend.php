<?php
session_start();
include '../admin/dbcon.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    
    // Validate inputs
    if (empty($email) || empty($password)) {
        $_SESSION['error'] = "Email and password are required";
        header("Location: index.php");
        exit();
    }
    
    // Check if user exists
    $query = "SELECT * FROM users WHERE email='$email'";
    $query_run = mysqli_query($con, $query);
    
    if (mysqli_num_rows($query_run) > 0) {
        $user = mysqli_fetch_assoc($query_run);
        
        // Verify password
        if (password_verify($password, $user['password'])) {
            // Set session variables
            $_SESSION['user_id'] = $user['sno'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['email'] = $user['email'];
            $_SESSION['mobile'] = $user['mobile'];
            $_SESSION['logged_in'] = true;
            
            // Redirect to account page
            header("Location: my-account.php");
            exit();
        } else {
            $_SESSION['error'] = "Invalid password";
            header("Location: index.php");
            exit();
        }
    } else {
        $_SESSION['error'] = "No account found with this email";
        header("Location: index.php");
        exit();
    }
} else {
    header("Location: index.php");
    exit();
}
?>