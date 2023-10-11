<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'page::index');
$routes->get('/About', 'About::index');
$routes->get('About/(:any)/(:num)', 'About::kontak/$1/$2');
$routes->get('About/kontak', 'About::kontak');
$routes->get('About/kontak/(:alpha)/(:num)', 'About::kontak/$1/$2');