<?php

namespace src\service\database;

use src\Config;

class DatabaseFactory
{
    public function create()
    {
        $config = new Config();
        return new Database($config);
    }
}