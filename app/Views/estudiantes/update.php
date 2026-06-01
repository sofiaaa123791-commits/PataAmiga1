<?= $this->extend('layouts/admin') ?>

<?= $this->section('title') ?>
<?= $title ?>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<div class="card">
    <div class="card-header">
        <h3 class="card-title">Actualizar Estudiante</h3>
    </div>

    <form action="<?= base_url('admin/estudiantes/update/' . $estudiante['id']) ?>" method="POST">
        <?= csrf_field() ?>

        <div class="card-body">

            <div class="row">

                <div class="col-md-4 mb-3">
                    <label>Tipo Documento</label>
                    <select name="tipo_documento" class="form-control">
                        <option value="CC" <?= old('tipo_documento', $estudiante['tipo_documento']) == 'CC' ? 'selected' : '' ?>>CC</option>
                        <option value="TI" <?= old('tipo_documento', $estudiante['tipo_documento']) == 'TI' ? 'selected' : '' ?>>TI</option>
                        <option value="CE" <?= old('tipo_documento', $estudiante['tipo_documento']) == 'CE' ? 'selected' : '' ?>>CE</option>
                    </select>
                </div>

                <div class="col-md-4 mb-3">
                    <label>Número Documento</label>
                    <input type="text"
                        name="numero_documento"
                        class="form-control"
                        value="<?= old('numero_documento', $estudiante['numero_documento']) ?>">
                </div>

                <div class="col-md-4 mb-3">
                    <label>Correo Electrónico</label>
                    <input type="email"
                        name="correo_electronico"
                        class="form-control"
                        value="<?= old('correo_electronico', $estudiante['correo_electronico']) ?>">
                </div>

                <div class="col-md-6 mb-3">
                    <label>Nombres</label>
                    <input type="text"
                        name="nombres"
                        class="form-control"
                        value="<?= old('nombres', $estudiante['nombres']) ?>">
                </div>

                <div class="col-md-6 mb-3">
                    <label>Apellidos</label>
                    <input type="text"
                        name="apellidos"
                        class="form-control"
                        value="<?= old('apellidos', $estudiante['apellidos']) ?>">
                </div>

                <div class="col-md-4 mb-3">
                    <label>Fecha Nacimiento</label>
                    <input type="date"
                        name="fecha_nacimiento"
                        class="form-control"
                        value="<?= old('fecha_nacimiento', $estudiante['fecha_nacimiento']) ?>">
                </div>

                <div class="col-md-4 mb-3">
                    <label>Género</label>
                    <select name="genero" class="form-control">
                        <option value="Masculino" <?= old('genero', $estudiante['genero']) == 'Masculino' ? 'selected' : '' ?>>Masculino</option>
                        <option value="Femenino" <?= old('genero', $estudiante['genero']) == 'Femenino' ? 'selected' : '' ?>>Femenino</option>
                    </select>
                </div>

                <div class="col-md-4 mb-3">
                    <label>Estrato</label>
                    <input type="number"
                        name="estrato"
                        class="form-control"
                        value="<?= old('estrato', $estudiante['estrato']) ?>">
                </div>

                <div class="col-md-6 mb-3">
                    <label>Teléfono</label>
                    <input type="text"
                        name="telefono"
                        class="form-control"
                        value="<?= old('telefono', $estudiante['telefono']) ?>">
                </div>

                <div class="col-md-6 mb-3">
                    <label>Nivel Educativo</label>
                    <input type="text"
                        name="nivel_educativo"
                        class="form-control"
                        value="<?= old('nivel_educativo', $estudiante['nivel_educativo']) ?>">
                </div>

                <div class="col-md-12 mb-3">
                    <label>Dirección</label>
                    <input type="text"
                        name="direccion"
                        class="form-control"
                        value="<?= old('direccion', $estudiante['direccion']) ?>">
                </div>

                <div class="col-md-12 mb-3">
                    <label>Programa de Interés</label>
                    <input type="text"
                        name="programa_interes"
                        class="form-control"
                        value="<?= old('programa_interes', $estudiante['programa_interes']) ?>">
                </div>

            </div>

        </div>

        <div class="card-footer">
            <button class="btn btn-primary">
                Guardar
            </button>

            <a href="<?= base_url('admin/estudiantes') ?>"
                class="btn btn-secondary">
                Cancelar
            </a>
        </div>

    </form>
</div>

<?= $this->endSection() ?>