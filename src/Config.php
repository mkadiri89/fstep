<?php

namespace src;

class Config
{
    private $config;

    public function __construct()
    {
        $this->config = [
            'server' => 'localhost',
            'database' => 'fstep',
            'database_username' => 'root',
            'database_password' => 'root'
        ];
    }

    public function get($param)
    {
        return $this->config[$param];
    }
}