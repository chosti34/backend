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
        return $str;
    }
    
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
            return 'no, first symbol is number';
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
            return 'yes';
        }
        return 'no, "' . $str[$i] . '" found';
    }
    
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
