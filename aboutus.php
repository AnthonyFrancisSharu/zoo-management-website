<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Define character set and viewport settings for responsive design -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <!-- Link to external CSS for page styling -->
    <link rel="stylesheet" href="css/about.css" type="text/css">
     <!-- Link to external Font Awesome library for using icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" type="text/css">
</head>
<body>
<?php include "./navbar/navbar.php"; ?>
    <div class="about-us">
        <div class="container">
            <div class="row">
                <div class="flex">
                    <h2>About Us</h2>
                    <h2 class="line"></h2>
                    <p>Welcome to ZooParc Zoological Park, home to 2,000 animals across 200 
                    species, including our famous giant pandas. Spanning 70 hectares, our zoo 
                    features habitats for lions, bald eagles, poisonous frogs, Asian elephants, 
                    wild deer, orangutans, sloth bears, and more. We are dedicated to conservation, 
                    education, and providing a sanctuary for our animals. Every visit offers an 
                    adventure and a chance to learn about wildlife conservation. Enjoy educational programs,
                     interactive keeper sessions, and family-friendly amenities. Join us at ZooParc Zoological 
                     Park and be inspired by the beauty and diversity of the animal kingdom. 
                     Together, we can help preserve these magnificent creatures for future generations.</p>
                    <center>
                    <div class="social-link">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                    </center>
                </div>
            </div>

            <!--  Mission and vision Section -->
            <div class="mission-vision">
                <div class="box mission">
                    <img src="./images/mission.png" alt="Mission Image">
                    <h3>Our Mission</h3>
                    <h3 class="line"></h3>
                    <p>"To inspire and educate the public about the importance of wildlife conservation,
 foster a deep connection between people and nature, and protect endangered 
species through innovative breeding programs, habitat preservation, and global 
partnerships. Zooparc is dedicated to providing exemplary animal care, promoting 
biodiversity, and supporting scientific research to ensure a sustainable future 
for all species."</p>
                </div>
                <div class="box vision">
                    <img src="./images/vision.png" alt="Vision Image">
                    <h3>Our Vision</h3>
                    <h3 class="line"></h3>
                    <p>"To be a world leader in wildlife conservation, education, and research, creating 
a harmonious coexistence between humans and wildlife. Zooparc envisions a future 
where every individual understands and actively participates in protecting the 
natural world, ensuring that all species thrive in their natural habitats. 
We aim to cultivate a community that values and acts upon the need for environmental 
stewardship and biodiversity preservation."</p>
                </div>
            </div>

            <!-- Zoo Map Section -->
            <div class="zoo-map">
    <div class="map-image">
        <img src="./images/zoomap.png" alt="Zoo Map">  <!-- Image of the zoo map -->
    </div>
    <div class="map-text">
        <h3>Zoo Map</h3>
        <h2 class="line"></h2>
        <p>Explore our ZooParc Zoological Park with ease using our 
            comprehensive zoo map. The map highlights key exhibits, animal 
            habitats, visitor amenities, and educational facilities. From 
            the majestic lions and playful giant pandas to the serene walking 
            trails and interactive exhibits, our map ensures you make the most
            of your visit. Whether you're here to learn about wildlife conservation,
            attend educational programs, or simply enjoy a family day out, 
            the ZooParc map guides you through our diverse and expansive park,
            making your adventure both enjoyable and informative.</p>
      </div>
   </div>

</div>

</div>
    <?php include "./footer/footer.php"; ?>
</body>
</html>