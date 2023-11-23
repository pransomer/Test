<?php
/*================================================================
 *   Copyright (C) 2023 程序知路. All rights reserved.
 *
 *   Filename      : test3.php
 *   Author        : 程序知路
 *   E-Mail        : admin@icxzl.com
 *   Create time   : 2023-05-09 00:51
 *   Last modified : 2023-05-09 00:51
 *   Description   :
 ================================================================*/
$x = 75;
$y = 25;

function addition()
{
    $GLOBALS["z"] = $GLOBALS["x"] + $GLOBALS["y"];
}

addition();

$conn = new SQLite3("./data.db");
$conn->query()->fetchArray();
