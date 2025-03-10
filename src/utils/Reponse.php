<?php

namespace src\utils;

class Response
{
    public static function redirect($url)
    {
       redirect($url);
    }

    public static function with($key, $value)
    {
        $_SESSION[$key] = $value;
    }
}