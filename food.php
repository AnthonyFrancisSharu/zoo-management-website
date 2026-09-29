<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food</title>
    <link rel="stylesheet" href="css/food.css"> <!-- Link to the external CSS file for styling the food menu page -->
</head>
<body>
<?php include "./navbar/navbar.php"; ?>

<section class="food">
    <!-- Main Menu Section -->
    <div class="title">
        <h1>Main Menu</h1> <!-- Title for the main menu section -->
        <div class="line"></div> <!-- Decorative line under the title -->
    </div>
    <div class="row">
        <!-- Individual menu items -->
        <div class="col">
            <img src="./images/buriyani.png" alt="" class="biriyani"> <!-- Image for Biriyani -->
            <h4>Biriyani</h4> <!-- Name of the dish -->
            <p>RS.1500</p> <!-- Price of the dish -->
        </div>
        <div class="col">
            <img src="./images/noodles.png" alt="Animal 2" class="noodles">
            <h4>Chicken Pasta</h4>
            <p>RS.2000</p>
        </div>
        <div class="col">
            <img src="./images/nasikurang.png" alt="Animal 3" class="nasigoreng">
            <h4>Nasi Goreng</h4>
            <p>RS.1600</p>
        </div>
        <div class="col">
            <img src="./images/cheesepasta.png" alt="Animal 4" class="cheesepasta">
            <h4>Cheese Pasta</h4>
            <p>RS.2800</p>
        </div>
        <div class="col">
            <img src="./images/paratta.png" alt="Animal 5" class="paratta">
            <h4>Paratta with Chicken</h4>
            <p>RS1750</p>
        </div>
        <div class="col">
            <img src="./images/pizza.png" alt="Animal 6" class="pizza">
            <h4>Pizza</h4>
            <p>RS.3700</p>
        </div>
        <div class="col">
            <img src="./images/submarine.png" alt="Animal 7" class="submarine">
            <h4>Submarine</h4>
            <p>RS.1300</p>
        </div>
        <div class="col">
            <img src="./images/sandwitch.png" alt="Animal 8" class="sandwitch">
            <h4>Sandwitch</h4>
            <p>RS.450</p>
        </div>
    </div> <!-- Close row for main menu -->

    <div class="title">
        <h1>Desert</h1>
        <div class="line"></div>
    </div>
    <div class="row">
        <div class="col">
            <img src="./images/stawberry.png" alt="Animal 9" class="cheesecake">
            <h4>Stawberry Cheese Cake</h4>
            <p>RS.1500</p>
        </div>
        <div class="col">
            <img src="./images/bluecake.png" alt="Animal 10" class="blueberrycake">
            <h4>Blueberry Cake</h4>
            <p>RS.1400</p>
        </div>
        <div class="col">
            <img src="./images/cupcake.png" alt="Animal 11" class="cupcake">
            <h4>Cupcake</h4>
            <p>RS.700</p>
        </div>
        <div class="col">
            <img src="./images/pancake.png" alt="Animal 12" class="pancake">
            <h4>Pancake</h4>
            <p>RS.550</p>
        </div>
        <div class="col">
            <img src="./images/chocoroll.png" alt="Animal 12" class="chocoroll">
            <h4>Choco Roll</h4>
            <p>RS.750</p>
        </div>
        <div class="col">
            <img src="./images/berrycake.png" alt="Animal 12" class="berrypancake">
            <h4>Berry Pancake</h4>
            <p>RS.570</p>
        </div>
        <div class="col">
            <img src="./images/icecreamcake.png" alt="Animal 12" class="icecreamcake">
            <h4>Icecream Cake</h4>
            <p>RS.800</p>
        </div>
        <div class="col">
            <img src="./images/vanilaicecream.png" alt="Animal 12" class="vanilaicecream">
            <h4>Vanila Icecream</h4>
            <p>RS.350</p>
        </div>
    </div> <!-- Close row for dessert -->

    <div class="title">
        <h1>Beverage</h1>
        <div class="line"></div>
    </div>
    <div class="row">
        <div class="col">
            <img src="./images/pineapple.png" alt="Animal 12" class="pineapple">
            <h4>Pineapple Juice</h4>
            <p>RS.400</p>
        </div>
        <div class="col">
            <img src="./images/lemonjuice.png" alt="Animal 12" class="lemon">
            <h4>Lemon Juice</h4>
            <p>RS.350</p>
        </div>
        <div class="col">
            <img src="./images/cocacola.png" alt="Animal 12" class="cocacola">
            <h4>Cocacola</h4>
            <p>RS.250</p>
        </div>
        <div class="col">
            <img src="./images/creamsoda.png" alt="Animal 12" class="creamsoda">
            <h4>Creamsoda</h4>
            <p>RS.250</p>
        </div>
        <div class="col">
            <img src="./images/stawberrymilk.png" alt="Animal 12" class="stawberrymilk">
            <h4>Stawberry Milkshake</h4>
            <p>RS.700</p>
        </div>
        <div class="col">
            <img src="./images/berrymilk.png" alt="Animal 12" class="blueberrymilk">
            <h4>Blueberry Milkshake</h4>
            <p>RS.750</p>
        </div>
        <div class="col">
            <img src="./images/chocomilk.png" alt="Animal 12" class="chocomilk">
            <h4>Chocolate Milkshake</h4>
            <p>RS.680</p>
        </div>
        <div class="col">
            <img src="./images/falooda.png" alt="Animal 12" class="falooda">
            <h4>Falooda</h4>
            <p>RS.550</p>
        </div>
    </div> <!-- Close row for beverage -->
</section>

<?php include "./footer/footer.php"; ?>
</body>
</html>