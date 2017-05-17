<?php

namespace src\controller;

use src\framework\Controller;
use src\service\customer\CitizensFactory;
use src\service\service\ServicesFactory;

class QueueController extends Controller
{
    public function show()
    {
        $customers = (new CitizensFactory())->create()->getCustomers();
        $services = (new ServicesFactory())->create()->getServices();

        $this->view->build('src\\view\\Queue.php', [
            'services' => $services,
            'customers' => $customers
        ]);
    }
}