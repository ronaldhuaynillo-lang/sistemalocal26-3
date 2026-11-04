<!DOCTYPE html><html><head><meta charset="utf-8"><title>Crear</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head><body><div class="container mt-4" style="max-width:600px">
<h3>Nuevo Alumno</h3>
<form method="post" action="<?= base_url('alumnos/guardar') ?>">
<input class="form-control mb-2" name="dni" placeholder="DNI" required>
<input class="form-control mb-2" name="nombres" placeholder="Nombres" required>
<input class="form-control mb-2" name="apellido_paterno" placeholder="Apellido Paterno" required>
<input class="form-control mb-2" name="apellido_materno" placeholder="Apellido Materno" required>
<input class="form-control mb-2" name="correo" placeholder="Correo" required>
<input class="form-control mb-2" name="semestre" placeholder="Semestre" required>
<button class="btn btn-primary">Guardar</button>
</form></div></body></html>