<?php
/*================================================================
*   Copyright (C) 2023 程序知路. All rights reserved.
*   
*   Filename      : trigger_errors.php
*   Author        : 程序知路
*   E-Mail        : admin@icxzl.com
*   Create time   : 2023-02-08 12:02
*   Last modified : 2023-02-08 12:02
*   Description   :
================================================================*/

$a = 1;
if (1 === $a) {
    trigger_error('error123', 'E_NOTICE');
}
