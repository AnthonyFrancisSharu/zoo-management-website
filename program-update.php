<?php 
include './db/config.php';

if (!isset($_GET['edit'])) {
    die("Error: Event ID is not provided.");
}

$id = $_GET['edit'];

if(isset($_POST['update-program'])){ // Check if the form has been submitted
    // Sanitize user inputs to prevent SQL injection
    $program_name = mysqli_real_escape_string($conn, $_POST['program_name']);
    $program_time = mysqli_real_escape_string($conn, $_POST['program_time']);
    $program_date = mysqli_real_escape_string($conn, $_POST['program_date']);
    $program_des = mysqli_real_escape_string($conn, $_POST['program_description']);
    // Handle file upload
    $program_image = $_FILES['program_image']['name'];
    $program_image_tmp = $_FILES['program_image']['tmp_name'];
    $program_image_folder = 'images/' . $program_image;

    $message = [];

    if(empty($program_name) || empty($program_time) || empty($program_date)|| empty($program_des)|| empty($program_image)){
        $message[] = "All fields are required";
    } else {
        // Update program in the database
        $update = "UPDATE program SET name = '$program_name', time = '$program_time', date='$program_date', description = '$program_des', image = '$program_image' WHERE id = $id";
        $upload = mysqli_query($conn, $update);
        if($upload){
            // Move the uploaded file to the target directory
            if(move_uploaded_file($program_image_tmp, $program_image_folder)){
                $message[] = "Program updated successfully";
            } else {
                $message[] = "Failed to upload image";
            }
        } else {
            $message[] = "Could not update program!!!";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program Update</title>
    <link rel="stylesheet" href="./css/admin-program.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
</head>
<body>
<?php
if(isset($message)){
    foreach($message as $msg){
        echo '<span class="message">' .$msg. '</span>';
    }
}
?>
<div class="container">
<div class="admin-product-form-container centered">

<?php
$select = mysqli_query($conn, "SELECT * FROM program WHERE id = $id");
while($row = mysqli_fetch_assoc($select)){
?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>?edit=<?php echo $id; ?>" method="post" enctype="multipart/form-data">
    <h3>Update Programs</h3>
    <input type="text" placeholder="Enter your Program Name" value="<?php echo $row['name']; ?>" name="program_name" class="box">
    <input type="time" placeholder="Enter your Program Time Schedule" value="<?php echo $row['time']; ?>" name="program_time" class="box">
    <input type="date" placeholder="Enter your Program Date Schedule" value="<?php echo $row['date']; ?>" name="program_date" class="box">
    <textarea name="program_description" placeholder="Enter your Event Description" class="box"><?php echo $row['description']; ?></textarea>
    <input type="file" accept="image/png,image/jpeg,image/jpg" name="program_image" class="box">
    <input type="submit" class="btn" name="update-program" value="Update Program">
    <a href="admin-program.php" class="btn">Go Back</a>
</form>
<?php }; ?>
</div>
</div>
<script>
document.addEventListener("DOMContentLoaded", function() {
    var messageElement = document.querySelector(".message");
    if (messageElement) {
        setTimeout(function() {
            messageElement.style.display = "none";
        }, 2000); 
    }
});
</script>
</body>
</html>
