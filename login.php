<?php
include './db/config.php';
session_start();

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $pass = md5($_POST['password']);

    // Prepare the SQL statement
    $sql = "SELECT * FROM user_db WHERE email = '$email' AND password = '$pass'";
    $query = mysqli_query($conn, $sql);
    if (mysqli_num_rows($query) > 0) {
        $row = mysqli_fetch_assoc($query);
        $_SESSION['user_login'] = $row['id'];
        $_SESSION['fname'] = $row['fname']; // Store the first name in the session
        $_SESSION['success_message'] = " Welcome to the Zoo Committee, " . $row['fname'] . "!";
        header('location:index.php');
        exit();
    } else {
        $_SESSION["Login_error"] = "Incorrect username or password!";
    }
}

if (isset($_SESSION["user_login"])) {
    header('location:index.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="css/login.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <div class="form-container">
        <form action="" method="post">
            <h3>Login Now</h3>
            <?php
            if (isset($_SESSION["Login_error"])) {
                echo '<span class="error-msg" id="error-msg">' . $_SESSION["Login_error"] . '<div class="close-btn"><i class="fas fa-times"></i></div></span>';
                unset($_SESSION["Login_error"]); // Clear the error after displaying it
            }
            ?>
            <input type="email" name="email" required placeholder="Enter Your email">
            <div class="password-container">
     	    <input type="password" name="password" id="password" placeholder="Password"><br>
		    <i class="fa fa-eye" id="togglePassword"></i>
		    </div>
            <div class=forgot>
            <a href="forgotpassword.html">Forgot Password?</a>
            </div>
            <input type="submit" name="submit" value="Login now" class="form-btn">
            <p>Don't have an account? <a href="register.php">Register Now</a></p>
            <p><b>Are You an Admin ?</b> <a href="admin-login.php">Click here!</a></i></p>
        </form>
    </div>

    <script>
        // JavaScript to toggle the password visibility
        const togglePassword = document.querySelector('#togglePassword');
        const password = document.querySelector('#password');

        togglePassword.addEventListener('click', function (e) {
            // Toggle the type attribute
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
            // Toggle the eye icon
            this.classList.toggle('fa-eye-slash');
        });

    $(document).ready(function() {
        $(document).on('click', '.close-btn', function() {
            $(this).closest('.error-msg').fadeOut();
        });
    });
    </script>
</body>
</html>
