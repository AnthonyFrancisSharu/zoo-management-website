<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta tags for character encoding and viewport settings for responsive design -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animal</title>
    <link rel="stylesheet" href="css/animal.css">
</head>
<body>
<?php
    include "./navbar/navbar.php";  
?>
<section class="animal"> <!-- Section title and line for visual separation -->
    <div class="title">
        <h1>Get To Know About Animals</h1>
        <div class="line"></div>
    </div>
    <div class="row"> <!-- Row to display categories of animals -->
        <div class="col">  <!-- First column: Most Viewed Pets -->
            <img src="./images/panda.png" alt="Animal 1" class="mostviewed">
            <h4>Most Viewed Pets</h4>
            <p></p>
<a href="mostviewed.php" class="ctn">Learn More...</a>
        </div>
            
        <div class="col">
           <img src="./images/macaw.png" alt="Animal 2" class="birds">
            <h4>Birds</h4>
            <p></p>
<a href="birds.php" class="ctn">Learn More...</a> <!-- Link to learn more about Birds -->
        </div>

        <div class="col">
            <img src="./images/zebra1.png" alt="Animal 3" class="mammals">
            <h4>Mammals</h4>
            <p></p>
 <a href="ani.php" class="ctn">Learn More...</a>
        </div>
        </div>
    </div>
</section>
<?php
include "./footer/footer.php"
?>
</body>
</html>
