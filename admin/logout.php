<?php
// Start the session
session_start();

// Check if the user is logged in
if(isset($_SESSION["username"])) {
    // Unset all of the session variables
    $_SESSION = array();

    // Destroy the session
    session_destroy();

    // Redirect to the login page or any other desired page
    header("Location: login.php");
    exit;
} else {
    // Redirect to the login page if the user is not logged in
    header("Location: login.php");
    exit;
}
?>
