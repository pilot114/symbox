<?php

use Symfony\Component\Routing;

$routes = new Routing\RouteCollection();
$routes->add('main', new Routing\Route('/', [
    '_controller' => 'App\\Controller\\MainController::indexAction',
]));

return $routes;