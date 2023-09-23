<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/product', 'ProductController::index');
$routes->get('/product-add', 'ProductController::createProduct');
$routes->post('/product-store', 'ProductController::storeProduct');
$routes->get('/product/edit/(:any)', 'ProductController::editProduct/$1');
$routes->post('/product/update/(:any)', 'ProductController::updateProduct/$1');
$routes->get('/product/delete/(:any)', 'ProductController::deleteProduct/$1');

