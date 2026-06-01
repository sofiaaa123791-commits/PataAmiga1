<?php

namespace App\Models;

use CodeIgniter\Model;

class Brigadas extends Model
{
    protected $table            = 'brigadas';
    protected $primaryKey       = 'id_brigada';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';

    protected $allowedFields = [
        'nombre_brigada',
        'tipo_brigada',
        'fecha_brigada',
        'hora_inicio',
        'hora_fin',
        'ciudad',
        'barrio',
        'direccion',
        'lugar_evento',
        'organizador',
        'veterinarios_participantes',
        'voluntarios',
        'capacidad_animales',
        'animales_vacunados',
        'animales_esterilizados',
        'animales_adoptados',
        'vacunas_aplicadas',
        'materiales_utilizados',
        'costo_evento',
        'patrocinadores',
        'descripcion_evento',
        'fotos_evento',
        'estado_evento',
        'observaciones'
    ];

    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    protected $validationRules = [
        'nombre_brigada' => 'required|min_length[3]',
        'tipo_brigada'   => 'required',
        'fecha_brigada'  => 'required',
        'ciudad'         => 'required',
        'organizador'    => 'required|min_length[3]'
    ];
}