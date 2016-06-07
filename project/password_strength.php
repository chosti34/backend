<?php
    require_once 'include/common.inc.php';

    $pass = getFromGet('str');
    if (empty($pass))
    {
        echo 'Enter the password';
    }
    elseif (!ctype_alnum($pass))
    {
        echo 'Invalid password';
    }
    else
    {
        echo passwordStrength($pass);
    }