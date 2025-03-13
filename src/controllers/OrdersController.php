<?php

namespace src\controllers;

use src\repository\OrdersRepository;
use src\utils\Request;

class OrdersController extends Controller
{
    private $ordersRepo;

    public function __construct()
    {
        $this->ordersRepo = new OrdersRepository();
    }

    public function index()
    {
        $orders = $this->ordersRepo->getAll();
        $this->view('orders/index.view.php', [
            'orders' => $orders
        ]);
    }

    public function store()
    {
        $data = Request::all();

        $this->ordersRepo->create($data);

        redirect('/admin/orders?success=added_successfully');
    }
}
