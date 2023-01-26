<?php
session_start();
if (isset($_POST['submit'])) {
    // echo "Hello Register";
    $email = $_POST['email'];
    $password = $_POST['password'];
    $_SESSION['email'] = $email;
    $_SESSION['password'] = $password;
    header("location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
</head>

<body>
    <h1>Register Form</h1>
    <form action="register.php" method="post">
        <input type="email" name="email" placeholder="email address" id=""> <br>
        <input type="password" name="password" placeholder="*******" id=""> <br>
        <input type="submit" value="register" name="submit">
    </form>
</body>

</html>