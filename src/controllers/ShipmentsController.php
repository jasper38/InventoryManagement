<?php

namespace src\controllers;

use src\models\Shipments;

class ShipmentsController extends Controller
{
    private $shipmentsModel;

    public function __construct()
    {
        $this->shipmentsModel = new Shipments();
    }

    public function index()
    {
        $this->view('shipments/index.view.php');
    }
}