<?php

use Mpdf\Tag\BarCode;
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 
    <link rel="stylesheet" type="text/css" href="<?= BASEURL?>/css/login.css">
 
    <title>Login</title>
</head>
<body>
 
    <div class="container">
        <form action="<?= BASEURL?>/login/masuk" method="post" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
            <div class="input-group">
                <input type="text" placeholder="Username" name="username" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Password" name="password" required>
            </div>
            <div class="input-group">
                <button name="login" class="btn">Login</button>
            </div>
            <!-- <p class="login-register-text">Belum punya akun? <a href="<?= BASEURL?>/login/registrasi">Register</a></p> -->
            <p class="login-register-text">Kembali <a href="<?= BASEURL?>/home">Home</a></p>
        </form>
    </div>
</body>
</html>