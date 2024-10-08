<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Home::beranda');

$routes->group('id', function ($routes) {
    $routes->get('/', 'Home::beranda');
    $routes->get('tentang', 'Home::tentang');
    $routes->get('artikel', 'Home::artikel');
    $routes->get('artikel/(:any)', 'Home::detail_artikel/$1');
    $routes->get('produk', 'Home::produk');
    $routes->get('produk/(:any)', 'Home::detail_produk/$1');
    $routes->get('aktivitas', 'Home::aktivitas');
    $routes->get('aktivitas/(:any)', 'Home::detail_aktivitas/$1');
    $routes->get('kontak', 'Home::kontak');
});

$routes->group('en', function ($routes) {
    $routes->get('home', 'Home::home');
    $routes->get('about', 'Home::about');
    $routes->get('article', 'Home::article');
    $routes->get('article/(:any)', 'Home::detail_article/$1');
    $routes->get('product', 'Home::product');
    $routes->get('product/(:any)', 'Home::detail_product/$1');
    $routes->get('activity', 'Home::activity');
    $routes->get('activity/(:any)', 'Home::detail_activity/$1');
    $routes->get('contact', 'Home::contact');
});
