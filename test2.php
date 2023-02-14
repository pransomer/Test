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

global $g_val;
$g_val = 200;
function global_var_test() {
    global $g_val;
    var_dump($g_val);
}
global_var_test();
