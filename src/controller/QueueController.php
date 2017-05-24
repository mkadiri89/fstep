<?php

namespace src\controller;

use src\framework\Controller;
use src\service\queue\QueuesFactory;
use src\service\service\ServicesFactory;

class QueueController extends Controller
{
    public function show()
    {
        $queue = (new QueuesFactory())->create()->getAll();
        $services = (new ServicesFactory())->create()->getServices();

        $this->view->build('src\\view\\Queue.php', [
            'services' => $services,
            'queue' => $queue
        ]);
    }
}