<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/articles', 'Articles::index');
$routes->get('/articles/(:num)', 'Articles::show/$1');
$routes->get('/articles/new', 'Articles::new', ['as'=>'new-article']);
$routes->post('/articles/publish', 'Articles::publish');

service('auth')->routes($routes);