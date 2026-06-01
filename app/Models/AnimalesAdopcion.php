<?php

namespace App\Models;

use CodeIgniter\Model;

class AnimalesAdopcion extends Model
{
    protected $table            = 'animales_adopcion';
    protected $primaryKey       = 'id_animal';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';

    protected $allowedFields = [
        'nombre_animal',
        'especie',
        'raza',
        'sexo',
        'edad',
        'tamano',
        'color',
        'peso',
        'estado_salud',
        'vacunado',
        'esterilizado',
        'fecha_rescate',
        'lugar_rescate',
        'fundacion_rescate',
        'descripcion',
        'foto_principal',
        'fotos_adicionales',
        'estado_adopcion',
        'requisitos_adopcion',
        'fecha_publicacion',
        'numero_interesados',
        'contacto_adopcion',
        'seguimiento_adopcion'
    ];

    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    protected $validationRules = [
        'nombre_animal' => 'required|min_length[2]',
        'especie'       => 'required',
        'raza'          => 'required',
        'estado_salud'  => 'required',
        'estado_adopcion' => 'required'
    ];
}