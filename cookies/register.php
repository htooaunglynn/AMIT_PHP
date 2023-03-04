<?php
    if (isset($_POST['submit'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        //setcookie(key, $value, $time, $path, $domain, $secure);
        setcookie("email", $email, time() + 60 * 60, "/", "",false);
        setcookie("password", $password, time() + 60 * 60, "/", "", false);
        header("location: ./login.php");

        //milisecond
        // echo time();

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <h1>Register</h1>
<form action="register.php" method="post">
        <input type="email" name="email" placeholder="email">
        <br>
        <br>
        <input type="password" name="password" placeholder="********">
        <br>
        <br>
        <input type="submit" value="register" name="submit">
    </form>
</body>
</html>
