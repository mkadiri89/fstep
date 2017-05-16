<?php

class Router
{
    private $routes;

    public function __construct()
    {
        $this->routes = [
            'showQueue' => [
                'method' => 'show',
                'class' => src\controller\QueueController::class
            ],
            'saveCitizen' => [
                'method' => 'save',
                'class' => src\controller\CitizenController::class
            ]
        ];
    }

    public function get($route)
    {
        return $this->routes[$route];
    }
}