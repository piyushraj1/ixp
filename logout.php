<?php
require_once 'config.php';


// Unset the "remember_username" cookie by setting its expiration time to the past
if (isset($_COOKIE["remember_username"])) {
    setcookie("remember_username", "", time() - 3600); // Set the expiration time to the past
}

// Unset all session variables
$_SESSION = array();

// Destroy the session
session_destroy();

// Redirect the user to the login page
header("Location: login.php");
exit();
?>
