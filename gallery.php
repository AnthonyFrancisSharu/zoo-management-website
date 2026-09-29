<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> <!-- Character encoding for the HTML document -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animal</title>
    <link rel="stylesheet" href="css/gallery.css">
</head>
<body>
    <?php include "./navbar/navbar.php"; ?>

    <!-- Section for displaying information and images about the zoo's animals -->
    <section class="animal">
        <div class="row">
            <div class="col content-col">
                <h1>List Of Animals In Our Zoo</h1>
                <div class="line"></div> <!-- Decorative line element -->
                <p>Zooparc Zoological Park is home to a wide variety of animals from all over the world. As you walk through 
                    our beautiful, well-designed habitats, you'll see majestic lions relaxing in the African Savannah, playful 
                    dolphins jumping in our water exhibits, and colorful parrots chatting in our tropical aviary. Our caring 
                    zookeepers and conservationists work hard to ensure each animal is well taken care of, creating spaces that
                     feel like their natural homes. Whether you're watching the graceful giraffes or the playful meerkats, every 
                     visit is a new adventure. Come and make unforgettable memories with us while learning about the amazing animal 
                     kingdom and the importance of protecting wildlife. At Zooparc Zoological Park, every moment is a 
                    chance to connect with nature and be inspired by the beauty and diversity of life.</p>
                <a href="animal.php" class="ctn">Learn More</a>
            </div>
            <div class="col image-col">
                <div class="image-gallery"> <!-- Container for the image gallery -->
                    <img src="./images/animal_1.jpg" alt="Animal 1">
                    <img src="./images/animals_2.jpg" alt="Animal 2">
                    <img src="./images/animals_3.jpg" alt="Animal 3">
                    <img src="./images/animals_4.jpg" alt="Animal 4">
                </div>
            </div>
        </div>
    </section>
    <?php
include "./footer/footer.php"
?>
</body>

</html>
