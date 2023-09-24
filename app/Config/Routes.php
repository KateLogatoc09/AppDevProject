<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'MusicController::Logatoc');
$routes->post('/save', 'MusicController::save');
$routes->get('/delete/(:any)', 'MainController::delete/$1');
