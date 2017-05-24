<?php

namespace src\controller;

use DateTime;
use src\framework\Controller;
use src\model\Customer;
use src\service\citizen\CitizenRepositoryFactory;
use src\service\queue\QueueRepositoryFactory;

class CitizenController extends Controller
{
    public function save()
    {
        $citizenRepository = (new CitizenRepositoryFactory())->create();
        $queueRepository = (new QueueRepositoryFactory())->create();

        $title = $this->post->getParam('title');
        $firstName = $this->post->getParam('first_name');
        $lastName = $this->post->getParam('last_name');
        $serviceId = $this->post->getParam('service');

        $citizenId = $citizenRepository->add($title, $firstName, $lastName);
        $datetime = (new DateTime())->format('Y-m-d H:i:s');
        $queueRepository->add($citizenId, Customer::CITIZEN, $serviceId, $datetime);

        $this->redirect('index.php?action=showQueue');
    }
}