<?php
session_start();
$auth = isset($_SESSION['email']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <?php if ($auth) : ?>
    <h1>welcome member</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere inventore incidunt voluptatum vero voluptas
        similique eos, dolor magni aliquam officia esse. Eius sequi consequuntur molestias repellendus dolor suscipit
        nulla voluptate.</p>
    <a href="logout.php">logout</a>
    <?php else : ?>
    <h3>You need to Login</h3>
    <a href="login.php">Login</a>
    <?php endif ?>

</body>

</html>