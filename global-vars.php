<?php
/*================================================================
 *   Copyright (C) 2023 程序知路. All rights reserved.
 *
 *   Filename      : global-vars.php
 *   Author        : 程序知路
 *   E-Mail        : admin@icxzl.com
 *   Create time   : 2023-05-28 21:40
 *   Last modified : 2023-05-28 21:40
 *   Description   :
 ================================================================*/
global $g_val;
$g_val = 123;

function testGlobalVars()
{
    global $g_val;
    echo $g_val;
}
testGlobalVars();
