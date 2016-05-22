<?php
    require_once '/include/common.inc.php';

    $_GET['text'] = fgets(STDIN);
    $str = $_GET['text'];
    if ($str === PHP_EOL)
    {
        echo iconv('utf-8', 'cp866', 'Введите строку');
    }
    else
    {
        fputs(STDOUT, removeExtraBlanks($str));
    }
