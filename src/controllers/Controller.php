<?php

namespace src\controllers;

use src\core\Authenticator;

class Controller
{
    protected function view($path, $attributes = [])
    {
        $attributes['role'] = Authenticator::userRole(); 

        extract($attributes);
        require_once base_path('views/' . $path);
    }
}