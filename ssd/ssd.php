<?php
    require_once '/include/common.inc.php';
    
    $str = getParamFromGet('id');
    if (empty($str))
    {
        echo 'Введите строку';
    }
    else
    {
        if (checkIdentifier($str))
        {
            echo 'yes';
        }
        else
        {
            echo 'no';
        }
    }
