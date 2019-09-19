<?php
/**
 * 
 */
use Cake\Http\Middleware\CsrfProtectionMiddleware;
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;
use Cake\Routing\Route\DashedRoute;

Router::scope('/api', function ($routes){
    $routes->extensions(['json']);
    $routes->resources('FullCode');
});

