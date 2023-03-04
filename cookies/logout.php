<?php
    setcookie("email", "", time() - 3600, "/", "", false);
    header("location: ./index.php");
?>

