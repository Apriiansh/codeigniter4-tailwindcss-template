<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// Demo pages
$routes->get('demo/form', 'Home::demoForm', ['as' => 'demo.form']);
$routes->post('demo/form', 'Home::processDemoForm');
$routes->get('dashboard', 'Dashboard::index', ['as' => 'dashboard']);

// Database Test Connection
$routes->get('/test-db', 'TestConnection::index');