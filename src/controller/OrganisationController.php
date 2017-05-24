<?php

namespace src\controller;

use DateTime;
use src\framework\Controller;
use src\model\Customer;
use src\service\organisation\OrganisationRepositoryFactory;
use src\service\queue\QueueRepositoryFactory;

class OrganisationController extends Controller
{
    public function save()
    {
        $organisationRepository = (new OrganisationRepositoryFactory())->create();
        $queueRepository = (new QueueRepositoryFactory())->create();

        $name = $this->post->getParam('name');
        $serviceId = $this->post->getParam('service');

        $citizenId = $organisationRepository->add($name);
        $datetime = (new DateTime())->format('Y-m-d H:i:s');
        $queueRepository->add($citizenId, Customer::ORGANISATION, $serviceId, $datetime);

        $this->redirect('index.php?action=showQueue');
    }
}