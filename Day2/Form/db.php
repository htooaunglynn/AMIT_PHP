<?php
    if (isset($_GET['login'])) {
    $name = $_GET['name'];
    $email = $_GET['email'];
    $age = $_GET['age'];
    $msg = $_GET['message'];
    $password = $_GET['password'];
    $password = sha1(md5($_GET['password']));
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DB</title>
    <link rel="shortcut icon" href="https://images.unsplash.com/photo-1672681373273-64cc9c122df3?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" type="image/x-icon">

    <style>

        a {
            text-decoration: none;
            color: black;
            font-size: 1.4rem;
            border: 1px solid black;
            border-radius: 10px;
            padding: 10px 20px;
            position: absolute;
            bottom: 50px;
            right: 100px;
        }

        div {
            display: inline-block;
            /* border: 1px solid black; */

            position: absolute;

        }
    </style>
</head>
<body>
    <a href="./index.php">Go to Back</a>

    <div>
        <h1>My Profile</h1>
        <h4> <span>Name:</span> <?php echo $name ?></h4>
        <h4> <span>Email:</span> <?php echo $email ?></h4>
        <h4> <span>Password:</span> <?php echo $password ?></h4>
        <h4> <span>Age:</span> <?php echo $age ?></h4>
        <h4> <span>Message:</span> <?php echo $msg ?></h4>
    </div>
</body>
</html>