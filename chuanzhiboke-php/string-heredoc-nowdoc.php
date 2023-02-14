<?php
/*================================================================
*   Copyright (C) 2023 程序知路. All rights reserved.
*   
*   Filename      : string-define.php
*   Author        : 程序知路
*   E-Mail        : admin@icxzl.com
*   Create time   : 2023-02-08 12:22
*   Last modified : 2023-02-08 12:22
*   Description   :
================================================================*/
$str1 =  'ok';

    // heredoc
    $str = <<<EOF
 $str1
    hello
            world.
EOF;

    // nowdoc
    $str2 = <<<'EOF'
 $str1
    hello
        world
EOF;
var_dump($str, $str2);
