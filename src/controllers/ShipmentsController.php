<?php

namespace src\controllers;

use src\repository\ShipmentsRepository;

class ShipmentsController extends Controller
{
    private $shipmentsRepo;

    public function __construct()
    {
        $this->shipmentsRepo = new ShipmentsRepository();
    }

    public function index()
    {
        $this->view('shipments/index.view.php');
    }
}