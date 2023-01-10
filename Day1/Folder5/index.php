<?php
$users = ["Boo", "Noo", "Zoo", "Uoo"];
$users[0] = "James";
$users[] = "Kooo";
$users[2002] = "eiveo";
$users[200] = "keo0";
$users[2000] = "poo";
$users[20] = "leo";
$users[] = "Foo";

echo count($users);


echo $users[0];
// echo "<br>";
// echo "<br>";

print_r($users);
?>