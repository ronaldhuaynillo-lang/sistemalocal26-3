<?php
namespace App\Controllers;
class Alumnos extends BaseController {
  public function index(){ 
    if(!session()->get('logged_in')) return redirect()->to('/login');
    $data['alumnos'] = \Config\Database::connect()->table('alumnos')->orderBy('id','DESC')->get()->getResult();
    return view('dashboard', $data);
  }
  public function nuevo(){ return view('alumnos_crear'); }
  public function crear(){
    \Config\Database::connect()->table('alumnos')->insert([
      'dni'=>$this->request->getPost('dni'),
      'nombres'=>$this->request->getPost('nombres'),
      'apellido_paterno'=>$this->request->getPost('apellido_paterno'),
      'apellido_materno'=>$this->request->getPost('apellido_materno'),
      'correo'=>$this->request->getPost('correo'),
      'semestre'=>$this->request->getPost('semestre'),
    ]);
    return redirect()->to('/alumnos');
  }
  public function eliminar($id){
    \Config\Database::connect()->table('alumnos')->where('id',$id)->delete();
    return redirect()->to('/alumnos');
  }
  public function editar($id){ /* pendiente */ }
  public function actualizar($id){ /* pendiente */ }
}