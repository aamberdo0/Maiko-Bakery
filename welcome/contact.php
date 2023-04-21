<?php
//This page lets user to send a contact form to the store. Once sent 
//successfully, it will lead user to a page displaying successfull message
// connect to the database
include '../config.php';

// when user click submit
if (isset($_POST['submit'])) {
    // retrieve the values from the input fields to variable
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    // insert data into the database
    $command = "INSERT INTO `contact`(name, email, phone) VALUES (?,?,?)";
    $stmt = $dbh->prepare($command);
    $result = $stmt->execute(array($name, $email, $phone));
    // if inserted successfully, lead user to another page displaying message 
    // and exit the current page. 
    if ($result) {
        header('location:/Bakery/welcome/contact_successful.php');
        exit();
        // If not, alert message will pop up     
    } else {
        echo '<script>alert("Unable to insert to the database")</script>';
    }
}
?>

<!DOCTYPE html>
<html lange="en">
<?php
// create the same header for every page
include('../includes/header.php');
?>

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width = device-width, initial-scale=1.0" />
    <title>Maiko Bakery</title>
    <script src="https://kit.fontawesome.com/cc63fd1b91.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/Bakery/css/welcome-style.css" />
</head>

<section class="contact" id="contact">
    <h1 class="heading">Contact Us</h1>
    <div class="row">
        <!-- Display the location from Google Map -->
        <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d185629.78315089428!2d-79.97220692677969!3d43.36729273169429!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882b5d28315b07cd%3A0xffcd239cf878470e
        !2sSheridan%20College%20Trafalgar%20Road%20Campus!5e0!3m2!1sen!2sca!
        4v1680351103265!5m2!1sen!2sca" width="600" height="450" style="border: 0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-
        downgrade"></iframe>
        <!-- Contact form starts here -->
        <form action="contact.php" method="post">
            <h3 class="heading">Get In Touch</h1>
                <div class="inputBox">
                    <span class="fas fa-user"></span>
                    <input type="text" placeholder="Enter your name" name="name" />
                </div>
                <div class="inputBox">
                    <span class="fas fa-envelope"></span>
                    <input type="email" placeholder="Enter your email" name="email" />
                </div>
                <div class="inputBox">
                    <span class="fas fa-phone"></span>
                    <input type="tel" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" maxlength="12" placeholder="Enter phone-number (3xx3xx4xxx)" required name="phone" />
                </div>
                <input type="submit" class="other-btn" value="Contact Now" name="submit" />
        </form>
    </div>
</section>
<?php
// create the same footer for every page
include('../includes/footer.html');
?>

</html>