<?php
session_start();
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $s_email = $_SESSION['email'];
    $s_password = $_SESSION['password'];
    if ($email === $s_email && $password === $s_password) {
        header('location:home.php');
    } else {
        header('location:login.php');
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Login here</h1>
    <form action="login.php" method="post">
        <input type="email" name="email" placeholder="email address" id=""> <br>
        <input type="password" name="password" placeholder="*******" id=""> <br>
        <input type="submit" value="login" name="submit">
        <br>
        <a href="register.php">Register</a>
    </form>
</body>

</html>