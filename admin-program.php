<?php
include './db/config.php';

// Check if the form to add a program has been submitted
if(isset($_POST['add-program'])){
    // Get  program input
    $program_name = $_POST['program_name'];
    $program_time = $_POST['program_time'];
    $program_date = $_POST['program_date'];
    $program_des = $_POST['program_description'];
    $program_image = $_FILES['program_image']['name'];
    $program_image_tmp = $_FILES['program_image']['tmp_name'];
    $program_image_folder = './images/' . $program_image;

    $message = [];  // Array to store messages

    // Check if any field is empty
    if(empty($program_name) || empty($program_time) || empty($program_date) || empty($program_des) || empty($program_image)){
        $message[] = "All fields are required";
    } else {
        // Insert event into the database
        $insert = "INSERT INTO program (name, time, date, description, image) VALUES ('$program_name', '$program_time', '$program_date', '$program_des', '$program_image')";
        $upload = mysqli_query($conn, $insert);
        if($upload){
            // Move the uploaded file to the target directory
            if(move_uploaded_file($program_image_tmp, $program_image_folder)){
                $message[] = "Program added successfully"; // Success message if the program is added
            } else {
                $message[] = "Failed to upload image"; // Error message if the image upload fails
            }
        } else {
            $message[] = "Could not add Program!!!"; // Error message if the program is not added to the database
        }
    }
}

// Check if the delete action has been triggered via GET request
if(isset($_GET['delete'])){
    $id = $_GET['delete'];
     // Delete the program from the database based on the ID
    mysqli_query($conn, "DELETE FROM program WHERE id = $id"); // Ensure the table name is correct
    header('Location: admin-program.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Program</title>
    <link rel="stylesheet" href="./css/admin-program.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
</head>
<body>
<?php include 'admin-sidebar.html';?>

<?php
if (isset($message)) {
    foreach ($message as $msg) {
        echo '<span class="message">' . $msg . '</span>';
    }
}
?>
<!-- Container for the form to add a new program -->
   <div class="container">
   <div class="admin-product-form-container">

   <form action="" method="post" enctype="multipart/form-data">
    <h3>Add New Program</h3>
    <!-- Input fields for program details -->
    <input type="text" placeholder="Enter your Program Name" name="program_name" class="box">
    <input type="time" placeholder="Enter your Program Time Schedule" name="program_time" class="box">
    <input type="date" placeholder="Enter your Program Date Schedule" name="program_date" class="box">
    <textarea name="program_description" placeholder="Enter Your Program Description" class="box"></textarea>
    <input type="file" accept="image/png,image/jpeg,image/jpg" name="program_image" class="box">
    <input type="submit" class="btn" name="add-program" value="Add Program">
   </form>
   </div>
   <?php 
   $select = mysqli_query($conn, "SELECT * FROM program");
   ?>
   <div class="program-dispaly">
    <table class="program-display-table">
        <thead>
            <tr>
                 <!-- Table headers for the program details -->
                <th>Program Name</th>
                <th>Program Time</th>
                <th>Program Date</th>
                <th>Program Description</th>
                <th>Program Image</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>

        <?php  
        // Loop through each program and display its details in the table
         while($row = mysqli_fetch_assoc($select)){ ?>

            <tr>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['time']; ?></td>
                <td><?php echo $row['date']; ?></td>
                <td><?php echo $row['description']; ?></td>
                <td><img src="./images/<?php echo $row['image']; ?>" alt="Event Image" width="100" height="100"></td>
                <td><a href="program-update.php?edit=<?php echo $row['id']; ?>" class="btn btn-edit"> <i class="fas fa-edit"></i>Edit</a></td>
                <td><a href="admin-program.php?delete=<?php echo $row['id']; ?>" class="btn btn-delete"> <i class="fas fa-trash"></i>Delete</a></td>
            </tr>

        <?php }; ?>

    </table>
   </div>
   </div>
   <script>
    // JavaScript to hide the message after a few seconds
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
