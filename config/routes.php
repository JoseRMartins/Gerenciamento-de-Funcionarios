<?php

use Cake\Http\Middleware\CsrfProtectionMiddleware;
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;
use Cake\Routing\Route\DashedRoute;


Router::defaultRouteClass(DashedRoute::class);

Router::scope('/', function (RouteBuilder $routes) {
    // Register scoped middleware for in scopes.
    $routes->registerMiddleware('csrf', new CsrfProtectionMiddleware([
        'httpOnly' => true,
    ]));

    $routes->applyMiddleware('csrf');

    $routes->connect('/', ['prefix' => 'admin','controller' => 'Welcome', 'action' => 'index']);

    $routes->connect('/pages/*', ['prefix' => 'admin','controller' => 'Welcome', 'action' => 'index']);

    $routes->fallbacks(DashedRoute::class);
});

Router::prefix('admin', function (RouteBuilder $routes) {
    $routes->connect('/', ['controller' => 'Users', 'action' => 'index']);
    $routes->fallbacks(DashedRoute::class);

    
});
