<?php

namespace src\models;

use src\core\Database;

class Shipments
{
    private $db;

    public function __construct()
    {
        $this->db = Database::getInstance();
    }
}