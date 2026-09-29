<?php
include './db/config.php';

// Check if the 'delete' parameter is set in the URL (for deleting a record)
if (isset($_GET['delete'])) {
    // Sanitize the ID to prevent SQL injection
    $id = mysqli_real_escape_string($conn, $_GET['delete']);
     // Create the SQL DELETE query to remove the record with the specified ID
    $delete_query = "DELETE FROM education WHERE id = '$id'";

    if (mysqli_query($conn, $delete_query)) {
        $message[] = "Educational Feedback deleted successfully";
    } else {
        $message[] = "Could not delete Educational Feedback";
    }
}

// Check if the form for adding educational content has been submitted
if (isset($_POST['add-education'])) {
      // Sanitize user inputs to prevent SQL injection
    $education_name = mysqli_real_escape_string($conn, $_POST['name']);
    $education_des = mysqli_real_escape_string($conn, $_POST['educational']);

    $message = []; // Initialize an array to store messages

    if (empty($education_name) || empty($education_des)) {
        $message[] = "All fields are required";
    } else {
        $insert = "INSERT INTO education (name, educational_content) VALUES ('$education_name', '$education_des')";

        // Execute the INSERT query and store success/failure message
        if (mysqli_query($conn, $insert)) {
            $message[] = "Educational Feedback added successfully";
        } else {
            $message[] = "Could not add Educational Feedback";
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Educational</title>
    <link rel="stylesheet" href="./css/education.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
</head>
<body>

<?php
// Display any messages stored in the $message array
if (isset($message)) {
    foreach ($message as $msg) {
        echo '<span class="message">' . $msg . '</span>';
    }
}
?>
   <div class="container">
   <div class="admin-product-form-container">

<!-- Form for adding new educational content -->
   <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" enctype="multipart/form-data">
    <h3>Educational Contents</h3>
    <input type="text" placeholder="Enter your Name" name="name" class="box">
    <textarea name="educational" placeholder="Enter Your Educational Contents" class="box"></textarea>
    <input type="submit" class="btn" name="add-education" value="Add Education Feed Back">
    <a href="conservation.php" class="btn">Go Back</a>

    </form>
   </div>
   <?php 
    // Retrieve all records from the education table
   $select = mysqli_query($conn, "SELECT * FROM education");
   ?>
   <div class="education-dispaly">
    <table class="education-display-table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Educational Contents</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>

        <?php  
        // Loop through each record and display it in the table
         while($row = mysqli_fetch_assoc($select)){ ?>

            <tr>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['educational_content']; ?></td>
                 <!-- Delete button with link to trigger the deletion of the specific record -->
                <td><a href="education.php?delete=<?php echo $row['id']; ?>" class="btn btn-delete"> <i class="fas fa-trash"></i>Delete</a></td>
            </tr>

        <?php }; ?>

    </table>
   </div>
   </div>
   <script>
document.addEventListener("DOMContentLoaded", function() {
    var messageElement = document.querySelector(".message");
    if (messageElement) {
        setTimeout(function() {
            messageElement.style.display = "none";
        }, 2000); // 2000 milliseconds = 2 seconds
    }
});
</script>

</body>
</html>
