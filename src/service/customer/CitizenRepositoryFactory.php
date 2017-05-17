<?php

namespace src\service\customer;

use src\service\database\DatabaseFactory;

class CitizenRepositoryFactory
{
    public function create()
    {
        $database = (new DatabaseFactory())->create();
        return new CitizenRepository($database);
    }
}