<?php 
    // this page is the main page, welcome user once they click log in
    // create the same header for every page and connect tho the database
    include('../includes/header.php');
    include '../config.php';
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

<body>
    <!-- header section -->
  <section class="home" id="home">
    <div class="content">
      <h3>Fresh Bakery Products</h3>
      <p>
        Lorem ipsum, dolor sit amet consectetur adispciting elit. Placeat
        labore, fa-shopping-cartcupiditate distincitve tmpoca recieverpnets
      </p>
      <div class="button">
        <a href="#" class="other-btn">Buy Now</a>
      </div>
    </div>
  </section>

  <!-- about us section -->
  <section class="about" id="about">
    <h1 class="heading">About Us</h1>
    <div class="row">
      <div class="image">
        <img src="/Bakery/images/chocolate.jpeg" alt="" />
      </div>
      <div class="content">
        <h3>What makes our pastry so special ?</h3>
        <p>
          At vero eos et accusamus et iusto odio dignissimos ducimus qui
          blanditiis praesentium voluptatum deleniti atque corrupti quos
          dolores et quas molestias excepturi sint occaecati cupiditate non
          provident, similique sunt in culpa qui officia deserunt mollitia
          animi, id est laborum et dolorum fuga.
        </p>

        <p>
          Et harum quidem rerum facilis est et expedita distinctio. Nam libero
          tempore, cum nobis est eligendi optio cumque nihil impedit quo minus
          id quod maxime placeat facere possimus, omnis voluptas assumenda
          est, omnis dolor repellendus.
        </p>
        <a href="#" class="other-btn">About us</a>
      </div>
    </div>
    </div>
  </section>
<?php
// create the same footer for every page
  include('../includes/footer.html');
?>
</body>
</html>