<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// Custom auth routes
$routes->get('login', 'AuthController::loginView', ['as' => 'login']);
$routes->post('login', 'AuthController::login');
$routes->get('logout', 'AuthController::logout', ['as' => 'logout']);

service('auth')->routes($routes, ['except' => ['login', 'logout']]);

// Database Test Connection
$routes->get('/test-db', 'TestConnection::index');