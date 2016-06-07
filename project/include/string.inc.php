<?php
    function last($str)
    {
        $len = strlen($str);
        if ($len != 0)
        {
            return $str[$len - 1];
        }
        return '';
    }

    function withoutLast($str)
    {
        $len = strlen($str);
        if ($len > 1)
        {
            return substr($str, 0, $len - 1);
        }
        return '';
    }

    function revers($str)
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
        return (!is_numeric($str[0])) && (ctype_alnum($str));
    }

    function removeExtraBlanks($str)
    {
        $str = trim($str);
        $len = strlen($str);
        $newStr = '';
        $found = false;
        for ($i = 0; $i < $len; $i++)
        {
            if (($str[$i] == ' ') && (!$found))
            {
                $newStr .= $str[$i];
                $found = true;
            }
            elseif ($str[$i] != ' ')
            {
                $newStr .= $str[$i];
                $found = false;
            }
        }
        return $newStr;
    }

    function getStrengthByLength($str)
    {
        return 4 * strlen($str);
    }

    function getStrengthByDigits($str)
    {
        $strength = 0;
        $len = strlen($str);
        for ($i = 0; $i < $len; $i++)
        {
            if (is_numeric($str[$i]))
            {
                $strength += 4;
            }
        }
        return $strength;
    }

    function getStrengthByUpperCase($str)
    {
        $strength = 0;
        $len = strlen($str);
        $i = 0;
        $amount = 0;
        while ($i != $len)
        {
            if (ctype_upper($str[$i]))
            {
                $amount++;
            }
            $i++;
        }
        if ($amount != 0)
        {
            return $strength = ($len - $amount) * 2;
        }
        return $strength;
    }

    function getStrengthByLowerCase($str)
    {
        $strength = 0;
        $len = strlen($str);
        $i = 0;
        $amount = 0;
        while ($i != $len)
        {
            if (ctype_lower($str[$i]))
            {
                $amount++;
            }
            $i++;
        }
        if ($amount != 0)
        {
            return $strength = ($len - $amount) * 2;
        }
        return $strength;
    }

    function getStrengthByOnlyLetters($str)
    {
        $strength = 0;
        if (ctype_alpha($str))
        {
            $strength = strlen($str);
        }
        return $strength;
    }

    function getStrengthByOnlyDigits($str)
    {
        $strength = 0;
        if (ctype_digit($str))
        {
            $strength = strlen($str);
        }
        return $strength;
    }

    function getStrengthByCharsRepeat($str)
    {
        $strength = 0;
        $arrStr = count_chars($str, 1);
        foreach ($arrStr as $char => $amount)
        {
            if ($amount > 1)
            {
                $strength += $amount;
            }
        }
        return $strength;
    }

    function passwordStrength($pass)
    {
        $strength = 0;
        if (ctype_alnum($pass))
        {
            $strength += getStrengthByLength($pass);
            $strength += getStrengthByDigits($pass);
            $strength += getStrengthByUpperCase($pass);
            $strength += getStrengthByLowerCase($pass);
            $strength -= getStrengthByOnlyLetters($pass);
            $strength -= getStrengthByOnlyDigits($pass);
            $strength -= getStrengthByCharsRepeat($pass);
        }
        return $strength;
    }