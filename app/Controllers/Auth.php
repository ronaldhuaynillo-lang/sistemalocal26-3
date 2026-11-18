<?php
namespace App\Controllers;
class Auth extends BaseController
{
    public function index(){
        if(session()->get('logged_in')) return redirect()->to(base_url('alumnos'));
        return view('login_view');
    }
    public function login(){
        $u = strtolower(trim((string)$this->request->getPost('usuario')));
        $p = trim((string)($this->request->getPost('contrasena') ?? $this->request->getPost('clave') ?? $this->request->getPost('password') ?? ''));
        if($u === 'admin' && $p === 'admin123'){
            session()->set(['logged_in'=>true,'usuario'=>'admin']);
            return redirect()->to(base_url('alumnos'));
        }
        return redirect()->to(base_url('login'))->with('error','Usuario o contraseña incorrectos');
    }
    public function logout(){
        session()->destroy();
        return redirect()->to(base_url('login'));
    }
}