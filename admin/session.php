<?php
session_start();
if (isset($_SESSION["username"])) {
    $username = $_SESSION["username"];
    $mobile = $_SESSION["mobile"];
    $email = $_SESSION["email"];
    session_write_close();
} else {
    session_unset();
    session_write_close();
    $url = "./index.php";
    header("Location: $url");
}

?>