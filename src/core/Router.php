<?php

namespace src\core;

use src\middleware\Middleware;
use src\utils\RouterValidator;

class Router
{
    private static $instance;
    private $routes = [];

    public static function getInstance()
    {
        if (self::$instance === null){
            self::$instance = new Router();
        }
        return self::$instance;
    }

    private function add($method, $uri, $controller)
    {
        $this->routes[] = [
            'uri' => $uri,
            'controller' => $controller, // Since controller classes, ['ClassName::class', 'methodName']
            'method' => $method,
            'middleware' => null
        ];

        return $this;
    }

    public function get($uri, $controller)
    {
        return $this->add('GET', $uri, $controller);
    }

    public function post($uri, $controller)
    {
        return $this->add('POST', $uri, $controller);
    }

    public function delete($uri, $controller)
    {
        return $this->add('DELETE', $uri, $controller);
    }

    public function patch($uri, $controller)
    {
        return $this->add('PATCH', $uri, $controller);
    }

    public function put($uri, $controller)
    {
        return $this->add('PUT', $uri, $controller);
    }

    public function middleware($key)
    {
        $this->routes[array_key_last($this->routes)]['middleware'] = $key;

        return $this;
    }

    public function route($uri, $method)
    {
        foreach ($this->routes as $route) {

            if ($this->matchUri($uri, $route['uri']) && $route['method'] === strtoupper($method)) {
                
                Middleware::resolve($route['middleware']);

                return $this->dispatch($route);
            }
        }

        $this->abort();
    }

    public function previousUrl()
    {
        return $_SERVER['HTTP_REFERER'];
    }

    private function abort($code = Response::NOT_FOUND)
    {
        http_response_code($code);

        require base_path("views/errors/{$code}.php");

        die();
    }

    private function dispatch($route)
    {
        $controller = $route['controller'];
        RouterValidator::validateController($controller, $route);
        
        [$class, $method] = $controller;
        RouterValidator::validateControllerClass($class);

        $instance = new $class();
        RouterValidator::validateControllerMethod($instance, $method, $class);

        return $instance->$method();
    }

    private function matchUri($uri, $registeredUri)
    {
        $userRole = Authenticator::userRole();

        $registeredUri = $this->replaceRolePlaceholder($registeredUri, $userRole);
        if (!$this->isAuthorizedRoleUri($uri, $userRole, $registeredUri)) {
            $this->abort(Response::FORBIDDEN);
        }

        $pattern = $this->buildRegexPattern($registeredUri, $userRole);

        return $this->matchAndExtractParams($uri, $pattern);
    }

    private function replaceRolePlaceholder($uri, $userRole)
    {
        return str_replace('{role}', $userRole, $uri);
    }

    private function isAuthorizedRoleUri($uri, $userRole, $expectedUri)
    {
        return str_contains($expectedUri, '{role}') || str_starts_with($uri, "/$userRole/");
    }

    private function buildRegexPattern($registeredUri, $userRole)
    {
        return "#^" . preg_replace([
            "/\{role\}/", 
            "/\{sku\}/"   
        ], [
            preg_quote($userRole, '#'),
            '([^/]+)'
        ], $registeredUri) . "$#";
    }

    private function matchAndExtractParams($uri, $pattern)
    {
        if (preg_match($pattern, $uri, $matches)) {
            $_GET['sku'] = $matches[1] ?? null;
            return true;
        }
        return false;
    }
}
