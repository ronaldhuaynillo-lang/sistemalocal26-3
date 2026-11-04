<?php
namespace App\Controllers;
class Alumnos extends BaseController {
  public function crear(){
    if(!session()->get('logged_in')) return redirect()->to('/login');
    return view('alumnos_crear');
  }
  public function guardar(){
    \Config\Database::connect()->table('alumnos')->insert([
      'dni'=>$this->request->getPost('dni'),
      'nombres'=>$this->request->getPost('nombres'),
      'apellido_paterno'=>$this->request->getPost('apellido_paterno'),
      'apellido_materno'=>$this->request->getPost('apellido_materno'),
      'correo'=>$this->request->getPost('correo'),
      'semestre'=>$this->request->getPost('semestre'),
    ]);
    return redirect()->to('/dashboard');
  }
  public function eliminar($id){
    \Config\Database::connect()->table('alumnos')->where('id',$id)->delete();
    return redirect()->to('/dashboard');
  }
}