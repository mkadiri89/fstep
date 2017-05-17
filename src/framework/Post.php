<?php

namespace src\framework;

class Post
{
    private $post;

    public function __construct(array $post = [])
    {
        $this->post = $post;
    }

    public function getParam($param)
    {
        return $this->post[$param];
    }
}