<?php
    require './issetSignup.php';
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
    <title>Sign up</title>
</head>
<body>
    <form action="signup.php" method="POST">
        <input type="text" required placeholder="Username" autocomplete="off" name="username">
        <input type="email" required placeholder="Email" autocomplete="off" name="email">
        <input type="password" required placeholder="Password" autocomplete="off" name="password">
        <button type="submit" name="signup">Sign up</button>
    </form>
</body>
</html>