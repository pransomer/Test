<?php
/*================================================================
*   Copyright (C) 2023 程序知路. All rights reserved.
*   
*   Filename      : arr_sort.php
*   Author        : 程序知路
*   E-Mail        : admin@icxzl.com
*   Create time   : 2023-02-11 18:47
*   Last modified : 2023-02-11 18:47
*   Description   :
================================================================*/

$arr = array(3, 1, 5, 2, 0);

# 对值排序
// print_r(sort($arr));
// sort($arr);
// 对索引保留
// asort($arr);
// print_r($arr);

# 对键排序
// 对索引保留
// krsort($arr);
// print_r($arr);

# 键会重排
shuffle($arr);
print_r($arr);
shuffle($arr);
print_r($arr);
