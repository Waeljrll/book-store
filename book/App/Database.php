<?php

namespace App;

use PDO;
use PDOException;


class Database
{
    
    private static ?Database $instance = null;
    private PDO $connection;
    private function __construct(array $config)
    {
        try {
            $dns = "mysql:host={$config['host']};dbname={$config['dbname']};charset=utf8mb4";
            $this->connection = new PDO($dns, $config['username'], $config['password']);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die($e->getMessage());
        }

    }
    public static function getInstance(array $config):Database
    {
        if (self::$instance === null) {
            self::$instance = new self($config);
        }
        return self::$instance;
    }
    public function getConnection(): PDO
    {
        return $this->connection;
    }
}





































































/*
use PDO;
use PDOException;

class Database
{

    private static $pdo = null;

    /**
     * Return a PDO connection (singleton).
     * @return PDO
     * @throws PDOException

    public static function getConnection()
    {
        if (self::$pdo === null) {
            $configPath = __DIR__ . '/../config.php';
            if (!file_exists($configPath)) {
                throw new PDOException('Database config file not found: ' . $configPath);
            }

            $config = require $configPath;
            $host = $config['host'] ?? '127.0.0.1';
            $dbname = $config['dbname'] ?? '';
            $user = $config['username'] ?? '';
            $pass = $config['password'] ?? '';

            $dsn = "mysql:host={$host};dbname={$dbname};charset=utf8mb4";

            try {
                self::$pdo = new PDO($dsn, $user, $pass, [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                ]);
            } catch (PDOException $e) {
                throw new PDOException('DB connection failed: ' . $e->getMessage(), (int)$e->getCode());
            }
        }

        return self::$pdo;
    }
}
*/

