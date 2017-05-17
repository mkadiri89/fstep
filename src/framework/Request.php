<?php

namespace src\framework;

class Request
{
    private $request;

    public function __construct(array $request = [])
    {
        $this->request = $request;
    }

    public function getParam($param)
    {
        return $this->request[$param];
    }
}