<?php

namespace src\service\anonymous;

use src\service\database\Database;

class AnonymousRepositoryFactory
{
    public function create()
    {
        $database = Database::getInstance();
        return new AnonymousRepository($database);
    }
}