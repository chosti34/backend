<?php
    function getParamFromGet($parametr)
    {
        if (isset($_GET[$parametr]))
        {
            return $_GET[$parametr];
        }
        return "";
    }

    function getParamFromPost($parametr)
    {
        if (isset($_POST[$parametr]))
        {
            return $_POST[$parametr];
        }
        return "";
    }