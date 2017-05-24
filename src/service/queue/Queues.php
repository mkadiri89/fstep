<?php

namespace src\service\queue;

use DateTime;
use src\model\Queue;

class Queues
{
    private $queueRepository;

    public function __construct(QueueRepository $queueRepository)
    {
        $this->queueRepository = $queueRepository;
    }

    /**
     * @return Queue[]
     */
    public function getAll()
    {
        $customers = $this->queueRepository->getAll();
        $formattedCustomers = [];

        foreach ($customers as $customer) {
            $formattedCustomers[] = new Queue($customer['type'], $customer['name'], $customer['service'], new DateTime($customer['datetime']));
        }

        return $formattedCustomers;
    }
}