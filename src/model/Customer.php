<?php

namespace src\model;

use Exception;

class Customer
{
    private $id;
    private $title;
    private $firstName;
    private $lastName;

    public function __construct($id, $title, $firstName, $lastName)
    {
        if (!is_numeric($id)) {
            throw new Exception ('id should be numeric');
        }

        $this->id = $id;
        $this->title = $title;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
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
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }
}