<?php

namespace src\service\organisation;

use src\service\database\Database;

class OrganisationRepository
{
    private $db;

    public function __construct(Database $db)
    {
        $this->db = $db;
    }

    public function getOrganisations()
    {
        $stm = $this->db->getPdo()->prepare('select name from organisation');
        $stm->execute();
        return $stm->fetchAll();
    }

    public function add($name)
    {
        $stm = $this->db->getPdo()->prepare("insert into organisation (name) values(:name)");
        $stm->execute([
            'name' => $name
        ]);

        return $this->db->getPdo()->lastInsertId();
    }
}