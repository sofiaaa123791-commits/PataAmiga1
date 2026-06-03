<?php

namespace App\Models;

use CodeIgniter\Model;

class Reportes extends Model
{
    protected $table            = 'reportes';
    protected $primaryKey       = 'id_registro';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';

    protected $allowedFields = [
        'fecha_reporte',
        'hora_reporte',
        'nombre_reportante',
        'apellido_reportante',
        'telefono_contacto',
        'correo_electronico',
        'ciudad',
        'barrio',
        'direccion',
        'referencia_lugar',
        'latitud',
        'longitud',
        'especie',
        'raza',
        'color',
        'tamano',
        'estado_salud',
        'descripcion',
        'foto_animal',
        'nivel_urgencia',
        'estado_reporte',
        'organizacion_asignada',
        'fecha_atencion',
        'observaciones'
    ];

    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    protected $validationRules = [
        'nombre_reportante' => 'required|min_length[3]',
        'telefono_contacto' => 'required',
        'especie'           => 'required',
        'descripcion'       => 'required|min_length[10]',
        'nivel_urgencia'    => 'required',
        'estado_reporte'    => 'required'
    ];
}