<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animal</title>
    <link rel="stylesheet" href="css/mostviewed.css"> <!-- Link to the CSS file for styling -->
</head>
<body>
<?php
    include "./navbar/navbar.php";  
?>
<section class="animal">
    <div class="title">
        <h1>Most Viewed Pets</h1>
        <div class="line"></div>
    </div>
    <div class="row">
        <div class="col">
            <img src="./images/panda.png" alt="Animal 1" class="panda">
            <h4>Panda</h4>
            <p>Nickname: Bamboo <br>
              Breed: Giant Panda <br>
            Date of Birth: March 15, 2018</p>
        </div>

        <div class="col">
           <img src="./images/whitelion1.png" alt="Animal 2" class="whitetiger">
            <h4>White Tiger</h4>
           <p>Nickname: Snow <br>
            Breed: Bengal Tiger <br>
            Date of Birth: October 30, 2016</p>
        </div>

        <div class="col">
            <img src="./images/whitepeacock.png" alt="Animal 3" class="whitepeacock">
            <h4>White Peacock</h4>
            <p> Nickname: Pearl <br>
            Breed: Indian Peafowl <br>
            Date of Birth: June 21, 2019</p>
        </div>

        <div class="col">
           <img src="./images/lion1.png" alt="Animal 4" class="lion">
            <h4>Lion</h4>
            <p>Nickname: King <br>
                Breed: African Lion <br>
                Date of Birth: August 14, 2015</p>
            </div>
        </div>
</section>
<?php
include "./footer/footer.php"
?>
</body>
</html>
