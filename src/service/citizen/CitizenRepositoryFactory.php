<?php

namespace src\service\citizen;

use src\service\database\Database;

class CitizenRepositoryFactory
{
    public function create()
    {
        $database = Database::getInstance();
        return new CitizenRepository($database);
    }
}