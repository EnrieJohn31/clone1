<?php
    session_save_path(dirname('__FILE__')."/session");
    session_start();
    require './issetSignin.php';
    if(isset($_SESSION['loginState']) == 0) {
        header('location:index.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h1>This the dashboard</h1>
    <form action="home.php" method="POST">
        <button type="submit" name="logout">Logout</button>
    </form>
</body>
</html>