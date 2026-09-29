<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta tags for character encoding and responsive design -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conservation</title>
    <!-- Linking external CSS files for styling -->
    <link rel="stylesheet" href="css/conservation.css" type="text/css">
    <link rel="stylesheet" href="css/footer.css" type="text/css"> <!-- Added footer CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" type="text/css">
</head>
<body>
    <?php include "./navbar/navbar.php"; ?>

    <!-- Main conservation section -->
    <div class="conservation">
        <div class="container">
            <div class="row"> 
                <div class="main-content">
                     <!-- Section header -->
                    <h2>Conservation</h2>
                    <div class="line"></div>
                    <p>At ZooParc Zoological Park, we are deeply committed to wildlife conservation and 
                    the preservation of endangered species. Our dedicated team works tirelessly to protect 
                    and restore natural habitats, participate in global breeding programs, and support 
                    groundbreaking research aimed at understanding and mitigating the threats faced by wildlife.
                    Through our educational initiatives, we strive to raise awareness and inspire our 
                    visitors to join us in our mission to safeguard the planet's biodiversity. By visiting ZooParc, 
                    you contribute directly to these vital conservation efforts, helping to ensure a sustainable 
                    future for countless species.</p>
                </div>
            </div>

            <!-- Section on how visitors can help with conservation efforts -->
            <div class="help">
                <div class="container">
                    <div class="row">
                        <div class="flex">
                            <h2>How You Can Help</h2>
                            <div class="line"></div>

                            <div class="mission-vision">
                                <div class="box mission">
                                    <img src="./images/donate.png" alt="Species Survival Plans (SSP)">
                                    <h3>Donate</h3>
                                    <p>Support our conservation efforts with a donation. Your contribution helps care 
                                        for animals and fund important projects.</p>
                                </div>

                                <div class="box vision">
                                    <img src="./images/volanteer.png" alt="Habitat Restoration Projects">
                                    <h3>Volunteer</h3>
                                    <p>Give your time to help animals and conservation programs. 
                                        Volunteers are essential to our mission.</p>
                                </div>
                            </div>

                            <div class="mission-vision">
                                <div class="box mission">
                                    <img src="./images/adopt.png" alt="Education and Awareness Programs">
                                    <h3>Adopt an Animal</h3>
                                    <p>Symbolically adopt an animal to support its care and conservation.
                                         Receive a special certificate and updates.</p>
                                </div>

                                <div class="box vision">
                                    <img src="./images/yourself.png" alt="Conservation Breeding Programs">
                                    <h3>Educate Yourself and Others</h3>
                                    <p>Learn about wildlife conservation and spread the word. 
                                        Together, we can make a bigger impact.</p>
                                </div>
                            </div>
                        </div> 
                    </div> 
                </div> 
            </div> 
<section>
     <!-- Section for educational content -->
            <div class="educational">
                <div class="container">
                    <div class="row">
                        <div class="main-content">
                            <h2>Educational Content</h2>
                            <div class="line"></div>
                            <p>The Zooparc Educational Content section is where our community members can access and contribute valuable 
                                information. This platform is designed to enrich our collective knowledge with a variety of resources on 
                                wildlife conservation, animal behavior, and environmental education. Whether you're looking to learn more 
                                about our resident species, best practices in animal care, or the latest in conservation research, this is 
                                the place to explore and share insights. By fostering a collaborative learning environment, we aim to inspire 
                                and educate all members of our community. By clicking the button below, you can access our educational content.</p>
                                <div class="button-container"> <!-- Conditional button to access educational content -->
                                <?php
                                // Check if the user is logged in
                                if(!isset($_SESSION["user_login"])){
                                     // If not logged in, redirect to login page
                                    ?>
                                    <a href="login.php" class="ctn">Click</a>
                                    <?php
                                }
                                else{
                                // If logged in, allow access to educational content
                                    ?>
                                <a href="education.php" class="ctn">Click</a>
                                    <?php
                                }
                                ?>
                                </section>
                                 
                        </div> 
                    </div>
                </div> 
            </div>
        </div> 
    </div> 
    <?php include "./footer/footer.php"; ?>
</body>
</html>
