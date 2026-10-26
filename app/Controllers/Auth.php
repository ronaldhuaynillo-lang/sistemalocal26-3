<?php
namespace App\Controllers;
class Auth extends BaseController
{
    public function login(){ return view('login_view'); }
    public function doLogin(){
        $usuario = $this->request->getPost('usuario');
        $clave = $this->request->getPost('clave');
        if (strtolower($usuario) == 'admin' && $clave == '123456') {
            session()->set('admin', $usuario);
            return redirect()->to('/dashboard');
        } else {
            return redirect()->to('/login')->with('error', 'Usuario o clave incorrecta');
        }
    }
    public function logout(){
        session()->destroy();
        return redirect()->to('/login');
    }
}