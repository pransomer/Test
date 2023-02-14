<?php
/*================================================================
*   Copyright (C) 2023 程序知路. All rights reserved.
*   
*   Filename      : each-list.php
*   Author        : 程序知路
*   E-Mail        : admin@icxzl.com
*   Create time   : 2023-02-11 18:37
*   Last modified : 2023-02-11 18:37
*   Description   :
================================================================*/

$arr = array(123, 4356, 'name' => 'Tom', 567, 'age' => 18);

while (list($key, $value) = each($arr)) {
    echo $key . ' => ' . $value . PHP_EOL;
}
