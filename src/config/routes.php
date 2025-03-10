<?php

use src\controllers\AdminController;
use src\controllers\AuthController;
use src\controllers\OrdersController;
use src\controllers\ProductsController;
use src\controllers\RestockController;
use src\controllers\ShipmentsController;

$router->get('/', [AuthController::class, 'index'])->middleware('guest');
$router->post('/login', [AuthController::class, 'login'])->middleware('guest');
$router->delete('/logout', [AuthController::class, 'logout'])->middleware(['admin', 'manager']);

$router->get('/dashboard', [AdminController::class, 'dashboard'])->middleware('admin');

$router->get('/{role}/products', [ProductsController::class, 'index'])->middleware(['admin', 'manager']);
$router->post('/{role}/products', [ProductsController::class, 'store'])->middleware(['admin', 'manager']);

$router->get('/{role}/restock', [RestockController::class, 'index'])->middleware(['admin', 'manager']);

$router->get('/{role}/orders', [OrdersController::class, 'index'])->middleware(['admin', 'manager']);
$router->post('/{role}/orders', [OrdersController::class, 'store'])->middleware(['admin', 'manager']);

$router->get('/{role}/shipments', [ShipmentsController::class, 'index'])->middleware(['admin', 'manager']);