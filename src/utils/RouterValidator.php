<?php

namespace src\utils;

class RouterValidator
{
    public static function validateController($controller, $route)
    {
        if (!is_array($controller) || count($controller) !== 2) {
            throw new \Exception("Invalid controller definition for route: {$route['uri']}");
        }
    }

    public static function validateControllerClass($class) 
    {
        if (!class_exists($class)) {
            throw new \Exception("Controller class {$class} not found.");
        }
    }

    public static function validateControllerMethod($instance, $method, $class)
    {
        if (!method_exists($instance, $method)) {
            throw new \Exception("Method {$method} not found in controller {$class}.");
        }
    }
}