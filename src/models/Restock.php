<?php

namespace src\models;

use src\core\Database;

class Restock
{
    private $db;

    public function __construct()
    {
        $this->db = Database::getInstance();
    }
}