<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// Solo usuarios logueados pueden entrar a cualquier ruta de este grupo
$routes->group('admin', ['filter' => 'session'], function ($routes) {
    $routes->get('/', 'Home::Admin');
    $routes->resource('users', ['controller' => 'UsersController']);
    $routes->group('estudiantes', function($routes) {
        $routes->get('/', 'EstudiantesController::index');
        $routes->get('create', 'EstudiantesController::create');
        $routes->post('store', 'EstudiantesController::store');
        $routes->get('show/(:num)', 'EstudiantesController::show/$1');
        $routes->get('edit/(:num)', 'EstudiantesController::edit/$1');
        $routes->post('update/(:num)', 'EstudiantesController::update/$1');
        $routes->get('delete/(:num)', 'EstudiantesController::delete/$1');
    });
});
service('auth')->routes($routes);
