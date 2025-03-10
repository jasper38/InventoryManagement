<?php

namespace src\controllers;

use src\models\Products;
use src\utils\Request;
use src\utils\Response;

class ProductsController extends Controller
{
    private $productsModel;

    public function __construct()
    {
        $this->productsModel = new Products();
    }

    public function index()
    {
        $products = $this->productsModel->getAll();

        $this->view('products/index.view.php', [
            'products' => $products
        ]);
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

        $this->productsModel->create($data);

        redirect('/admin/products?success=added_successfully');
    }
}