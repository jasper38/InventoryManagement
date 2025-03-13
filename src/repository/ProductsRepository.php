<?php

namespace src\repository;

use src\core\Database;

class ProductsRepository
{
    private $db;

    public function __construct()
    {
        $this->db = Database::getInstance();
    }

    public function getAll()
    {
        return $this->db->query('SELECT * FROM products', [])->get();
    }

    public function create($data)
    {
        return $this->db->query(
            "INSERT INTO products (name, sku, supp_id, description, price, qty, status, type) 
             VALUES (:name, :sku, :supplier_id, :description, :price, :quantity, :status, :category)", [
                ':name' => $data['productName'],
                ':sku' => $data['productsku'],
                ':supplier_id' => $data['supplierID'],
                ':description' => $data['description'],
                ':price' => $data['price'],
                ':quantity' => $data['qty'],
                ':status' => $data['status'],
                ':category' => $data['category']
        ]);
    }

    public function checkToRestock()
    {
        return $this->db->query("SELECT * FROM products WHERE qty <= 10", []);
    }
}