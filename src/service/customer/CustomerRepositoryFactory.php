<?php

namespace src\service\customer;

use src\service\database\DatabaseFactory;

class CustomerRepositoryFactory
{
    public function create()
    {
        $database = (new DatabaseFactory())->create();
        return new CustomerRepository($database);
    }
}