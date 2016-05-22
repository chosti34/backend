<?php
    function reverse($str)
    {
        $len = strlen($str);
        $s = '';
        for ($i = $len - 1; $i >= 0; $i--)
        {
            $s = $s . $str[$i];
        }
        return $s;
    }