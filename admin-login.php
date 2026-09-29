<?php 
session_start(); 
include "./db/config.php";

// Check if the form is submitted with the required fields 'uname' and 'password'
if (isset($_POST['uname']) && isset($_POST['password'])) {

	// Function to sanitize and validate user input
	function validate($data){
       $data = trim($data); // Remove extra spaces
	   $data = stripslashes($data); // Remove backslashes
	   $data = htmlspecialchars($data);
	   return $data;
	}

	// Validate and sanitize username and password input
	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);

	if (empty($uname)) {  // Check if the username is empty
		header("Location: admin-main.php?error=User Name is required");
	    exit();
	}else if(empty($pass)){ // Check if the password is empty
        header("Location: admin-main.php?error=Password is required");
	    exit(); // Stop further execution and redirect to login page with an error message
	}else{
		// SQL query to check if the username and password match an existing admin in the database
		$sql = "SELECT * FROM admin  WHERE user_name='$uname' AND password='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) == 1) {  // Check if there is exactly one matching row
			$row = mysqli_fetch_assoc($result);

            if ($row['user_name'] == $uname && $row['password'] == $pass) {
				// Set session variables with user information upon successful login
            	$_SESSION['user_name'] = $row['user_name'];
            	$_SESSION['name'] = $row['name'];
            	$_SESSION['id'] = $row['id'];
            	header("Location: admin.php"); // Redirect to the admin dashboard page
		        exit();
            }else{
				// Redirect to the login page with an error message if the credentials are incorrect
				header("Location: admin-main.php?error=Incorect User name or password");
		        exit();
			}
		}else{
			// Redirect to the login page with an error message if no matching user is found
			header("Location: admin-main.php?error=Incorect User name or password");
	        exit();
		}
	}
	
}else{ 
	// Redirect to the login page if the required form data is not submitted
	header("Location: admin-main.php");
	exit();
}?>
