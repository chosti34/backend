<?php
    function last($str)
    {
        $len = strlen($str);
        if ($len != 0)
        {
            return $str[$len - 1];
        }
        else
        {
            echo 'Введите строку';
        }
    }