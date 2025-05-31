<?php
session_start();

// Unset all session variables
$_SESSION = array();

// Destroy the session
session_destroy();

// Optional: redirect to login or home page
header("Location: index.php"); // Change to your login or home page
exit();
?>
