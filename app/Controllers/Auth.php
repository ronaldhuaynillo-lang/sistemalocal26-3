<?php
namespace App\Controllers;
class Auth extends BaseController
{
    public function login()
    {
        if (session()->get('autenticado') === true) {
            return redirect()->to(site_url('dashboard'));
        }
        return view('login_view');
    }

    public function intentarLogin()
    {
        $usuario = $this->request->getPost('usuario');
        $password = $this->request->getPost('password');

        if ($usuario == 'admin' && $password == 'admin123') {
            session()->set([
                'autenticado' => true,
                'usuario' => $usuario
            ]);
            return redirect()->to(site_url('dashboard'));
        }
        return redirect()->back()->with('error', 'Usuario o contraseña incorrectos');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to(site_url('login'));
    }
}