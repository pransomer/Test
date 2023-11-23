<?php
/*================================================================
 *   Copyright (C) 2023 程序知路. All rights reserved.
 *
 *   Filename      : test10.php
 *   Author        : 程序知路
 *   E-Mail        : admin@icxzl.com
 *   Create time   : 2023-06-08 06:00
 *   Last modified : 2023-06-08 06:00
 *   Description   :
 ================================================================*/

/**
 * Class test10
 * @author yourname
 */
class Panda
{
    private $name = "";
    private $age = 0;
    /**
     * @param mixed $name
     * @param mixed $age
     */
    public function __construct($name = "", $age = 0)
    {
        $this->name = $name;
        $this->age = $age;
    }
    /**
     * @param mixed $name
     * @return mixed
     */
    public function setName($name = "")
    {
        $this->name = $name;
        return $name;
    }
    /**
     * @param mixed $age
     * @return mixed
     */
    public function setAge($age = 0)
    {
        $this->age = $age;
        return $age;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function eat($food = "Banana")
    {
        return $food;
    }
}
