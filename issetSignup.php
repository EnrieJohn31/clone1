<?php
    if(isset($_POST['signup'])) {
        $name = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        setCookie('name',$name, time() + (86400 * 30), '/' );
        setCookie('email',$email, time() + (86400 * 30), '/' );
        setCookie('password',$password, time() + (86400 * 30), '/' );
        header('location:login.php');
    }
?>