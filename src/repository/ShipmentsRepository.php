<?php

namespace src\repository;

use src\core\Database;

class ShipmentsRepository
{
    private $db;

    public function __construct()
    {
        $this->db = Database::getInstance();
    }
}