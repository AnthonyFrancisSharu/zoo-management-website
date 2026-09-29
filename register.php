<?php
include './db/config.php';
session_start();

if(isset($_POST['submit'])){
    $fname =  $_POST['fname'];
    $lname = $_POST['lname'];
    $email =  $_POST['email'];
    $phone =  $_POST['phone'];
    $pass = $_POST['password'];
    $cpass = $_POST['cpassword'];
    $user_type = 'user'; // Automatically set user_type to 'user'

    $error = []; // Initialize an array to collect error messages

    // Email validation
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error[] = 'Invalid email format!';
    }

    // Password length validation
    if(strlen($pass) < 8) {
        $error[] = 'Password must be at least 8 characters!';
    }

    // Confirm password match
    if($pass != $cpass){
        $error[] = 'Passwords do not match!';
    }

    // Check if user already exists
    $select = "SELECT * FROM user_db WHERE email= '$email'";
    $result = mysqli_query($conn, $select);

    if(mysqli_num_rows($result) > 0){
        $error[] = "User already exists";
    }

    // If there are no errors, insert the user into the database
    if(empty($error)){
        $hashedPass = md5($pass); // Hash the password before storing
        $insert = "INSERT INTO user_db (fname, lname, email, phone, password, user_type) VALUES ('$fname', '$lname', '$email', '$phone', '$hashedPass', '$user_type')";
        mysqli_query($conn, $insert);

        // Set session variables
        $_SESSION['fname'] = $fname;
        header('Location: login.php');
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Form</title>
    <link rel="stylesheet" href="css/register.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <div class="form-container">
        <form action="" method="post" onsubmit="return validateForm()">
            <h3>Register Now</h3>
         <?php
            if(isset($error)){
                foreach($error as $error){
                    echo '<span class="error-msg" id="error-msg">' . $error . '<div class="close-btn"><i class="fas fa-times"></i></div></span>';
                }
            }
         ?>
            <input type="text" name="fname" required placeholder="Enter your First Name">
            <input type="text" name="lname" required placeholder="Enter your Last Name">
            <input type="email" name="email" id="email" required placeholder="Enter Your email">
            <input type="tel" name="phone" id="phone" required placeholder="Enter your Mobile Number" maxlength="10">
            <div class="password-container">
                <input type="password" name="password" id="password" required placeholder="Enter your Password">
                <input type="password" name="cpassword" id="cpassword" required placeholder="Confirm your Password">
                <i class="fa fa-eye" id="togglePassword"></i>
            </div>
            <input type="submit" name="submit" value="Register Now" class="form-btn">
            <p>Already have an account? <a href="login.php">Login Now</a></p>
        </form>
    </div>
    <script src="js/register.js"></script> <!-- Link to the external JS file -->
</body>
</html>