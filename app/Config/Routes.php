<?php
use CodeIgniter\Router\RouteCollection;
/** @var RouteCollection $routes */
$routes->get('/', 'Auth::login');
$routes->get('login', 'Auth::login');
$routes->post('login', 'Auth::intentarLogin');
$routes->post('logout', 'Auth::logout');
$routes->get('dashboard', 'Home::index');
$routes->get('alumnos', 'Alumnos::index');
$routes->get('alumnos/nuevo', 'Alumnos::nuevo');
$routes->post('alumnos/crear', 'Alumnos::crear');
$routes->get('alumnos/editar/(:num)', 'Alumnos::editar/$1');
$routes->post('alumnos/actualizar/(:num)', 'Alumnos::actualizar/$1');
$routes->get('alumnos/eliminar/(:num)', 'Alumnos::eliminar/$1');