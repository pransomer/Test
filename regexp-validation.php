<?php
/*================================================================
 *   Copyright (C) 2023 程序知路. All rights reserved.
 *
 *   Filename      : regexp-validation.php
 *   Author        : 程序知路
 *   E-Mail        : admin@icxzl.com
 *   Create time   : 2023-05-20 20:40
 *   Last modified : 2023-05-20 20:40
 *   Description   :
 ================================================================*/

var_dump(
    preg_match(
        "#^/.+/(\.git(?!ignore).*|.+\.swp|.+\.swx|.+\.txt)$#",
        "/root/.git"
    )
);
var_dump(
    preg_match(
        "#^/.+/(\.git(?!ignore).*|.+\.swp|.+\.swx|.+\.txt)$#",
        "/root/.git/HEAD"
    )
);
var_dump(
    preg_match(
        "#^/.+/(\.git(?!ignore).*|.+\.swp|.+\.swx|.+\.txt)$#",
        "/root/.gitignore"
    )
);
var_dump(
    preg_match(
        "#^/.+/(\.git(?!ignore).*|.+\.swp|.+\.swx|.+\.txt)$#",
        "/root/test.txt"
    )
);
var_dump(
    preg_match(
        "#^/.+/(\.git(?!ignore).*|.+\.swp|.+\.swx|.+\.txt)$#",
        "/root/abc/test.txt"
    )
);
var_dump(
    preg_match(
        "#^/.+/(\.git(?!ignore).*|.+\.swp|.+\.swx|.+\.txt)$#",
        "/root/abc/.test.swp"
    )
);
