<?php
$name = "Azono";
$age = 33;
define("gender", "Male");
$hello = 'My name is ' . $name . ' and age is ' . $age . ' Gender is ' . gender;
echo $hello;
// Template string (double quote)
$hi = "My name is $name and age is $age Gender is " . gender;
echo "<br>" . $hi;
?>