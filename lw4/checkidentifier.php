<?php
    require_once '/include/common.inc.php';
  
    $str = getParamFromGet('id');
    if (empty($str))
    {
        echo 'Введите строку';
    }
    else
    {
        echo checkIdentifier($str);
    }
