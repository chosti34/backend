<?php
    function removeExtraBlanks($str)
    {
        $s = '';
        $len = strlen($str);
        $i = 0;
        if ($str[$i] == ' ')
        {
            while ($str[$i] == ' ')
            {
                $i++;
            }
        }
        for ($i; $i < $len; $i++)
        {
            if ($str[$i] == ' ' && $str[$i + 1] == ' ')
            {
                $s = $s . $str[$i];
                while ($str[$i] == ' ')
                {
                    $i++;
                }
            }
            if ($str[$i] != ' ')
            {
                $s = $s . $str[$i];
            }
        }
        return $s;
    }