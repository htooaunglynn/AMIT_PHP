<?php
$people = [
    "name" => "Azono",
    "age" => "33",
    "gender" => "male"
];

echo $people['name']. "\n";
echo $people['age'] . "\n";
echo $people['gender'] . "\n";

//associated to object
$u = (object) $people;

echo "\n";

echo $u->name;
echo "\n";
echo $u->age;
echo "\n";
echo $u->gender;
?>