<?php
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;
use Cake\Routing\Route\DashedRoute;

Router::plugin(
    'Admin',
    ['path' => '/admin'],
    function (RouteBuilder $routes) {
        $routes->get('/', ['controller' => 'Logins', 'action' => 'index']);
        $routes->get('/logout', ['controller' => 'Logins', 'action' => 'logout']);
        $routes->fallbacks(DashedRoute::class);
    }
);
