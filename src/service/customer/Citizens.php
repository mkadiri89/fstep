<?php

namespace src\service\customer;

use src\model\Customer;
use src\model\Service;

class Citizens
{
    private $repository;

    public function __construct(CitizenRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @return Customer[]
     */
    public function getCustomers()
    {
        $customerData = $this->repository->getCustomers();
        $customers = [];

        foreach ($customerData as $datum) {
            $customers[] = new Customer($datum['id'], $datum['title'], $datum['first_name'], $datum['last_name']);
        }

        return $customers;
    }
}