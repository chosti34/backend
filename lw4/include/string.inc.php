<?php
    function last($str)
    {
        $len = strlen($str);
        if ($len != 0)
        {
            return $str[$len - 1];
        }
        return "";
    }
    
    function withoutLast($str)
    {
        $len = strlen($str);
        if ($len > 1)
        {
            return substr($str, 0, $len - 1);
        }
        return "";
    }
    
    function reverse($str)
    {
        $len = strlen($str);
        $newStr = '';
        for ($i = $len - 1; $i >= 0; $i--)
        {
            $newStr = $newStr . $str[$i];
        }
        return $newStr;
    }
    
    function checkIdentifier($str)
    {
        $len = strlen($str);
        
        if (is_numeric($str[0]))
        {
            return FALSE;
        }
        
        if (ctype_alnum($str))
        {
            return TRUE;
        }
        
        return FALSE;
    }
    
    function removeExtraBlanks($str)
    {
        $str = trim($str);
        $len = strlen($str);
        $s = '';
        
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