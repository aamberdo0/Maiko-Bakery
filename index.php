<?php
// This page allows users to log into the system 
// resume an existing session 
session_start(); 
// connect to the database
include 'config.php';
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM `user_form` WHERE name = :name ";
    $sth = $dbh->prepare($sql);
    $sth->execute(array(':name' => $name));
    $result = $sth->fetchAll();
    // check if the user has already existed
    if (count($result) > 0) {
        $row = $result[0];
        // verify if the user input for password is matched with the encrypted one in the database
        if (password_verify($password, $row['password'])) {
            // if yes, lead user to main page 
            $_SESSION['user_id']=$row['id'];
            header('location:welcome/welcome.php');
            exit();
        } else {
            $message[] = 'Incorrect Information. Retype again';
        }
    } else {
        $message[] = 'Incorrect Information. Retype again';
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Log In</title>
    <link rel="stylesheet" href="/Bakery/css/login-style.css">
</head>
<body>
    <?php
    // place an error message
    if (isset($message)) {
        foreach ($message as $message) {
            echo '<div class="message">' . $message . '</div>';
        }
    }
    ?>
    <div class="form-container">
        <form action="" method="post">
            <h3>Log In</h3>
            <input type="text" name="name" required placeholder="Enter username" class="box">
            <input type="password" name="password" required placeholder="Enter password" class="box">
            <input type="submit" name="submit" class="btn" value="Log In">
            <p>Not registered yet?<a href="register.php"> Sign Up </a></p>
        </form>
    </div>
</body>
</html>