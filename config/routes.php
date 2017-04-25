<?php

use Cake\Core\Plugin;
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;
use Cake\Routing\Route\DashedRoute;

Router::defaultRouteClass(DashedRoute::class);

Router::scope('/', function (RouteBuilder $routes) {

    $routes->connect('/', ['controller' => 'Pages', 'action' => 'display', 'home']);

    $routes->connect('/pages/*', ['controller' => 'Pages', 'action' => 'display']);

    $routes->fallbacks(DashedRoute::class);
});

Router::scope(
    '/bookmarks',
    function ($routes) {
        $routes->connect('/tagged/*' , ['controller' => 'Bookmarks', 'action' => 'tags']);
    });


Plugin::routes();
