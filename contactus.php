<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta tags for character encoding and responsive design -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <!-- Link to external CSS for styling the Contact Us page -->
    <link rel="stylesheet" href="css/contactus.css">
</head>
<body>
<?php include "./navbar/navbar.php"; ?>
    <div class="contact-container"> <!-- Main container for the contact form and accompanying image -->
        <form action="https://api.web3forms.com/submit" method="POST" class="contact-left" autocomplete="off">
            <!-- Title and separator for the contact form -->
            <div class="contact-left-title">
                <h2>Get in Touch With Zoo Committee</h2>
                <hr>
            </div>
            <input type="hidden" name="access_key" value="394fe2cc-b83b-415c-ab7a-85ce01f67ddb">
            <input type="text" name="name" placeholder="Ex: Enter Your name" class="contact-inputs" required>
            <input type="email" name="email" placeholder="Ex: Enter Your Email" class="contact-inputs" required>
            <textarea name="message" placeholder="Ex: Your Message" class="contact-inputs" required></textarea>
            <button type="submit">Submit <img src="./images/arrow_icon.png" alt=""></button>
        </form>
        <div class="contact-right"> <!-- Image displayed on the right side of the contact form -->
            <img src="./images/contactus.png" alt="contactus-image" class="contactus-image">
        </div>
    </div>
<?php include "./footer/footer.php" ?>
</body>
</html>
