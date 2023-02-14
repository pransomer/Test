<?php
/*================================================================
*   Copyright (C) 2023 程序知路. All rights reserved.
*   
*   Filename      : arr_statck.php
*   Author        : 程序知路
*   E-Mail        : admin@icxzl.com
*   Create time   : 2023-02-11 19:27
*   Last modified : 2023-02-11 19:27
*   Description   :
================================================================*/

$arr = array();

// 栈：
// array_shift()/arrya_unshift()
// array_push()/array_pop()
array_push($arr, 3);
array_push($arr, 2);
array_push($arr, 1);
print_r($arr);

echo array_pop($arr), array_pop($arr),array_pop($arr);

// 队列：先排队先出来-FIFO
// 后进前出
// array_push()/array_shift()
// 前进后出
// array_unshift()/array_pop()

array_unshift($arr, 3);
array_unshift($arr, 2);
array_unshift($arr, 1);
print_r($arr);
echo array_pop($arr), array_pop($arr),array_pop($arr);

$arr = array(1, 2, 4, 6, 5);
print_r(array_reverse($arr));

print_r(array_keys($arr));
print_r(array_values($arr));
