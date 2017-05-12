<?php

namespace src\framework;

abstract class Controller
{
    protected $get;
    protected $view;

    public function __construct(Get $get, View $view)
    {
        $this->get = $get;
        $this->view = $view;
    }
}