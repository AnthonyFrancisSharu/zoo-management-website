<?php
session_start();

// Check if the user is logged in by verifying session variables
if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) { 
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Home</title>
    <!-- Link to the external CSS file for styling the admin home page -->
    <link rel="stylesheet" href="css/admin.css">
</head>
<body>
<?php include 'admin-sidebar.html';?>
    <div class="container"> <!-- Main container for the content of the page -->
    <div class="content"> <!-- Content area that welcomes the user -->
        <h1>Hi, <span><?php echo $_SESSION['name']; ?></span></h1><br>
        <h2>Welcome to ZooParc Admin Page<span> <br>
    </div>
    </div>
</body>
</html>
<?php
// If the user is not logged in, redirect them to the login page
}else{
     header("Location: admin-main.php");
        exit();
}
?>
