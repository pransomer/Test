<?php
require_once "./Person.php";

$person = new Person("Navin Xu", 18, "GD");

echo $person->getNameAndLocation();

echo "\n";

$person->setNameAndLocation("Manni", "HN");

echo $person->getNameAndLocation();

$obj_set = [];
$obj_set[0] = new Person("Lo", 12, "GD");
$obj_set[1] = new Person("Ol", 18, "BJ");
$obj_set[2] = new Person("Td", 22, "HN");

for ($i = 0; $i < count($obj_set); $i++) {
    $obj = $obj_set[$i];
    $obj->setNameAndLocation("SH", "BeiJing");
}

for ($i = 0; $i < count($obj_set); $i++) {
    echo $obj_set[$i]->getAge();
}
