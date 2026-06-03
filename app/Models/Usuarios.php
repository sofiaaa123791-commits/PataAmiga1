<?php

namespace App\Models;

use CodeIgniter\Model;

class Usuarios extends Model
{
    protected $table            = 'usuarios';
    protected $primaryKey       = 'id_usuario';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';

    protected $allowedFields = [
        'nombre',
        'apellido',
        'tipo_documento',
        'numero_documento',
        'fecha_nacimiento',
        'genero',
        'telefono',
        'correo',
        'contrasena',
        'ciudad',
        'barrio',
        'direccion',
        'codigo_postal',
        'tipo_usuario',
        'fecha_registro',
        'foto_perfil',
        'estado_cuenta',
        'numero_reportes',
        'adopciones_realizadas',
        'participacion_brigadas',
        'ultima_conexion',
        'notificaciones',
        'comentarios'
    ];

    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    protected $validationRules = [
        'nombre'            => 'required|min_length[3]',
        'apellido'          => 'required|min_length[3]',
        'numero_documento'  => 'required|is_unique[usuarios.numero_documento]',
        'correo'            => 'required|valid_email|is_unique[usuarios.correo]',
        'contrasena'        => 'required|min_length[8]',
        'tipo_usuario'      => 'required'
    ];
}