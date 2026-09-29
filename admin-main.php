<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<!-- Link to external CSS for styling the admin login page -->
	<link rel="stylesheet" type="text/css" href="css/admin-login.css">
	<!-- Link to external Font Awesome CSS for using icons (like the eye icon) -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
	<!-- Form for admin login, which sends data to 'admin-login.php' using the POST method -->
     <form action="admin-login.php" method="post">
     	<h2>ADMIN LOGIN</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

		<!-- Label and input field for the admin username -->
     	<label>Admin Name</label>
     	<input type="text" name="uname" placeholder="Admin Name"><br>
		 <div class="password-container">

		<!-- Label and input field for the admin password -->
     	<label>Admin Password</label>
     	<input type="password" name="password" id="password" placeholder="Password"><br>

		<!-- Eye icon to toggle password visibility -->
		 <i class="fa fa-eye" id="togglePassword"></i>
		 </div>

     	<button type="submit">Login</button>
     </form>
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
    </script>
</body>
</html>
