<?php

namespace src\framework;

class Getfactory
{
    public function create()
    {
        return new Get($_GET);
    }
}