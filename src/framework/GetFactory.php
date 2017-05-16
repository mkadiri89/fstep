<?php

namespace src\framework;

class GetFactory
{
    public function create()
    {
        return new Get($_GET);
    }
}