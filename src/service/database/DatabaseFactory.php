<?php

namespace src\service\database;

class DatabaseFactory
{
    public function create()
    {
        $config = include (__DIR__ . '/../../../config.php');
        return new Database($config);
    }
}