<?php
    function withoutlast($str)
    {
        $len = strlen($str);
        if ($len != 1)
        {
            return substr($str, 0, $len - 1);
        }
        else
        {
            return $str;
        }
    }