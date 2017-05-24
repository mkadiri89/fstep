<?php

namespace src\service\customer;

use src\model\Citizen;
use src\model\Service;

class Citizens
{
    private $repository;

    public function __construct(CitizenRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @return Citizen[]
     */
    public function getCustomers()
    {
        $customerData = $this->repository->getCustomers();
        $customers = [];

        foreach ($customerData as $datum) {
            $customers[] = new Citizen($datum['id'], $datum['title'], $datum['first_name'], $datum['last_name']);
        }

        return $customers;
    }
}