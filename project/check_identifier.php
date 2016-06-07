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
        elseif (is_numeric($str[$i]))
        {
            echo 'no, first is number';
        }
        else
        {
            echo 'no, invalid character found';
        }
    }