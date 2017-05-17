<?php

namespace src\framework;

class RequestFactory
{
    public function create()
    {
        return new Request($_REQUEST);
    }
}