<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta tags for character encoding and viewport settings for responsive design -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animal</title>
    <link rel="stylesheet" href="css/ani.css">
</head>
<body>
<?php
    include "./navbar/navbar.php";  
?>
<section class="animal"> <!-- Section title and line for visual separation -->
    <div class="title">
        <h1>Mammals</h1>
        <div class="line"></div>
    </div>
    <div class="row">   <!-- First row of animal cards -->
        <div class="col">
            <img src="./images/zebra1.png" alt="Animal 1" class="zebra">
            <h4>Zebra</h4>
            <p>Nickname: Stripes <br>
             Breed: Plains Zebra <br>
              Date of Birth: April 22, 2017</p>
        </div>
            
        <div class="col">  <!-- Second column: Kolabear -->
           <img src="./images/kolabear1.png" alt="Animal 2" class="kolabear"> <!-- Image of the Kolabear -->
            <h4>Kolabear</h4>
            <p>Nickname: Gumdrop <br>
           Breed: Queensland Koala <br>
            Date of Birth: September 13, 2018</p>
        </div>

        <div class="col">
            <img src="./images/gigreff1.png" alt="Animal 5" class="gigreff">
            <h4>Gigreff</h4>
            <p>Nickname: Sky <br>
            Breed: Masai Giraffe <br>
              Date of Birth: March 11, 2016</p>
            </div>

        <div class="col">
           <img src="./images/orangutans1.png" alt="Animal 8" class="orangutans">
            <h4>orangutans</h4>
            <p>Nickname: Ginger <br>
           Breed: Bornean Orangutan <br>
            Date of Birth: May 28, 2015</p>
        </div>
    </div>
</section>
<?php
include "./footer/footer.php"
?>
</body>
</html>
