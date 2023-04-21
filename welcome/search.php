<!-- This page allows users to search for the available products then display a table with all the avaiable products   -->
<?php
// create the same header for every pgae 
include('../includes/header.php'); ?>

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
  <section class="menu" id="menu">
    <h1 class="heading">Search</h1>
    <div class="search-box">
      <div class="column">
        <form action="search.php" method="post">
          <input type="text" name="search" id="input-box" placeholder="Enter the data..." />
          <button class="search" name="submit">Search</button>
        </form>
      </div>
    </div>
    <?php
    // connect to the database
    include '../config.php';
    if (isset($_POST['submit'])) {
      // create variable from user input and eroor message
      $searchStatus = "";
      $searchLink = "";
      $st = $_POST["search"];
      // select where the user input is matched with data from database
      $command = "SELECT * FROM `search_data` WHERE import='$st' OR name='$st' OR ingredients='$st'";
      $stmt = $dbh->prepare($command);
      $stmt->execute();
      $rows = $stmt->fetchAll();
      // check if the number of row is equal to 0
      if (count($rows) != 0) {
        // if yes, create a table
        echo '<table>
              <tr>
              <th>ID</th>
              <th>Item Name</th>
              <th> Ingredients </th>
              <th> Imported From </th>
              <th> Expiration Date </th>
              </tr>';
        // loops through the array and assign new variable called row
        foreach ($rows as $row) {
          // create column and row for each search is found
          echo '<tr>
                  <td>' . $row['id'] . '</td>
                  <td>' . $row['name'] . '</td>
                  <td>' . $row['ingredients'] . '</td>
                  <td>' . $row['import'] . '</td>
                  <td>' . $row['expiration'] . '</td>
                </tr>';
        }
        echo  '</table>';
      } else {
        // if not found, display the error message
        $searchStatus = "Data not found.";
        $searchLink = "Please click <a href='search.php'>here</a> to redo the search";
      }
    }
    ?>
  </section>
</body>
<section class="menu" id="menu">
  <p class="heading"><?php echo $searchStatus; ?></p>
  <p class="heading"><?php echo $searchLink; ?></p>
</section>
<?php
// create the same footer for every page
include('../includes/footer.html');
?>

</html>