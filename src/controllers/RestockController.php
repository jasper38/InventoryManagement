<?php

namespace src\controllers;

use src\models\Products;
use src\models\Restock;

class RestockController extends Controller
{
    private $restockModel;
    private $productsModel;

    public function __construct()
    {
        $this->restockModel = new Restock();
        $this->productsModel = new Products();
    }

    public function index()
    {
        $toRestock = $this->productsModel->checkToRestock();

        $this->view('restock/index.view.php', [
            'restock' => $toRestock
        ]);
    }
}