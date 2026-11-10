<?php
namespace App\Models;
use CodeIgniter\Model;
class AlumnoModel extends Model
{
    protected $table = 'alumnos';
    protected $primaryKey = 'id';
    protected $allowedFields = ['dni','nombres','apellido_paterno','apellido_materno','correo','semestre'];
}