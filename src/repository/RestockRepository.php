<?php

namespace src\repository;

use src\core\Database;

class RestockRepository
{
    private $db;

    public function __construct()
    {
        $this->db = Database::getInstance();
    }
}