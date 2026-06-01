<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Estudiantes;

class EstudiantesController extends BaseController
{
    protected $estudianteModel;

    public function __construct()
    {
        $this->estudianteModel = new Estudiantes();
        helper(['form']);
    }

    /**
     * Listado
     */
    public function index()
    {
        return view('estudiantes/index', [
            'title'  => 'Listado de Estudiantes',
            'active' => 'estudiantes',
            'list'   => $this->estudianteModel->findAll()
        ]);
    }

    /**
     * Formulario Crear
     */
    public function create()
    {
        return view('estudiantes/create', [
            'title'      => 'Registrar Estudiante',
            'active'     => 'estudiantes',
            'validation' => \Config\Services::validation()
        ]);
    }

    /**
     * Guardar
     */
    public function store()
    {
        $rules = [
            'numero_documento'   => 'required|is_unique[estudiantes.numero_documento]',
            'nombres'            => 'required|min_length[3]',
            'apellidos'          => 'required|min_length[3]',
            'correo_electronico' => 'required|valid_email',
            'programa_interes'   => 'required',
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput();
        }

        $this->estudianteModel->save([
            'tipo_documento'    => $this->request->getPost('tipo_documento'),
            'numero_documento'  => $this->request->getPost('numero_documento'),
            'nombres'           => $this->request->getPost('nombres'),
            'apellidos'         => $this->request->getPost('apellidos'),
            'fecha_nacimiento'  => $this->request->getPost('fecha_nacimiento'),
            'genero'            => $this->request->getPost('genero'),
            'estrato'           => $this->request->getPost('estrato'),
            'correo_electronico'=> $this->request->getPost('correo_electronico'),
            'telefono'          => $this->request->getPost('telefono'),
            'direccion'         => $this->request->getPost('direccion'),
            'nivel_educativo'   => $this->request->getPost('nivel_educativo'),
            'programa_interes'  => $this->request->getPost('programa_interes'),
        ]);

        return redirect()->to('/admin/estudiantes')
            ->with('success', 'Estudiante registrado correctamente');
    }

    /**
     * Ver detalle
     */
    public function show($id)
    {
        $estudiante = $this->estudianteModel->find($id);

        if (!$estudiante) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        return view('estudiantes/view', [
            'title'      => 'Detalle del Estudiante',
            'active'     => 'estudiantes',
            'estudiante' => $estudiante
        ]);
    }

    /**
     * Formulario Editar
     */
    public function edit($id)
    {
        $estudiante = $this->estudianteModel->find($id);

        if (!$estudiante) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        return view('estudiantes/update', [
            'title'      => 'Editar Estudiante',
            'active'     => 'estudiantes',
            'estudiante' => $estudiante,
            'validation' => \Config\Services::validation()
        ]);
    }

    /**
     * Actualizar
     */
    public function update($id)
    {
        $estudiante = $this->estudianteModel->find($id);

        $ruleDocumento = 'required';

        if ($estudiante['numero_documento'] != $this->request->getPost('numero_documento')) {
            $ruleDocumento = 'required|is_unique[estudiantes.numero_documento]';
        }

        $rules = [
            'numero_documento'   => $ruleDocumento,
            'nombres'            => 'required|min_length[3]',
            'apellidos'          => 'required|min_length[3]',
            'correo_electronico' => 'required|valid_email',
            'programa_interes'   => 'required',
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput();
        }

        $this->estudianteModel->update($id, [
            'tipo_documento'    => $this->request->getPost('tipo_documento'),
            'numero_documento'  => $this->request->getPost('numero_documento'),
            'nombres'           => $this->request->getPost('nombres'),
            'apellidos'         => $this->request->getPost('apellidos'),
            'fecha_nacimiento'  => $this->request->getPost('fecha_nacimiento'),
            'genero'            => $this->request->getPost('genero'),
            'estrato'           => $this->request->getPost('estrato'),
            'correo_electronico'=> $this->request->getPost('correo_electronico'),
            'telefono'          => $this->request->getPost('telefono'),
            'direccion'         => $this->request->getPost('direccion'),
            'nivel_educativo'   => $this->request->getPost('nivel_educativo'),
            'programa_interes'  => $this->request->getPost('programa_interes'),
        ]);

        return redirect()->to('/admin/estudiantes')
            ->with('success', 'Estudiante actualizado correctamente');
    }

    /**
     * Eliminar
     */
    public function delete($id)
    {
        $this->estudianteModel->delete($id);

        return redirect()->to('/admin/estudiantes')
            ->with('success', 'Estudiante eliminado correctamente');
    }
}