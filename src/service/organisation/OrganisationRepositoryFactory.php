<?php

namespace src\service\organisation;

use src\service\database\Database;

class OrganisationRepositoryFactory
{
    public function create()
    {
        $database = Database::getInstance();
        return new OrganisationRepository($database);
    }
}