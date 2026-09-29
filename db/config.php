<?php 
$servername = "localhost"; // Server where the database is hosted
$username = "root"; // Username for the database
$password = ""; // Password for the database user
$dbname = "zooparc"; // Name of the database 
 
 $conn = new mysqli($servername, $username, $password, $dbname); // Create a new mysqli instance for database connection

 // Check connection
 if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
 }

?>