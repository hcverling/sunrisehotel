<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Page::index');
$routes->get('/about', 'Page::about');
$routes->get('/rooms', 'Page::rooms');
$routes->get('/blog', 'Page::blog');
$routes->get('/contact', 'Page::contact');
$routes->post('/submit_reservation', 'Page::submit_reservation');
$routes->get('/navigation', 'NavigationController::index');
$routes->get('/navigation/create', 'NavigationController::create');
$routes->post('/navigation/store', 'NavigationController::store');
$routes->get('/navigation/edit/(:num)', 'NavigationController::edit/$1');
$routes->post('/navigation/update/(:num)', 'NavigationController::update/$1');
$routes->get('/navigation/delete/(:num)', 'NavigationController::delete/$1');

