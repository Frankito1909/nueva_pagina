<?php
namespace App\Models;
use CodeIgniter\Model;
Class usuario_Model extends Model
{
protected $table = 'docentes'; //nombre de la tabla
protected $primaryKey = 'id_docente'; //identificador de la tabla
protected $allowedFields = ['apellido', 'nombre', 'dni', 'correo',
'contraseña']; //todos los campos de la tabla
}