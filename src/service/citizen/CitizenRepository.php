<?php

namespace src\service\citizen;

use src\service\database\Database;

class CitizenRepository
{
    private $db;

    public function __construct(Database $db)
    {
        $this->db = $db;
    }

    public function getCustomers()
    {
        $stm = $this->db->getPdo()->prepare('select id, title, first_name, last_name from citizen');
        $stm->execute();
        return $stm->fetchAll();
    }

    public function add($title, $firstName, $lastName)
    {
        $stm = $this->db->getPdo()->prepare("insert into citizen (title, first_name, last_name) values(:title, :first_name, :last_name)");
        $stm->execute([
            'title' => $title,
            'first_name' => $firstName,
            'last_name' => $lastName
        ]);

        return $this->db->getPdo()->lastInsertId();
    }
}