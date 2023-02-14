<?php
/*================================================================
*   Copyright (C) 2023 程序知路. All rights reserved.
*   
*   Filename      : arr_point.php
*   Author        : 程序知路
*   E-Mail        : admin@icxzl.com
*   Create time   : 2023-02-11 18:53
*   Last modified : 2023-02-11 18:53
*   Description   :
================================================================*/

$arr = array(3, 1, 5, 2, 0);

echo current($arr) . PHP_EOL;
echo key($arr) . PHP_EOL;

echo next($arr) . PHP_EOL;
echo next($arr) . PHP_EOL;
echo prev($arr) . PHP_EOL;
echo end($arr) . PHP_EOL;
echo reset($arr) . PHP_EOL;
