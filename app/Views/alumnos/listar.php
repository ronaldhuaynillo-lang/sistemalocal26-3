<!DOCTYPE html>
<html><head><title>Alumnos</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head><body class="p-4">
<h1>Lista de Alumnos - SISTEMALOCAL26-3</h1>
<a href="<?php echo base_url('alumnos/crear'); ?>" class="btn btn-primary mb-3">Nuevo Alumno</a>
<a href="<?php echo base_url('logout'); ?>" class="btn btn-danger mb-3">Salir</a>
<table class="table table-bordered">
<tr><th>ID</th><th>Nombre</th><th>DNI</th><th>Curso</th><th>Acciones</th></tr>
<?php foreach($alumnos as $a): ?>
<tr>
<td><?= $a['id'] ?></td><td><?= $a['nombre'] ?></td><td><?= $a['dni'] ?? '' ?></td><td><?= $a['curso'] ?? '' ?></td>
<td><a href="<?= base_url('alumnos/editar/'.$a['id']) ?>" class="btn btn-sm btn-warning">Editar</a> <a href="<?= base_url('alumnos/eliminar/'.$a['id']) ?>" class="btn btn-sm btn-danger">Eliminar</a></td>
</tr>
<?php endforeach; ?>
</table>
</body></html>
