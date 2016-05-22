<?php
    function getParamFromGet($parametr)
    {
        return $str = $_GET[$parametr];
    }
    
    function getParamFromPost($parametr)
    {
        return $str = $_POST[$parametr];
    }
