<?php

namespace src\service\service;

use src\service\database\Database;

class QueueRepository
{
    private $db;

    public function __construct(Database $db)
    {
        $this->db = $db;
    }

    public function add($customerId, $datetime)
    {
        $stm = $this->db->getPdo()->prepare("insert into queue (customer_id, datetime) values(:customer_id, :datetime)");
        $stm->execute([
            'customer_id' => $customerId,
            'datetime' => $datetime
        ]);
    }
}