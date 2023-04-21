<!-- This page lets user register an account to enter to the main page if they don't have an account yet -->

<?php
// connect to the database
include 'config.php';
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    // encrypted password using the hash algorithm
    $hash = password_hash($password, PASSWORD_DEFAULT);
    $cpassword = $_POST['cpassword'];
    $sql = "SELECT * FROM `user_form` WHERE name = ? ";
    $sth = $dbh->prepare($sql);
    $sth->execute(array($name));
    $result = $sth->fetchAll();

    // check if the password1 is matched with the retype on
    if ($password !== $cpassword) {
        $message[] = 'Password do not match. Retype again';
    } else {
        // check if the user has already existed
        if (count($result) > 0) {
            foreach ($result as $row) {
                if ($name == $row['name']) {
                    $message[] = 'user already exist';
                }
            }
        // if not then insert user input into the database and display message and lead to the log in page. 
        } else {
            $command = "INSERT INTO `user_form`( name, email, password) VALUES (?,?,?)";
            $stmt = $dbh->prepare($command);
            $result = $stmt->execute(array($name, $email, $hash));
            $message[] = 'registered successfull';
            header('location:index.php');
            exit();
        }
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <link rel="stylesheet" href="/Bakery/css/login-style.css">
    <script src="/Bakery/javascript/validate.js"></script>
</head>
<body>
    <!-- display error message -->
    <?php
    if (isset($message)) {
        foreach ($message as $message) {
            echo '<div class="message" onclick="this.remove();">' . $message . '</div>';
        }
    }
    ?>
    <div class="form-container">
        <form action="" method="post">
            <h3>Register</h3>
            <input type="text" name="name" required placeholder="Enter username" class="box">
            <input type="email" name="email" required placeholder="Enter email" class="box">
            <input type="password" name="password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" placeholder="Enter password" class="box">
            <input type="password" name="cpassword" required placeholder="Retype password" class="box">
            <div id="alert">
                <p id="length" class="invalid">&#9679 Password must contain 8 length</p>
                <p id="special" class="invalid">&#9679 Password must contain a special character</p>
                <p id="number" class="invalid">&#9679 Password must contain number</p>
            </div>
            <input type="submit" name="submit" class="btn" value="Register">
            <p>Have an account?<a href="index.php"> Log In </a></p>
        </form>
    </div>
</body>

</html>