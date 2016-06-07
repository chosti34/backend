<?php
    function getFromGet($parametr)
    {
        if (isset($_GET[$parametr]))
        {
            return $_GET[$parametr];
        }
        return '';
    }

    function getFromPost($parametr)
    {
        if (isset($_POST[$parametr]))
        {
            return $_POST[$parametr];
        }
        return '';
    }