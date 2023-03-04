<?php
    //submit is input type submit
    if (isset($_POST['submit'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        if (isset($_COOKIE['email'])) {
            if ($email === $_COOKIE['email'] && $password === $_COOKIE['password']) {
                header("location: ./index.php");
            } else {
                echo "Email and password do not match!";
            }
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
        <input type="email" name="email" placeholder="email address" id=""> <br><br>
        <input type="password" name="password" placeholder="*******" id=""> <br>
        <br>
        <input type="submit" value="login" name="submit">
        <br><br>
        <a href="register.php">Register</a>
    </form>
</body>

</html>