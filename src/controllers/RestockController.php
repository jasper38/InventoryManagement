<?php

namespace src\controllers;

use src\repository\RestockRepository;
use src\repository\ProductsRepository;

class RestockController extends Controller
{
    private $restockRepo;
    private $productsRepo;

    public function __construct()
    {
        $this->restockRepo = new RestockRepository();
        $this->productsRepo = new ProductsRepository();
    }

    public function index()
    {
        $toRestock = $this->productsRepo->checkToRestock();

        $this->view('restock/index.view.php', [
            'restock' => $toRestock
        ]);
    }
}