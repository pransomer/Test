<?php
/*================================================================
*   Copyright (C) 2023 程序知路. All rights reserved.
*   
*   Filename      : test6.php
*   Author        : 程序知路
*   E-Mail        : admin@icxzl.com
*   Create time   : 2023-02-07 10:15
*   Last modified : 2023-02-07 10:15
*   Description   :
================================================================*/


$outer = 'outer';
function print_global_var() {
    $inner = 'inner';
    echo $inner . PHP_EOL;
    echo $GLOBALS['outer'] . PHP_EOL;
}
print_global_var();

// var_dump($GLOBALS);
// var_dump($GLOBALS);
