<?php
/*================================================================
*   Copyright (C) 2023 程序知路. All rights reserved.
*   
*   Filename      : php-closure.php
*   Author        : 程序知路
*   E-Mail        : admin@icxzl.com
*   Create time   : 2023-02-08 18:52
*   Last modified : 2023-02-08 18:52
*   Description   :
================================================================*/

function outer_func() {
    $name = 'Navin';
    $inner_func = function() use($name) {
        $name .= '--ok--' . PHP_EOL;
        return $name;
    };

    return $inner_func;
}

$name = outer_func();
// var_dump($name);
print_r($name);
