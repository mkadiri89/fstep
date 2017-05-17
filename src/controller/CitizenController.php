<?php

namespace src\controller;

use src\framework\Controller;
use src\service\customer\CitizenRepositoryFactory;
use src\service\customer\CitizensFactory;
use src\service\service\ServicesFactory;

class CitizenController extends Controller
{
    public function save()
    {
        (new CitizenRepositoryFactory())->create()->add(
            $this->post->getParam('title'),
            $this->post->getParam('first_name'),
            $this->post->getParam('last_name')
        );

        $customers = (new CitizensFactory())->create()->getCustomers();
        $services = (new ServicesFactory())->create()->getServices();

        $this->view->build('src\\view\\Queue.php', [
            'services' => $services,
            'customers' => $customers
        ]);
    }
}