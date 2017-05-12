<?php

namespace src\model;

use Exception;

class Service
{
    private $id;
    private $name;

    public function __construct($id, $name)
    {
        if (!is_numeric($id)) {
            throw new Exception ('id should be numeric');
        }

        $this->id = $id;
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
}