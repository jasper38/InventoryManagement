<?php

namespace src\repository;

use src\core\Database;

class AdminRepository
{
    private $db;

    public function __construct()
    {
        $this->db = Database::getInstance();
    }
}