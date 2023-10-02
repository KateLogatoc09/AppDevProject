<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'MusicController::index');
$routes->post('/addAudio', 'MusicController::addAudio');
$routes->post('/addPlaylist', 'MusicController::addPlaylist');
$routes->get('/delete/(:any)', 'MusicController::delete/$1');
$routes->post('/addToPlaylist', 'MusicController::addToPlaylist');
