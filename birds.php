<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta tags for character encoding and viewport settings for responsive design -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Birds</title>
    <link rel="stylesheet" href="css/birds.css">
</head>
<body>
<?php
    include "./navbar/navbar.php";  
?>
<section class="birds">
    <div class="title">
        <h1>Birds</h1>
        <div class="line"></div>
    </div>
    <div class="row">
        <div class="col">
            <img src="./images/macaw.png" alt="Bird 1" class="macaw">
            <h4>Macaw</h4>
            <p>Nickname: Rainbow <br>
            Breed: Blue and Gold Macaw <br>
            Date of Birth: January 8, 2019</p>
        </div>
            
        <div class="col">
           <img src="./images/peacock.png" alt="Bird 2" class="peacock">
            <h4>Peacock</h4>
            <p>Nickname: Sapphire <br>
             Breed: Indian Peafowl <br>
            Date of Birth: April 10, 2018</p>
        </div>

        <div class="col">
            <img src="./images/owl.png" alt="Bird 3" class="owl">
            <h4>Owl</h4>
            <p>Nickname: Hoot <br>
                Breed: Barn Owl <br>
                Date of Birth: October 22, 2017</p>
        </div>

        <div class="col">
           <img src="./images/cocktail.png" alt="Bird 4" class="cocktail">
            <h4>Cocktail</h4>
           <p>Nickname: Sunny <br>
                Breed: Lutino Cockatiel <br>
                Date of Birth: March 3, 2020</p>
        </div>
        </div>
    </div>
</section>
<?php
include "./footer/footer.php"
?>
</body>
</html>
