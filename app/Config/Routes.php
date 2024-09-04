<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Home::beranda');

$routes->get('/tentang', 'Home::tentang');

$routes->get('/artikel', 'Home::artikel');
$routes->get('/artikel/(:num)', 'Home::detail_artikel/$1');

$routes->get('/produk', 'Home::produk');
$routes->get('/produk/(:num)', 'Home::detail_produk/$1');

$routes->get('/aktivitas', 'Home::aktivitas');
$routes->get('/aktivitas/(:num)', 'Home::detail_aktivitas/$1');

$routes->get('/kontak', 'Home::kontak');

