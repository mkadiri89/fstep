<?php

namespace src\framework;

class Get
{
    private $get;

    public function __construct(array $get = [])
    {
        $this->get = $get;
    }

    public function getParam($param)
    {
        return $this->get[$param];
    }
}