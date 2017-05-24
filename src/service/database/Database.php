<?php

namespace src\service\database;

use Exception;
use PDO;
use src\Config;

class Database
{
    private $pdo;
    private static $instance;

    private function __construct($config)
    {
        try {
            $this->pdo = new PDO(
                'mysql:' . 'host=' . $config['server'] . ';' . 'dbname=' . $config['database'],
                $config['database_username'],
                $config['database_password']
            );

            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } catch (Exception $e) {
            echo "Unable to connect to the database";
        }
    }

    public static function getInstance()
    {
        if (!isset(self::$instance)) {
            $config = include (__DIR__ . '/../../../config.php');
            static::$instance = new static($config);
        }

        return static::$instance;
    }

    /**
     * @return PDO
     */
    public function getPdo()
    {
        return $this->pdo;
    }
}