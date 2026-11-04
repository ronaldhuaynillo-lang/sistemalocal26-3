<!DOCTYPE html><html><head><meta charset="utf-8"><title>Dashboard</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head><body><div class="container mt-4">
<h3>Alumnos <a href="<?= base_url('alumnos/crear') ?>" class="btn btn-success btn-sm">+ Nuevo</a> <a href="<?= base_url('logout') ?>" class="btn btn-danger btn-sm float-end">Salir</a></h3>
<table class="table table-bordered mt-3"><tr><th>DNI</th><th>Nombres</th><th>Apellidos</th><th>Correo</th><th>Semestre</th><th></th></tr>
<?php foreach($alumnos as $a): ?><tr><td><?= $a->dni ?></td><td><?= $a->nombres ?></td><td><?= $a->apellido_paterno.' '.$a->apellido_materno ?></td><td><?= $a->correo ?></td><td><?= $a->semestre ?></td><td><a href="<?= base_url('alumnos/eliminar/'.$a->id) ?>" class="btn btn-danger btn-sm">X</a></td></tr><?php endforeach; ?>
</table></div></body></html>