<?php

namespace src\service\anonymous;

use src\service\database\Database;

class AnonymousRepository
{
    private $db;

    public function __construct(Database $db)
    {
        $this->db = $db;
    }

    public function getAll()
    {
        $stm = $this->db->getPdo()->prepare('select name from anonymous');
        $stm->execute();
        return $stm->fetchAll();
    }

    public function add()
    {
        $stm = $this->db->getPdo()->prepare("insert into anonymous() values()");
        $stm->execute();

        return $this->db->getPdo()->lastInsertId();
    }
}