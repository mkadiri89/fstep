<?php

namespace src\service\customer;

class CustomersFactory
{
    public function create()
    {
        $serviceRepository = (new CustomerRepositoryFactory())->create();
        return new Customers($serviceRepository);
    }
}