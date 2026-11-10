<?php
namespace App\Controllers;
use App\Models\AlumnoModel;
class Alumnos extends BaseController
{
    public function index()
    {
        if (session()->get('autenticado') !== true) return redirect()->to(site_url('login'));
        $model = new AlumnoModel();
        $data['alumnos'] = $model->findAll();
        return view('Alumnos/index_view', $data);
    }
    public function nuevo()
    {
        return view('Alumnos/ford_view', ['alumno' => null, 'accion' => 'alumnos/crear']);
    }
    public function crear()
    {
        $model = new AlumnoModel();
        $model->insert($this->request->getPost(['dni','nombres','apellido_paterno','apellido_materno','correo','semestre']));
        return redirect()->to(site_url('alumnos'));
    }
    public function editar($id)
    {
        $model = new AlumnoModel();
        return view('Alumnos/ford_view', ['alumno' => $model->find($id), 'accion' => 'alumnos/actualizar/'.$id]);
    }
    public function actualizar($id)
    {
        $model = new AlumnoModel();
        $model->update($id, $this->request->getPost(['dni','nombres','apellido_paterno','apellido_materno','correo','semestre']));
        return redirect()->to(site_url('alumnos'));
    }
    public function eliminar($id)
    {
        $model = new AlumnoModel();
        $model->delete($id);
        return redirect()->to(site_url('alumnos'));
    }
}