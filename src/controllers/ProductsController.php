<?php

namespace src\controllers;

use src\repository\ProductsRepository;
use src\utils\Request;

class ProductsController extends Controller
{
    private $productsRepo;

    public function __construct()
    {
        $this->productsRepo = new ProductsRepository();
    }
    public function index()
    {
        $products = $this->productsRepo->getAll();

        $this->view('products/index.view.php', [
            'products' => $products
        ]);
    }

    public function edit()
    {
        $this->view('products/edit.view.php');
    }

    public function store()
    {
        $data = Request::all();

        $errors = Request::validate([
            'productName' => 'required',
            'productsku' => 'required',
            'supplierID' => 'required|numeric',
            'supplierName' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'qty' => 'required|integer',
            'status' => 'required',
            'category' => 'required',
        ]);

        if (!empty($errors)) {
            redirect('/admin/products?error=an_error_occured');
        }

        $this->productsRepo->create($data);

        redirect('/admin/products?success=added_successfully');
    }
}