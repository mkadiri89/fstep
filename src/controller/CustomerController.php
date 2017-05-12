<?php

namespace src\controller;

use src\framework\Controller;
use src\service\customer\CustomerRepositoryFactory;
use src\service\customer\CustomersFactory;
use src\service\service\ServicesFactory;

class CustomerController extends Controller
{
    public function save()
    {
        (new CustomerRepositoryFactory())->create()->addCustomer(
            $this->get->getParam('title'),
            $this->get->getParam('first_name'),
            $this->get->getParam('last_name')
        );

        $customers = (new CustomersFactory())->create()->getCustomers();
        $services = (new ServicesFactory())->create()->getServices();

        $this->view->build('src\\view\\Queue.php', [
            'services' => $services,
            'customers' => $customers
        ]);
    }
}