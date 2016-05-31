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
    
    function withoutlast($str)
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
        $newstr = '';
        for ($i = $len - 1; $i >= 0; $i--)
        {
            $newstr = $newstr . $str[$i];
        }
        return $newstr;
    }
    
    function checkIdentifier($str)
    {
        $len = strlen($str);
        $str = strtolower($str);
        $symbols = range('a', 'z');
        $numbers = range('0', '9');
        $goodChars = array_merge($symbols, $numbers);
        
        foreach ($goodChars as &$element)
        {
            $element = (string)$element;
        }
      
        if (is_numeric($str[0]))
        {
            echo 'the first symbol is number, ';
            return FALSE;
        }
        for ($i = 0; $i < $len; $i++)
        {
            if (!in_array($str[$i], $goodChars, TRUE))
            {
                break;
            }
        }
        if ($i == $len)
        {
            return TRUE;
        }
        echo '"' . $str[$i] . '" found, ';
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
