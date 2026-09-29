<?php
include './db/config.php';
session_start(); // Start a new session or resume the existing session
session_unset(); // Unset all session variables to clear any stored session data
session_destroy(); // Destroy the session to completely end the user's session

 header('location:index.php'); // Redirect the user to the homepage (index.php) after logging out

?>