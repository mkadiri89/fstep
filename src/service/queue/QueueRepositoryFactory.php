<?php

namespace src\service\queue;

use src\service\database\Database;

class QueueRepositoryFactory
{
    public function create()
    {
        $database = Database::getInstance();
        return new QueueRepository($database);
    }
}