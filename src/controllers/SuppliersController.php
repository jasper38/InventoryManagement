<?php

namespace src\controllers;

class SuppliersController extends Controller
{
    public function __construct()
    {
        
    }

    public function index()
    {
        $this->view('suppliers/index.view.php'); //for now since no database retrieval atm
    }

    public function create()
    {
        $this->view('suppliers/create.view.php'); //kung asa maka add ug customer
    }
}