<!DOCTYPE html>
<html lang="es"><head><meta charset="UTF-8"><title>Registrar alumno</title>
<style>body{font-family:Arial;background:#f1f5f9;padding:30px} .card{background:#fff;max-width:600px;margin:auto;padding:25px;border-radius:10px} label{display:block;margin-top:12px;font-weight:bold} input{width:100%;padding:10px;margin-top:4px;border:1px solid #ccc;border-radius:5px} button{margin-top:20px;background:#2563eb;color:#fff;padding:10px 20px;border:none;border-radius:5px}</style>
</head><body>
<div class="card">
<h1>Registrar alumno</h1>
<?php if($e=session()->getFlashdata('errores')): foreach($e as $er): ?><p style="color:red"><?= $er ?></p><?php endforeach; endif; ?>
<form action="<?= site_url($accion) ?>" method="post">
<?= csrf_field() ?>
<label>DNI</label><input type="text" name="dni" value="<?= old('dni', $alumno['dni'] ?? '') ?>">
<label>Nombres</label><input type="text" name="nombres" value="<?= old('nombres', $alumno['nombres'] ?? '') ?>">
<label>Apellido paterno</label><input type="text" name="apellido_paterno" value="<?= old('apellido_paterno', $alumno['apellido_paterno'] ?? '') ?>">
<label>Apellido materno</label><input type="text" name="apellido_materno" value="<?= old('apellido_materno', $alumno['apellido_materno'] ?? '') ?>">
<label>Correo</label><input type="email" name="correo" value="<?= old('correo', $alumno['correo'] ?? '') ?>">
<label>Semestre</label><input type="number" name="semestre" value="<?= old('semestre', $alumno['semestre'] ?? '') ?>">
<button type="submit">Guardar</button>
<a href="<?= site_url('alumnos') ?>">Cancelar</a>
</form></div></body></html>