<?php

namespace src\models;

use src\core\Database;

class Orders
{
    private $db;

    public function __construct()
    {
        $this->db = Database::getInstance();
    }

    public function getAll()
    {
        return $this->db->query('SELECT * FROM orders', [])->get();
    }

    public function create($data)
    {
        return $this->db->query(
            "INSERT INTO orders (name, tracking_id, sku, supp_name, price, qty, type) 
             VALUES (:name, :tracking_id, :sku, :supplierName, :price, :quantity, :category)",
            [
                ':name' => $data['productName'],
                ':tracking_id' => $data['tracking_id'],
                ':sku' => $data['productsku'],
                ':supplierName' => $data['supplierName'],
                ':price' => $data['price'],
                ':quantity' => $data['qty'],
                ':category' => $data['category']
            ]
        );
    }
}