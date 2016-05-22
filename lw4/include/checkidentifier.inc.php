<?php
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
        else
        {
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
            else
            {
                return 'no, "' . $str[$i] . '" found';
            }
        }
    }