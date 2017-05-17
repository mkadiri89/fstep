<?php

namespace src\service\customer;

class CitizensFactory
{
    public function create()
    {
        $serviceRepository = (new CitizenRepositoryFactory())->create();
        return new Citizens($serviceRepository);
    }
}