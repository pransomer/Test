<?php
require_once("./Person.php");

$person = new Person('Navin Xu', 18, 'GD');

echo $person->getNameAndLocation();

echo "\n";

$person->setNameAndLocation("Manni", 'HN');

echo $person->getNameAndLocation();

$obj_set = array();
$obj_set[0] = new Person("Lo", 12, 'GD');
$obj_set[1] = new Person('Ol', 18, 'BJ');
$obj_set[2] = new Person('Td', 22, 'HN');

$handle = mysqli_connect("127.0.0.1", 'test', 'abc123');

$db = new SQLite3();

for ($i = 0; $i < count($obj_set); $i++) {
    $obj = $obj_set[$i];
}


$conn = mysqli_connect("");
