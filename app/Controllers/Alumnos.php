<?php
namespace App\Controllers;
use App\Models\AlumnoModel;
class Alumnos extends BaseController
{
    public function index(){
        $model = new AlumnoModel();
        $alumnos = $model->findAll();
        return view('alumnos/index',['alumnos'=>$alumnos]);
    }
    public function crear(){ return view('alumnos/crear'); }
    public function create(){ return view('alumnos/crear'); }
    public function guardar(){
        $m = new AlumnoModel();
        $post = $this->request->getPost();
        $data = [
            'dni' => $post['dni'] ?? null,
            'nombres' => $post['nombre'] ?? null,
            'nombre' => $post['nombre'] ?? null,
            'semestre' => $post['curso'] ?? null,
            'apellido_paterno' => '',
            'apellido_materno' => '',
            'correo' => '',
        ];
        try {
            $m->save($data);
        } catch (\Exception $e) {
            // Si es DNI duplicado, actualiza
            if(strpos($e->getMessage(),'Duplicate')!==false){
                $m->where('dni',$data['dni'])->set($data)->update();
            } else {
                throw $e;
            }
        }
        return redirect()->to(base_url('alumnos'));
    }
    public function store(){ return $this->guardar(); }
    public function eliminar($id){ (new AlumnoModel())->delete($id); return redirect()->to(base_url('alumnos')); }
}