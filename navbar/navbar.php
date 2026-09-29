<?php 
session_start(); // Start a new session or resume the existing session
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zoo Website</title>
    <link rel="stylesheet" href="./css/navbar.css">
</head>
<body>
    <nav class="navbar">
        <div class="logo"><a href="index.php"><img src="./images/logo.png" alt="logo"></a></div>
        <ul class="nav-link">
            <li><a href="index.php">Home</a></li>
            <li><a href="aboutus.php">About Us</a></li>
            <li class="dropdown">
                <a href="eventnav.php">Event & Programs</a>
                <ul class="dropdown-menu">
                    <li><a href="gallery.php">Gallery</a></li>
                    <li><a href="animal.php">Animals</a></li>
                    <li><a href="food.php">Food</a></li>
                </ul>
            </li>
            <li><a href="conservation.php">Conservation</a></li>
            <li><a href="contactus.php">Contact Us</a></li>
            <?php 
            // Display login/registration or logout options based on session status
            if(!isset($_SESSION["user_login"]))
            {
                ?>
                <li class="ctn"><a href="login.php">Login</a></li>
                <li class="ctn"><a href="register.php">Registration</a></li>
                <?php
            }
            else
            {
                ?>
                 <!-- Display logout link if the user is logged in -->
                <li class="ctn"><a href="userlogout.php">Logout</a></li>
                <?php
            }
            ?>
            
        </ul>
        <img src="./images/menu-image.png" alt="Menu" class="menu-btn">
    </nav>
    <script>
        const menubtn = document.querySelector('.menu-btn');
        const navlinks = document.querySelector('.nav-link');

        menubtn.addEventListener('click', () => {
            navlinks.classList.toggle('mobile-menu');
        });
    </script>
</body>
</html>
