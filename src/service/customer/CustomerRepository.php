<?php

namespace src\service\customer;

use src\service\database\Database;

class CustomerRepository
{
    private $db;

    public function __construct(Database $db)
    {
        $this->db = $db;
    }

    public function getCustomers()
    {
        $stm = $this->db->getPdo()->prepare('select id, title, first_name, last_name from customer');
        $stm->execute();
        return $stm->fetchAll();
    }

    public function addCustomer($title, $firstName, $lastName)
    {
        $stm = $this->db->getPdo()->prepare("insert into customer (title, first_name, last_name) values(:title, :first_name, :last_name)");
        $stm->execute([
            'title' => $title,
            'first_name' => $firstName,
            'last_name' => $lastName
        ]);
    }
}