<?php
/*================================================================
 *   Copyright (C) 2022 程序知路. All rights reserved.
 *
 *   Filename      : test2.php
 *   Author        : 程序知路
 *   E-Mail        : admin@chengxuzhilu.com
 *   Create time   : 2022-09-02 08:07
 *   Last modified : 2022-09-02 08:07
 *   Description   :
 ================================================================*/

$g_val = 200;
global $g_val;
function global_var_test()
{
    $g_val = 100;
    global $g_val;
    $g_val = 300;
}
global_var_test();
var_dump($g_val);


