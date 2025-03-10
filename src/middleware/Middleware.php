<?php

namespace src\middleware;

class Middleware
{
    private const MAP = [
        'guest' => Guest::class,
        'admin' => Admin::class,
        'manager' => Manager::class
    ];

    public static function resolve($keys)
    {
        if (!$keys) {
            return;
        }

        $keys = is_array($keys) ? $keys : [$keys];

        if (count($keys) > 1) {
            (new Role($keys))->handle();
            return;
        }

        $middleware = static::MAP[$keys[0]] ?? false;

        if (!$middleware) {
            throw new \Exception("No matching middleware found for key '{$keys[0]}'.");
        }

        (new $middleware)->handle();
    }
}