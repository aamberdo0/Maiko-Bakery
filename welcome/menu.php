<?php
// This page lets user to view and select several options for the bakery's menu.
//When ordered, they will be led to orders page to fill out the form.
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
    <script src="/Bakery/javascript/script.js"></script>
</head>
<body>
<!-- Display menu icon  -->
<section class="menu" id="menu">
    <h1 class="heading">Our Menu</h1>
    <section class="box-container">
        <div class="box">
            <a href="#croissant"><img src="/Bakery/images/croissant.png" alt="" /></a>
            <h3>Croissant</h3>
        </div>
        <div class="box">
            <a href="#donut"><img src="/Bakery/images/doughnut.png" alt="" /></a>
            <h3>Donut</h3>
        </div>
        <div class="box">
            <a href="#cake"><img src="/Bakery/images/cake.png" alt="" /></a>
            <h3>Cake</h3>
        </div>
        <div class="box">
            <a href="#pie"><img src="/Bakery/images/pie.png" alt="" /></a>
            <h3>Pie</h3>
        </div>
        <div class="box">
            <a href="#macaron"><img src="/Bakery/images/macaron.png" alt="" /></a>
            <h3>Macaron</h3>
        </div>
        <div class="box">
            <a href="#cupcake"><img src="/Bakery/images/cupcake.png" alt="" /></a>
            <h3>Cupcake</h3>
        </div>
    </section>
</section>

<!-- Display order sections  -->
<section class="orders" id="orders">
    <h1 class="heading"> Order Now</h1>
    <div class="box-container">
        <div class="box">
            <div class="image" id="croissant">
                <img src="/Bakery/images/croissant.jpeg" alt="">
            </div>
            <div class="content">
                <h3>Mushroom Croissant</h3>
                <p> At vero eos et accusamus et iusto odio dignissimos ducimus qui
                    blanditiis praesentium voluptatum deleniti atque corrupti quos</p>
                <a href="orders.php" class="other1-btn">Order Now</a>
            </div>
        </div>
        <div class="box">
            <div class="image" id="donut">
                <img src="/Bakery/images/chocolateD.jpeg" alt="">
            </div>
            <div class="content">
                <h3>Chocolate Donut</h3>
                <p> At vero eos et accusamus et iusto odio dignissimos ducimus qui
                    blanditiis praesentium voluptatum deleniti atque corrupti quos</p>
                <a href="orders.php" class="other1-btn">Order Now</a>
            </div>
        </div>
        <div class="box">
            <div class="image" id="cake">
                <img src="/Bakery/images/chocolateCake.jpeg" alt="">
            </div>
            <div class="content">
                <h3>Chocolate Cake</h3>
                <p> At vero eos et accusamus et iusto odio dignissimos ducimus qui
                    blanditiis praesentium voluptatum deleniti atque corrupti quos</p>
                <a href="orders.php" class="other1-btn">Order Now</a>
            </div>
        </div>
        <div class="box">
            <div class="image" id="pie">
                <img src="/Bakery/images/AppleP.jpeg" alt="">
            </div>
            <div class="content">
                <h3>Apple Pie</h3>
                <p> At vero eos et accusamus et iusto odio dignissimos ducimus qui
                    blanditiis praesentium voluptatum deleniti atque corrupti quos</p>
                <a href="orders.php" class="other1-btn">Order Now</a>
            </div>
        </div>
        <div class="box">
            <div class="image" id="macaron">
                <img src="/Bakery/images/macaron.jpeg" alt="">
            </div>
            <div class="content">
                <h3>Italian Macaron</h3>
                <p> At vero eos et accusamus et iusto odio dignissimos ducimus qui
                    blanditiis praesentium voluptatum deleniti atque corrupti quos</p>
                <a href="orders.php" class="other1-btn">Order Now</a>
            </div>
        </div>
        <div class="box">
            <div class="image" id="cupcake">
                <img src="/Bakery/images/VanillaC.jpeg" alt="">
            </div>
            <div class="content">
                <h3>Vanilla Cupcake</h3>
                <p> At vero eos et accusamus et iusto odio dignissimos ducimus qui
                    blanditiis praesentium voluptatum deleniti atque corrupti quos</p>
                <a href="orders.php" class="other1-btn">Order Now</a>
            </div>
        </div>
    </div>
</section>
</body>
<?php
    // create the same footer for every page
    include('../includes/footer.html');
?>
</html>