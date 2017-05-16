<?php

namespace src\framework;

abstract class Controller
{
    protected $get;
    protected $view;
    protected $post;

    public function __construct(Get $get, Post $post, Request $request, View $view)
    {
        $this->get = $get;
        $this->view = $view;
        $this->post = $post;
    }
}