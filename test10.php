<?php
/*================================================================
 *   Copyright (C) 2023 程序知路. All rights reserved.
 *
 *   Filename      : test10.php
 *   Author        : 程序知路
 *   E-Mail        : admin@icxzl.com
 *   Create time   : 2023-06-08 06:00
 *   Last modified : 2023-06-08 06:00
 *   Description   :
 ================================================================*/

require_once __DIR__ . "/Panda.php";

$panda = new Panda("花赖", 10);
echo $panda->getName();
echo $panda->eat("Apple");
