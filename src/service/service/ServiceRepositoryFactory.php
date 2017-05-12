<?php

namespace src\service\service;

use src\service\database\DatabaseFactory;

class ServiceRepositoryFactory
{
    public function create()
    {
        $database = (new DatabaseFactory())->create();
        return new ServiceRepository($database);
    }
}