<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 
    <link rel="stylesheet" type="text/css" href="<?= BASEURL?>/css/login.css">
 
    <title>Register</title>
</head>
<body>
    <div class="container">
        <form action="<?= BASEURL ?>/daftar" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Register</p>
            <div class="input-group">
                <input type="text" placeholder="Username" name="username" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Password" name="password" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Confirm Password" name="cpassword"  required>
            </div>
            <div class="input-group">
                <button name="register" class="btn">Register</button>
            </div>
            <p class="login-register-text">Anda sudah punya akun? <a href="<?= BASEURL?>/login">Login </a></p>
        </form>
    </div>
</body>
</html>