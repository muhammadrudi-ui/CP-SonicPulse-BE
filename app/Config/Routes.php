<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Home::beranda');
$routes->get('/home', 'Home::home');

$routes->get('/tentang', 'Home::tentang');
$routes->get('/about', 'Home::about');

$routes->get('/artikel', 'Home::artikel');
$routes->get('/article', 'Home::article');
$routes->get('/artikel/(:num)', 'Home::detail_artikel/$1');
$routes->get('/article/(:num)', 'Home::detail_article/$1');

$routes->get('/produk', 'Home::produk');
$routes->get('/product', 'Home::product');
$routes->get('/produk/(:num)', 'Home::detail_produk/$1');
$routes->get('/product/(:num)', 'Home::detail_product/$1');

$routes->get('/aktivitas', 'Home::aktivitas');
$routes->get('/activity', 'Home::activity');
$routes->get('/aktivitas/(:num)', 'Home::detail_aktivitas/$1');
$routes->get('/activity/(:num)', 'Home::detail_activity/$1');

$routes->get('/kontak', 'Home::kontak');
$routes->get('/contact', 'Home::contact');

