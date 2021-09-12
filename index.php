<?php
    if(isset($_SESSION['loginState']) == 1) {
        header('location:home.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Index</title>
    </head>
    <body>
        <a href="login.php">Log in</a>
        <a href="signup.php">Sign up</a>
    </body>
</html>