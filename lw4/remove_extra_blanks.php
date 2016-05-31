<?php
    require_once '/include/common.inc.php';

    $str = getParamFromGet('text');
    if (empty($str))
    {
        echo 'Введите строку';
    }
    else
    {
        echo removeExtraBlanks($str);
    }