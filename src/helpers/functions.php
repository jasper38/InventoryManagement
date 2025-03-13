<?php

use src\core\Response;

function redirect($path): void
{
    header("Location: {$path}");
    exit();
}

function base_path($path): string
{
    return BASE_PATH . $path;
}

function abort($code = Response::NOT_FOUND)
{
    http_response_code($code);

    require base_path("views/errors/{$code}.php");

    die();
}

function view_access($role)
{
    $redirects = require base_path('config/role_access.php');

    return $redirects[$role] ?? '/';
}

function url_is($value)
{
    return strpos($_SERVER['REQUEST_URI'], $value) === 0;
}

function generateTrackingId()
{
    return 'TRK-' . strtoupper(bin2hex(random_bytes(5)));
}