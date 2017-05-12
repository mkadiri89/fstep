<?php

namespace src\service\service;

class ServicesFactory
{
    public function create()
    {
        $serviceRepository = (new ServiceRepositoryFactory())->create();
        return new Services($serviceRepository);
    }
}