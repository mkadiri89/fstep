<?php

namespace src\service\queue;

use PDO;
use src\service\database\Database;

class QueueRepository
{
    private $db;

    public function __construct(Database $db)
    {
        $this->db = $db;
    }

    public function add($customerId, $customerType, $serviceId, $datetime)
    {
        $stm = $this->db->getPdo()->prepare("
            insert into queue (customer_id, customer_type, service_id, datetime) 
            values(:customer_id, :customer_type, :service_id, :datetime)");
        $stm->execute([
            'customer_id' => $customerId,
            'customer_type' => $customerType,
            'service_id' => $serviceId,
            'datetime' => $datetime
        ]);
    }

    public function getAll()
    {
        $stm = $this->db->getPdo()->prepare("
            select 
            case q.customer_type
				when 'CITIZEN' then 'Citizen'
                when 'ORGANISATION' then 'Organisation'
                when 'ANONYMOUS' then 'Anonymous'
			end as type,
            case q.customer_type
				when 'CITIZEN' then concat(c.title, ' ', c.first_name, ' ',c.last_name)
                when 'ORGANISATION' then o.name
                when 'ANONYMOUS' then 'Anonymous'
			end as name,
            s.name as service, 
            q.datetime 
            from queue q
            left join citizen c on q.customer_id = c.id
                and q.customer_type = 'CITIZEN'
            left join organisation o on q.customer_id = o.id
                and q.customer_type = 'ORGANISATION'
            left join anonymous a on q.customer_id = a.id
                and q.customer_type = 'ANONYMOUS'
			left join service s on q.service_id = s.id
			order by q.datetime asc
        ");

        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);
    }
}