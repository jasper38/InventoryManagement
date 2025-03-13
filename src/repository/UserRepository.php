<?php

namespace src\repository;

use src\core\Database;

class UserRepository
{
    private $db;

    public function __construct()
    {
        $this->db = Database::getInstance();
    }

    public function findByEmail($email)
    {
        return $this->db->query(
            "SELECT role, password, email FROM users WHERE email = :email", [
                'email' => $email
            ]
        )->find();
    }
}