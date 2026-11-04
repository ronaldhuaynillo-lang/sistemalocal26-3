<?php
use CodeIgniter\Router\RouteCollection;
/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Auth::login');
$routes->get('/login', 'Auth::login');
$routes->post('/login', 'Auth::doLogin');
$routes->get('/logout', 'Auth::logout');
$routes->get('/dashboard', 'Dashboard::index');
$routes->get('/alumnos/crear', 'Alumnos::crear');
$routes->post('/alumnos/guardar', 'Alumnos::guardar');
$routes->get('/alumnos/eliminar/(:num)', 'Alumnos::eliminar/$1');