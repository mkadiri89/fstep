<?php

namespace src\framework;

class PostFactory
{
    public function create()
    {
        return new Post($_POST);
    }
}