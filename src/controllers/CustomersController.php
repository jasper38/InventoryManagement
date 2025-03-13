<?php

namespace src\controllers;

class CustomersController extends Controller
{
    public function __construct()
    {
        //some repository for database interaction
    }

    public function index()
    {
        $this->view('customers/index.view.php'); //for now since no database retrieval atm
    }

    public function create()
    {
        $this->view('customers/create.view.php'); //kung asa maka add ug customer
    }
}