<?php

class Router
{
    private $routes;

    public function __construct()
    {
        $this->routes = [
            'queue' => src\controller\QueueController::class
        ];
    }

    public function get($route)
    {
        return $this->routes[$route];
    }
}