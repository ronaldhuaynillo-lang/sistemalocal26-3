<!DOCTYPE html><html><head><title>Nuevo</title><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"></head><body class="p-4">
<h1>Nuevo Alumno</h1>
<form method="post" action="<?php echo base_url('alumnos/guardar'); ?>">
<div class="mb-3"><label>Nombre</label><input type="text" name="nombre" class="form-control" required></div>
<div class="mb-3"><label>DNI</label><input type="text" name="dni" class="form-control"></div>
<div class="mb-3"><label>Curso</label><input type="text" name="curso" class="form-control"></div>
<button class="btn btn-success">Guardar</button> <a href="<?php echo base_url('alumnos'); ?>" class="btn btn-secondary">Volver</a>
</form></body></html>