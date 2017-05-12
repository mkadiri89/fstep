<?php

namespace src\service\service;

use src\service\database\Database;

class ServiceRepository
{
    private $db;

    public function __construct(Database $db)
    {
        $this->db = $db;
    }

    public function getServices()
    {
        $stm = $this->db->getPdo()->prepare('select id, name from service');
        $stm->execute();
        return $stm->fetchAll();
    }
}