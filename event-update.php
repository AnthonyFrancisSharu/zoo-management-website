<?php 
include './db/config.php';

$id = $_GET['edit']; // Get the event ID from the URL

if(isset($_POST['update-event'])){ // Check if the form has been submitted
     // Sanitize user inputs to prevent SQL injection
    $event_name = mysqli_real_escape_string($conn, $_POST['event_name']);
    $event_time = mysqli_real_escape_string($conn, $_POST['event_time']);
    $event_date = mysqli_real_escape_string($conn, $_POST['event_date']);
    $event_des = mysqli_real_escape_string($conn, $_POST['event_description']);
    // Handle file upload
    $event_image = $_FILES['event_image']['name'];
    $event_image_tmp = $_FILES['event_image']['tmp_name'];
    $event_image_folder = 'images/' . $event_image;

    $message = [];

// Check if all required fields are filled
    if(empty($event_name) || empty($event_time) || empty($event_date) || empty($event_des) || empty($event_image)){
        $message[] = "All fields are required";
    } else {
        // Update event in the database
        $update = "UPDATE event SET eventname = '$event_name', time = '$event_time', date='$event_date', description = '$event_des', image = '$event_image' WHERE id = $id";
        $upload = mysqli_query($conn, $update);
        // Check if the update query was successful
        if($upload){
            // Move the uploaded file to the target directory
            if(move_uploaded_file($event_image_tmp, $event_image_folder)){
                $message[] = "Event updated successfully";
            } else {
                $message[] = "Failed to upload image";
            }
        } else {
            $message[] = "Could not update event";
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Update</title>
    <link rel="stylesheet" href="./css/admin-event.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
</head>
<body>
<?php
// Display any messages from the form submission
if(isset($message)){
    foreach($message as $msg){
        echo '<span class="message">' .$msg. '</span>';
    }
}
?>
<div class="container">
<div class="admin-product-form-container centered">

<?php
$select = mysqli_query($conn, "SELECT * FROM event WHERE id = $id");
while($row = mysqli_fetch_assoc($select)){
?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>?edit=<?php echo $id; ?>" method="post" enctype="multipart/form-data">
    <h3>Update Event</h3>
    <input type="text" placeholder="Enter your Event Name" value="<?php echo $row['eventname']; ?>" name="event_name" class="box">
    <input type="time" placeholder="Enter your Event Time Schedule" value="<?php echo $row['time']; ?>" name="event_time" class="box">
    <input type="date" placeholder="Enter your Event Date Schedule" value="<?php echo $row['date']; ?>" name="event_date" class="box">
    <textarea name="event_description" placeholder="Enter your Event Description" class="box"><?php echo $row['description']; ?></textarea>
    <input type="file" accept="image/png,image/jpeg,image/jpg" name="event_image" class="box">
    <input type="submit" class="btn" name="update-event" value="Update Event">
    <a href="admin-event.php" class="btn">Go Back</a>
</form>
<?php }; ?>
</div>
</div>
<!-- JavaScript to hide messages after 2 seconds -->
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
