<?= $this->extend('layouts/admin') ?>

<?= $this->section('title') ?>
<?= $title ?>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<div class="card">
    <div class="card-header">
        <h3 class="card-title">
            Detalle del Estudiante
        </h3>
    </div>

    <div class="card-body">

        <table class="table table-bordered">

            <tr>
                <th>Nombres</th>
                <td><?= $estudiante['nombres'] ?></td>
            </tr>

            <tr>
                <th>Apellidos</th>
                <td><?= $estudiante['apellidos'] ?></td>
            </tr>

            <tr>
                <th>Documento</th>
                <td><?= $estudiante['numero_documento'] ?></td>
            </tr>

            <tr>
                <th>Correo</th>
                <td><?= $estudiante['correo_electronico'] ?></td>
            </tr>

            <tr>
                <th>Programa</th>
                <td><?= $estudiante['programa_interes'] ?></td>
            </tr>

        </table>

    </div>

    <div class="card-footer">
        <a href="<?= base_url('admin/estudiantes') ?>"
           class="btn btn-secondary">
            Volver
        </a>
    </div>
</div>

<?= $this->endSection() ?>