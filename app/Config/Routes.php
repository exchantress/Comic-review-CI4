<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/pages', 'Pages::index');
$routes->get('/pages/login', 'Pages::login');
$routes->get('/comiclist', 'Comics::index');

$routes->get('/comiclist/edit/(:num)', 'Reviews::edit/$1');
$routes->post('/comiclist/update/(:num)', 'Reviews::update/$1');

$routes->post('/comiclist/(:any)', 'Reviews::review/$1');
$routes->delete('/comiclist/(:num)', 'Reviews::delete/$1');

$routes->get('/comiclist/(:any)', 'Comics::detail/$1');
// $routes->put('/comiclist/update/(:num)', 'Reviews::update/$1');
