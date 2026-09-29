<?php
include './db/config.php';

session_start(); // Start the session to handle session variables
session_unset(); // Unset all session variables
session_destroy(); // Destroy the session to completely log the user out

header('location:admin-login.php'); // Redirect the user to the admin login page

?>