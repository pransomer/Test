<?php

class Person {
    private $name = "";
    private $age;
    private $location = "";

    public function __construct($name = "", $age = 0, $location = "") {
        if ((!empty($name)) && is_string($name) && is_numeric($age) && $age > 0 && (!empty($location)) && is_string($location)) {
            $this->name = $name;
            $this->age = $age;
            $this->location = $location;
        }
    }


    public function setAge($age = 0) {
        if ((is_numeric($age)) && $age > 0) {
            $this->age = $age;
        }
    }

    public function getAge() {
        return $this->age;
    }

    public function getNameAndLocation() {
        return "Name is : {$this->name}, Location is {$this->location}";
    }

    public function setNameAndLocation($name = "", $location = "") {
        if ((!empty($name)) && is_string($name) && (!empty($location)) && is_string($location)) {
            $this->name = $name;
            $this->location = $location;
        }
    }
}
