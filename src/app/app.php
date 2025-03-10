<?php

use src\core\Session;
use src\core\Router;

Session::start();

$router = Router::getInstance();

require_once base_path('config/routes.php');

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$method = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];

$router->route($uri, $method);