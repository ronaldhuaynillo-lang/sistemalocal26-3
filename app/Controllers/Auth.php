<?php
namespace App\Controllers;
class Auth extends BaseController {
  public function login(){ return view('login'); }
  public function validar(){
    $db = \Config\Database::connect();
    $user = $db->table('usuarios')->where('usuario', $this->request->getPost('usuario'))->get()->getRow();
    if($user && password_verify($this->request->getPost('password'), $user->password)){
      session()->set(['logged_in'=>true, 'usuario'=>$user->usuario]);
      return redirect()->to('/dashboard');
    }
    return redirect()->to('/login')->with('error','Usuario o clave incorrecta');
  }
  public function logout(){ session()->destroy(); return redirect()->to('/login'); }
}