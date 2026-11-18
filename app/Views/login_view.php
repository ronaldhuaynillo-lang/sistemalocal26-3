<!DOCTYPE html><html><head><meta charset="utf-8"><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"></head>
<body class="bg-light"><div class="container mt-5" style="max-width:400px"><div class="card p-4 shadow">
<h4 class="text-center mb-3">Iniciar sesión</h4>
<?php if(session()->getFlashdata('error')): ?><div class="alert alert-danger"><?= session()->getFlashdata('error') ?></div><?php endif; ?>
<form method="post" action="<?= base_url('login') ?>" autocomplete="off">
<label>Usuario</label><input type="text" name="usuario" class="form-control" value="admin" required>
<label class="mt-2">Contraseña</label><input type="password" name="contrasena" class="form-control" value="admin123" required>
<button class="btn btn-primary w-100 mt-3" style="background:#1e2d5a">Ingresar</button>
</form><small class="text-muted mt-2 d-block text-center">admin / admin123</small>
</div></div></body></html>