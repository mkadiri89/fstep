<?php

namespace src\controller;

use DateTime;
use src\framework\Controller;
use src\model\Customer;
use src\service\anonymous\AnonymousRepositoryFactory;
use src\service\queue\QueueRepositoryFactory;

class AnonymousController extends Controller
{
    public function save()
    {
        $organisationRepository = (new AnonymousRepositoryFactory())->create();
        $queueRepository = (new QueueRepositoryFactory())->create();

        $serviceId = $this->post->getParam('service');

        $anonymousId = $organisationRepository->add();
        $datetime = (new DateTime())->format('Y-m-d H:i:s');
        $queueRepository->add($anonymousId, Customer::ANONYMOUS, $serviceId, $datetime);

        $this->redirect('index.php?action=showQueue');
    }
}