<?php
    require_once 'include/common.inc.php';

    $str = getFromGet('str');
    if (empty($str))
    {
        echo 'Enter the string';
    }
    else
    {
        echo last($str);
    }