<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/pages', 'Pages::index');
$routes->get('/pages/login', 'Pages::login');
$routes->get('/comiclist', 'Comics::index');
$routes->get('/comiclist/(:segment)', 'Comics::detail/$1');
