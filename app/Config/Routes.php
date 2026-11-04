$routes->get('login', 'Auth::index');
$routes->post('login', 'Auth::ingresar');

$routes->get('dashboard', 'Dashboard::index');

$routes->get('logout', 'Auth::salir');