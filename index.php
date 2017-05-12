<?php
require_once 'vendor/autoload.php';
require_once 'Router.php';

$router = new Router();
$get = (new \src\framework\Getfactory())->create();
$view = new \src\framework\View();

$action = $get->getParam('action');
$route = $router->get($action);

if (!isset($route)) {
    throw new Exception('Route ' . $route . ' does not exist');
}

(new $route($get, $view))->$action();