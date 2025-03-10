<?php

namespace src\core;

use PDO;
use PDOException;

class Database
{
    private static $instance = null;
    private $pdo;
    private $statement;

    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new Database();
        }
        return self::$instance;
    }

    private function __construct()
    {
        $config = require base_path('config/config.php');
        $dsn = 'mysql:' . http_build_query($config['database'], '', ';');
        try {
            $this->pdo = new PDO($dsn, 'root', '', [
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            ]);
        } catch (PDOException $e) {
            die("Database connection failed: " . $e->getMessage());
        }
    }

    public function getConnection()
    {
        return $this->pdo;
    }

    public function query($query, $params)
    {
        $this->statement = $this->pdo->prepare($query);
        $this->statement->execute($params);

        return $this;
    }

    public function find()
    {
        return $this->statement->fetch();
    }

    public function findOrFail()
    {
        $result = $this->find();

        if (!$result) {
            abort();
        }
        return $result;
    }

    public function get()
    {
        return $this->statement->fetchAll();
    }
}