<?php
    require_once 'include/common.inc.php';

    $str = getFromGet('str');
    if (empty($str))
    {
        echo 'Enter the string';
    }
    else
    {
        if (checkIdentifier($str))
        {
            echo 'yes';
        }
        elseif (is_numeric($str[0]))
        {
            echo 'no, first character is number';
        }
        else
        {
            echo 'no, invalid character found';
        }
    }