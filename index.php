
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> <!-- Character encoding for the HTML document -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/footer.css">
</head>
<body>
<?php include "./navbar/navbar.php"; ?>
     <?php
    // Check if the success message is set and display it
    if(isset($_SESSION['success_message'])){
        echo '<div class="success-msg" id="success-msg">' . $_SESSION['success_message'] . '</div>';
        unset($_SESSION['success_message']); // Unset after displaying the message
    }
    ?>
<!-- Main header section -->
    <header>
        <div class="header-content">
            <h1>Welcome to <br> ZooParc Zoological Park</h1>
            <a href="aboutus.php" class="ctn">Learn More...</a>
        </div>
    </header>
    <div class="title">
        <h2>Make Your Day Memorable at Our Zoo</h2>
        <div class="line"></div>
    </div>

    <!-- Section for featured content about the zoo -->
    <section class="animal">
        <div class="row">
            <div class="col image-col">
                <div class="image-gallery">
                    <img src="./images/homebird.png" alt="birds">
                </div>
            </div>
            <div class="col content-col">
                <p>At our facility, we offer a unique photo opportunity with the vibrant macaw, 
                a stunningly colorful bird native to the tropics. This experience allows 
                you to capture memorable moments with these majestic creatures in 
                a naturalistic setting. Whether you’re an avid bird enthusiast or 
                simply looking for a distinctive photo, this special chance to photograph a 
                macaw provides an unforgettable addition to your collection of travel memories.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col content-col">
                <p>When you visit our zoo, you can see the giant panda here. 
                This is the most special attraction in our zoo. 
                Many visitors come from far and wide just to see it.
                The giant panda (Ailuropoda melanoleuca) is a 
                unique and iconic bear species native to the mountain 
                forests of China. Distinguished by its black-and-white 
                fur and striking facial markings, the giant panda is primarily herbivorous, 
                relying almost exclusively on bamboo for its diet.</p>
            </div>
            <div class="col image-col">
                <div class="image-gallery">
                    <img src="./images/homepanda.png" alt="panda">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col image-col">
                <div class="image-gallery">
                    <img src="./images/homejewelry.png" alt="jewelry">
                </div>
            </div>
            <div class="col content-col">
                <p>At Zooparc Zoological Park, visitors can create personalized jewelry
                     featuring their favorite animals. Whether you love lions, elephants, 
                     butterflies, or another creature, our artisans will help you design a 
                     unique piece that captures its essence. This activity lets you take home 
                     a meaningful memento, making your visit even more special. Imagine a pendant 
                     shaped like a tiger or a bracelet with bird charms, each piece reflecting your 
                     love for wildlife. Visit our jewelry workshop at Zooparc to craft a timeless 
                     keepsake to cherish forever.</p>
                    </div>
                </div>
            </section>
            <?php include "./footer/footer.php"; ?>
    <!-- JavaScript for hiding the success message after 4 seconds -->
    <script>
                document.addEventListener("DOMContentLoaded", function() {
                var successMsg = document.getElementById('success-msg');
                if (successMsg) {
                    setTimeout(function() {
                        successMsg.style.display = 'none';
                    }, 4000);
                }
            });
 </script>
 </body>
</html>
