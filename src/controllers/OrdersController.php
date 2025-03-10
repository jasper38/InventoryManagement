<?php

namespace src\controllers;

use src\models\Orders;
use src\utils\Request;

class OrdersController extends Controller
{
    private $ordersModel;

    public function __construct()
    {
        $this->ordersModel = new Orders();
    }

    public function index()
    {
        $orders = $this->ordersModel->getAll();
        $this->view('orders/index.view.php', [
            'orders' => $orders
        ]);
    }

    public function store()
    {
        $data = Request::all();

        $this->ordersModel->create($data);

        redirect('/admin/orders?success=added_successfully');
    }
}
