<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/product', 'ProductController::index');
$routes->get('/product-add', 'ProductController::createProduct');
$routes->post('/product-store', 'ProductController::storeProduct');
