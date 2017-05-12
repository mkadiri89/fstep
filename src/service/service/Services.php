<?php

namespace src\service\service;

use src\model\Service;

class Services
{
    private $repository;

    public function __construct(ServiceRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @return Service[]
     */
    public function getServices()
    {
        $servicesData = $this->repository->getServices();
        $services = [];

        foreach ($servicesData as $datum) {
            $services[] = new Service($datum['id'], $datum['name']);
        }

        return $services;
    }
}