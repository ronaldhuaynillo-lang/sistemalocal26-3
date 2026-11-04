<?php
namespace App\Controllers;
class Dashboard extends BaseController {
  public function index(){
    if(!session()->get('logged_in')) return redirect()->to('/login');
    $db = \Config\Database::connect();
    $data['alumnos'] = $db->table('alumnos')->orderBy('id','DESC')->get()->getResult();
    return view('dashboard', $data);
  }
}