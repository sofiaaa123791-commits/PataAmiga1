<?= $this->extend('layouts/admin') ?>

<?= $this->section('title') ?>
<?= $title ?>
<?= $this->endSection() ?>

<?= $this->section('breadcrumb') ?>
<li class="breadcrumb-item"><a href="#">Home</a></li>
<li class="breadcrumb-item active">Estudiantes</li>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<div class="card">
    <div class="card-header d-flex justify-content-between">
        <h3 class="card-title">Listado de Estudiantes</h3>

        <a href="<?= base_url('admin/estudiantes/create') ?>" class="btn btn-success">
            Nuevo Estudiante
        </a>
    </div>

    <div class="card-body">

        <?php if(session()->getFlashdata('success')): ?>
            <div class="alert alert-success">
                <?= session()->getFlashdata('success') ?>
            </div>
        <?php endif; ?>

        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Documento</th>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>Email</th>
                    <th>Programa</th>
                    <th width="220">Acciones</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach($list as $item): ?>
                    <tr>
                        <td><?= $item['id'] ?></td>
                        <td><?= $item['numero_documento'] ?></td>
                        <td><?= $item['nombres'] ?></td>
                        <td><?= $item['apellidos'] ?></td>
                        <td><?= $item['correo_electronico'] ?></td>
                        <td><?= $item['programa_interes'] ?></td>

                        <td>
                            <a href="<?= base_url('admin/estudiantes/show/'.$item['id']) ?>"
                               class="btn btn-info btn-sm">
                                Ver
                            </a>

                            <a href="<?= base_url('admin/estudiantes/edit/'.$item['id']) ?>"
                               class="btn btn-warning btn-sm">
                                Editar
                            </a>

                            <a href="<?= base_url('admin/estudiantes/delete/'.$item['id']) ?>"
                               class="btn btn-danger btn-sm"
                               onclick="return confirm('¿Desea eliminar este registro?')">
                                Eliminar
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>

        </table>
    </div>
</div>

<?= $this->endSection() ?>