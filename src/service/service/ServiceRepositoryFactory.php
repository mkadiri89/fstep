<?php

namespace src\service\service;

use src\service\database\Database;

class ServiceRepositoryFactory
{
    public function create()
    {
        $database = Database::getInstance();
        return new ServiceRepository($database);
    }
}