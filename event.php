<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event</title>
    <link rel="stylesheet" href="css/event.css">
</head>
<body>
<?php
    include "./navbar/navbar.php"; 
    include "./db/config.php";

    // Check connection
    if (!$conn) {
        die("Database connection failed: " . mysqli_connect_error());
    }

    // Define and execute event query
    $event_query = "SELECT * FROM event";
    $events_result = mysqli_query($conn, $event_query);

    // Check query execution
    if (!$events_result) {
        die("Error in event query: " . mysqli_error($conn));
    }
?>
<section class="events">
    <div class="title">
        <h1> Events</h1>
        <div class="line"></div>  <!-- Decorative line under the title -->
    </div>
    <div class="row">
    <?php while ($row = mysqli_fetch_assoc($events_result)) { ?>
         <!-- Loop through the events and display each event's details -->
        <div class="col">
        <img src="./images/<?php echo ($row['image']); ?>" alt="<?php echo ($row['eventname']); ?>">
            <h4><?php echo ($row['eventname']); ?></h4>
            <p class="event-time">Event Time: <?php echo ($row['time']); ?></p>
            <p class="event-date">Event Date: <?php echo ($row['date']); ?></p>
            <p><?php echo ($row['description']); ?></p>
        </div>
        <?php } ?>
    </div>
</section>

<?php
include "./footer/footer.php";
?>
</body>
</html>
