<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program</title>
    <link rel="stylesheet" href="css/program.css">
</head>
<body>
<?php
    include "./navbar/navbar.php"; 
    include "./db/config.php";

    // Check connection
    if (!$conn) {
        die("Database connection failed: " . mysqli_connect_error());
    }

 // Define and execute program query
 $program_query1 = "SELECT * FROM program";
 $program_result = mysqli_query($conn, $program_query1);

 // Check query execution
 if (!$program_result) {
     die("Error in program query: " . mysqli_error($conn));
 }
 ?>

 <section class="programs">
    <div class="title">
        <h1>Programs</h1>
        <div class="line"></div>
    </div>
    <div class="row">
    <?php while ($row = mysqli_fetch_assoc($program_result)) { ?>
        <div class="col">
        <img src="./images/<?php echo htmlspecialchars($row['image']); ?>" alt="<?php echo htmlspecialchars($row['name']); ?>">
            <h4><?php echo htmlspecialchars($row['name']); ?></h4>
            <p class="event-time">Program Time: <?php echo htmlspecialchars($row['time']); ?></p>
            <p class="event-date">Program Date: <?php echo htmlspecialchars($row['date']); ?></p>
            <p><?php echo htmlspecialchars($row['description']); ?></p>
        </div>
        <?php } ?>
    </div>
</section>

<?php
include "./footer/footer.php";
?>
</body>
</html>
