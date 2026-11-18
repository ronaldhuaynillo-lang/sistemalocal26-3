<?php
namespace Config;
use CodeIgniter\Router\RouteCollection;
use Config\Services;

/**
 * @var RouteCollection $routes
 */
$routes = Services::routes();
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(false);

$routes->get('/', 'Auth::login');
$routes->get('login', 'Auth::login');
$routes->post('login/auth', 'Auth::auth');
$routes->get('logout', 'Auth::logout');

$routes->get('alumnos', 'Alumnos::index');
$routes->get('alumnos/crear', 'Alumnos::crear');
$routes->get('alumnos/create', 'Alumnos::crear');
$routes->post('alumnos/guardar', 'Alumnos::guardar');
$routes->post('alumnos/store', 'Alumnos::guardar');
$routes->get('alumnos/editar/(:num)', 'Alumnos::editar/$1');
$routes->post('alumnos/actualizar/(:num)', 'Alumnos::actualizar/$1');
$routes->get('alumnos/eliminar/(:num)', 'Alumnos::eliminar/$1');

// Limpia cualquier cosa que hayas pegado en las vistas