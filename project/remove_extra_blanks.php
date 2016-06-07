<?php
    require_once 'include/common.inc.php';
    header('Content-Type: text/content');

    $str = getFromGet('str');
    if (empty($str))
    {
        echo 'Enter the string';
    }
    else
    {
        echo removeExtraBlanks($str);
    }

