<?php

namespace src\models;

use src\core\Database;

class Admin
{
    private $db;

    public function __construct()
    {
        $this->db = Database::getInstance();
    }
}