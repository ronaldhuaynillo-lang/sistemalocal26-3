<?php
namespace App\Controllers;
class Auth extends BaseController {
  public function login(){ return view('login'); }
  public function doLogin(){
    $db = \Config\Database::connect();
    $row = $db->table('usuarios')->where('usuario', $this->request->getPost('usuario'))->get()->getRow();
    if($row && password_verify($this->request->getPost('password'), $row->password)){
      session()->set(['logged_in'=>true]);
      return redirect()->to('/dashboard');
    }
    return redirect()->to('/login')->with('error','Usuario o clave mal');
  }
  public function logout(){ session()->destroy(); return redirect()->to('/login'); }
}