<?php
include './db/config.php';

// Check if the form is submitted with the 'add-event' button
if(isset($_POST['add-event'])){
     // Get the input data from the event
     $event_name = $_POST['event_name'];
     $event_time = $_POST['event_time'];
     $event_date = $_POST['event_date'];
     $event_des = $_POST['event_description'];
     $event_image = $_FILES['event_image']['name'];
    $event_image_tmp = $_FILES['event_image']['tmp_name'];
    $event_image_folder = './images/' . $event_image;

    // Initialize an array to store messages
    $message = [];

     // Check if any required field is empty
    if(empty($event_name) || empty($event_time) || empty($event_date) || empty($event_des) || empty($event_image)){
        $message[] = "All fields are required";
    } else {
        
        // Insert event into the database
    $insert = "INSERT INTO event(eventname, time, date, description, image) VALUES ('$event_name', '$event_time', '$event_date', '$event_des', '$event_image')";
        $upload = mysqli_query($conn, $insert);
        if($upload){
            // Move the uploaded file to the target directory
            if(move_uploaded_file($event_image_tmp, $event_image_folder)){
                $message[] = "Event added successfully";
            } else {
                $message[] = "Failed to upload image";
            }
        } else {
            $message[] = "Could not add event";
        }
    }
};

// Check if a delete request is made via the 'delete' GET parameter
if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    // Delete the event from the database based on its ID
    mysqli_query($conn, "DELETE FROM event WHERE id=$id");
    // Redirect to the admin-event.php page after deletion
     $message[]="Delete Successfully";
    header('location: admin-event.php');
};
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Event</title>
    <link rel="stylesheet" href="./css/admin-event.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
</head>
<body>
<!-- Include the admin sidebar navigation -->
<?php include 'admin-sidebar.html';?>

<!-- Display any messages (success or error) to the user -->
<?php
if (isset($message)) {
    foreach ($message as $msg) {
        echo '<span class="message">' . $msg . '</span>';
    }
}
?>
   <!-- Form to add a new event -->
   <div class="container">
   <div class="admin-product-form-container">

   <form action="" method="post" enctype="multipart/form-data">
    <h3>Add New Event</h3>
    <input type="text" placeholder="Enter your Event Name" name="event_name" class="box">
    <input type="time" placeholder="Enter your Event Time Schedule" name="event_time" class="box">
    <input type="date" placeholder="Enter your Event Date Schedule" name="event_date" class="box">
    <textarea name="event_description" placeholder="Enter your Event Description" class="box"></textarea>
    <input type="file" accept="image/png,image/jpeg,image/jpg" name="event_image" class="box">
    <input type="submit" class="btn" name="add-event" value="Add Event">
   </form>
   </div>
   <?php 
   $select = mysqli_query($conn, "SELECT * FROM event"); 

   ?>
   <div class="event-dispaly">
    <table class="event-display-table">
        <thead>
            <tr>
                <th>Event Name</th>
                <th>Event Time</th>
                <th>Event Date</th>
                <th>Event Description</th>
                <th>Animals Image</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>

        <!-- Loop through each event record and display it in a table row -->
        <?php  
         while($row = mysqli_fetch_assoc($select)){ ?>

            <tr>
                <td><?php echo $row['eventname']; ?></td>
                <td><?php echo $row['time']; ?></td>
                <td><?php echo $row['date']; ?></td>
                <td><?php echo $row['description']; ?></td>
                <td><img src="./images/<?php echo $row['image']; ?>" alt="Event Image" width="100" height="100"></td>
                <!-- Edit event link -->
                <td><a href="event-update.php?edit=<?php echo $row['id']; ?>" class="btn btn-edit"> <i class="fas fa-edit"></i>Edit</a></td>
                <!-- Delete event link -->
                <td><a href="admin-event.php?delete=<?php echo $row['id']; ?>" class="btn btn-delete"> <i class="fas fa-trash"></i>Delete</a></td>
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
