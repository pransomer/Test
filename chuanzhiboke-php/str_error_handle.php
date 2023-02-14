<?php
/*================================================================
 *   Copyright (C) 2023 程序知路. All rights reserved.
 *
 *   Filename      : set_error_handle.php
 *   Author        : 程序知路
 *   E-Mail        : admin@icxzl.com
 *   Create time   : 2023-02-08 12:05
 *   Last modified : 2023-02-08 12:05
 *   Description   :
 ================================================================*/


function my_error($err_no, $errstr, $errfile, $errorline) {
    if (error_reporting() & E_ALL) {
        return false;
    }

    switch($err_no) {
        case E_ERROR:
        case E_USER_ERROR:
            break;
    }
}

set_error_handler('my_error');
