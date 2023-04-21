<!-- This page allows users to fill out and submit orders form   -->
<?php
// when user click submit
if (isset($_POST['submit'])) {
    // connect to the database
    include '../config.php';

    // retrieve the values from the input fields to variable
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $product = $_POST['product'];
    $date = $_POST['date'];

    // select name from the database 
    $sql = "SELECT * FROM `orders` WHERE name = ? ";
    $sth = $dbh->prepare($sql);
    $sth->execute(array($name));
    $result = $sth->fetchAll();

    // check if there's any number of name in the database 
    if (count($result) > 0) {
        // loops through the array and assign new variable called row
        foreach ($result as $row) {
            // check if the user's input is already in the database
            if ($name == $row['name']) {
                // if yes, display message
                $error[] = 'You have already ordered';
            }
        }
    } else {
        // insert user input to the database
        $command = "INSERT INTO `orders`( name, email, phone, address, product, date) VALUES (?,?,?,?,?,?)";
        $stmt = $dbh->prepare($command);
        $result = $stmt->execute(array($name, $email, $phone, $address, $product, $date));
        if ($result) {
            // if inserted successfully, display confirmation message
            $error[] = 'Ordered Successfully';
        } else {
            $error[] = 'Must type the correct value';
        }
    }
}
?>

<?php
// create the same header for every page
include('../includes/header.php');
?>
<!DOCTYPE html>
<html lange="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width = device-width, initial-scale=1.0" />
    <title>Maiko Bakery</title>
    <script src="https://kit.fontawesome.com/cc63fd1b91.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/Bakery/css/welcome-style.css" />
</head>
<section class="place" id="place">
    <h1 class="heading"> Place your order</h1>
    <form action="orders.php" method="post" class="book-form" autocomplete="off">
        <?php
        //Display error message
        if (isset($error)) {
            foreach ($error as $error) {
                echo '<span class="order-msg">' . $error . '</span>';
            }
        }
        ?>
        <!-- form section  -->
        <div class="flex">
            <div class="input">
                <span> Name: </span>
                <input type="text" placeholder="Enter your name " required name="name">
            </div>

            <div class="input">
                <span> Email: </span>
                <input type="email" placeholder="Enter your email " required name="email">
            </div>
            <div class="input">
                <span> Phone: </span>
                <input type="tel" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" maxlength="12" placeholder="Enter phone-number (3xx3xx4xxx)" required name="phone">
            </div>
            <div class="input">
                <span> Address: </span>
                <input type="text" placeholder="Enter your deliver address " required name="address">
            </div>
            <div class="input">
                <span> Product name: </span>
                <select name="product" id="product">
                    <option value="chocolate">Chocolate Cupcake</option>
                    <option value="lemon">Lemon Pie</option>
                    <option value="orange">Orange Cream Bun</option>
                    <option value="apple">Apple Pie</option>
                </select>
            </div>
            <div class="input">
                <span> Deliver date: </span>
                <input type="date" required name="date">
            </div>
        </div>
        <input type="submit" class="other1-btn" value="Place Order" name="submit" />
    </form>
</section>

<?php
// create the same footer for every page
include('../includes/footer.html');
?>

</html>