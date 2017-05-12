<?php

namespace src\service\database;

use Exception;
use PDO;
use src\Config;

class Database
{
    private $config;
    private $pdo;

    public function __construct(Config $config)
    {
        $this->config = $config;

        try {
            $this->pdo = new PDO(
                'mysql:'
                . 'host=' . $this->config->get('server') . ';'
                . 'dbname=' . $this->config->get('database'),
                $this->config->get('database_username'),
                $this->config->get('database_password')
            );

            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } catch (Exception $e) {
            echo "Unable to connect to the database";
        }
    }

    /**
     * @return PDO
     */
    public function getPdo()
    {
        return $this->pdo;
    }
}