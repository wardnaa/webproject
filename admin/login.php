<?php

session_start();
require_once("db_connect.php");
$databases = new databases();

if (isset($_SESSION['is_login'])) {
    header('Location:index.php');
}


if (isset($_COOKIE['username'])) {
    $databases->relogin($_COOKIES['username']);
    header('Location:index.php');
}

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $session = session_id();
    if (isset($_POST['remember'])) {
        $remember = TRUE;
    }else {
        $remember = FALSE;
    }
    $online = $databases->online($session,$username);
    if ($databases->login($username,$password,$remember)){
        header("Location:index.php");
    }
    
    
}
?>
<html>
    <body>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="../css/login.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<meta name="viewport" content="width=device-width,initila-scale-1.0">
    <div class="container">
        <div class="card card-container">
            <img id="profile-img" class="profile-img-card" src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png" />
            <p id="profile-name" class="profile-name-card"></p>
            <form class="form-signin" method="POST"> 
                <!-- <span id="reauth-email" class="reauth-email"></span> -->
                <input type="text" id="username" class="form-control" placeholder="Username" name="username" required autofocus>
                <input type="password" id="password" class="form-control" placeholder="Password" name="password" required>
                <div id="remember" class="checkbox">
                    <label>
                        <input type="checkbox" id="remember" name="remember"> Remember me
                    </label>
                </div>
                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit" name="login" id="login">Sign in</button>
            </form>
            <a href="#" class="forgot-password">
                Forgot the password?
            </a>
        </div>
    </div>
</body>
</html>


