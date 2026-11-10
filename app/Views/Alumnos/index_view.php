<!DOCTYPE html>
<html lang="es"><head><meta charset="UTF-8"><title>Registro de alumnos</title>
<style>body{font-family:Arial;background:#f1f5f9;margin:0;padding:20px} .top{display:flex;justify-content:space-between;background:#fff;padding:15px;border-radius:8px} table{width:100%;border-collapse:collapse;background:#fff} th,td{border:1px solid #ddd;padding:8px} th{background:#0f172a;color:#fff}</style>
</head><body>
<div class="top"><div><h1>Registro de alumnos</h1><p>Sesión: <strong><?= esc(session()->get('usuario')) ?></strong> | <a href="<?= site_url('dashboard') ?>">Volver al panel</a></p></div>
<form action="<?= site_url('logout') ?>" method="post"><?= csrf_field() ?><button>Cerrar sesión</button></form></div>
<?php if (!empty($mensaje)): ?><p style="background:#dcfce7;padding:10px"><?= esc($mensaje) ?></p><?php endif; ?>
<p><a href="<?= site_url('alumnos/nuevo') ?>" style="background:#2563eb;color:#fff;padding:8px 12px;text-decoration:none;border-radius:4px">+ Registrar alumno</a></p>
<div class="table-wrap"><table><thead><tr><th>ID</th><th>DNI</th><th>Nombres</th><th>Apellidos</th><th>Correo</th><th>Semestre</th><th>Acciones</th></tr></thead>
<tbody>
<?php if (empty($alumnos)): ?><tr><td colspan="7">Todavia no hay alumnos registrados.</td></tr>
<?php else: foreach($alumnos as $a): ?>
<tr><td><?= $a['id'] ?></td><td><?= $a['dni'] ?></td><td><?= $a['nombres'] ?></td><td><?= $a['apellido_paterno'].' '.$a['apellido_materno'] ?></td><td><?= $a['correo'] ?></td><td><?= $a['semestre'] ?></td>
<td><a href="<?= site_url('alumnos/editar/'.$a['id']) ?>">Editar</a> | <a href="<?= site_url('alumnos/eliminar/'.$a['id']) ?>">Eliminar</a></td></tr>
<?php endforeach; endif; ?>
</tbody></table></div></body></html>