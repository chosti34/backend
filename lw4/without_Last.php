<?php
    require_once '/include/common.inc.php';
  
    $str = getParamFromGet('message');
    if (empty($str))
    {
        echo 'Введите строку';
    }
    else
    {
        echo withoutlast($str);
    }