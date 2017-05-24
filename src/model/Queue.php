<?php

namespace src\model;

use DateTime;

class Queue
{
    private $name;
    private $service;
    private $type;
    private $queuedAt;

    public function __construct($type, $name, $service, DateTime $queuedAt)
    {
        $this->name = $name;
        $this->service = $service;
        $this->type = $type;
        $this->queuedAt = $queuedAt;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return DateTime
     */
    public function getQueuedAt()
    {
        return $this->queuedAt;
    }
}