<?php

namespace src\service\queue;

class QueuesFactory
{
    public function create()
    {
        $queueRepository = (new QueueRepositoryFactory())->create();
        return new Queues($queueRepository);
    }
}