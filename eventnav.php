<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event</title>
    <link rel="stylesheet" href="css/eventnav.css">
</head>
<body>
<?php
    include "./navbar/navbar.php";  
?>
<section class="events">
    <div class="title">
        <h1>Up Coming Events</h1>
        <div class="line"></div> <!-- Decorative line under the title -->
        <p>Join us for an unforgettable day at the zoo with our exciting Panda, Bear, and Elephant Show! 
            Watch in awe as our gentle giants, the elephants, showcase their incredible strength and grace. 
            Be enchanted by the playful antics of our adorable pandas, and marvel at the majesty of the bears
            as they demonstrate their agility and power. It's a perfect outing for families and animal lovers 
            of all ages, offering an up-close and personal experience with some of nature's most magnificent creatures.
            Don't miss out on this extraordinary event!</p>
    </div>
    <div class="row">
         <!-- Event showcase -->
        <div class="col">
            <img src="./images/pandashow.png" alt="Panda Show"> <!-- Image for Panda Show -->
            <h4>Panda Show</h4> <!-- Title for Panda Show -->
        </div>
        <div class="col">
            <img src="./images/bearshow.png" alt="Bear Show">
            <h4>Bear Show</h4>
        </div>
        <div class="col">
            <img src="./images/elephantshow.png" alt="Elephant Show">
            <h4>Elephant Show</h4>
        </div>
    </div>
    <div class="button-container">
            <?php
            if(!isset($_SESSION["user_login"])) // Conditional button display based on user login status
            {
                ?>
                <a href="login.php" class="ctn">Learn More...</a> <!-- Button for non-logged-in users to log in -->
                <?php
            }
            else
            {
                ?>
                <a href="event.php" class="ctn">Learn More...</a> <!-- Button for logged-in users to view more details -->
                <?php
            }
            ?>
</section>

<section class="programs">
    <div class="container">
        <div class="title">
            <h1>Up Coming Programs</h1>
            <div class="line"></div>
            <p>Discover our impactful conservation programs at the zoo, dedicated to preserving wildlife and their 
                natural habitats. Join us in our mission to protect endangered species through education, research, 
                and hands-on initiatives. From habitat restoration to breeding programs, our efforts aim to ensure 
                a thriving future for animals around the world. Get involved and make a differencetogether, 
                we can create a better tomorrow for wildlife.</p>
        </div>
        <div class="program-list">
            <div class="program-item">1. Species Survival Plans (SSP)</div>
            <div class="program-item">2. Habitat Restoration Projects</div>
            <div class="program-item">3. Education and Awareness Programs</div>
            <div class="program-item">4. Conservation Breeding Programs</div>
        </div>
        <div class="button-container">
            <?php
            if(!isset($_SESSION["user_login"])) // Conditional button display based on user login status
            {
                ?>
                <a href="login.php" class="ctn">Learn More...</a> <!-- Button for non-logged-in users to log in -->
                <?php
            }
            else
            {
                ?>
                <a href="program.php" class="ctn">Learn More...</a> <!-- Button for logged-in users to view more details -->
                <?php
            }
            ?>
            

    </div>
</section>

<?php include "./footer/footer.php";?>
</body>
</html>
