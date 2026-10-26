$routes->get('/login', 'Auth::login');
$routes->post('/login', 'Auth::doLogin');
$routes->get('/dashboard', 'Dashboard::index');
$routes->get('/logout', 'Auth::logout');