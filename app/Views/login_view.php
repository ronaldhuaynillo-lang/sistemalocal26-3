<!DOCTYPE html><html><head><meta charset="utf-8"><title>Login</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head><body class="bg-light">
<div class="container mt-5" style="max-width:400px">
<h3>Login</h3>
<?php if(session()->getFlashdata('error')): ?><div class="alert alert-danger"><?= session()->getFlashdata('error') ?></div><?php endif; ?>
<form method="post" action="<?= base_url('login') ?>">
<input class="form-control mb-2" name="usuario" placeholder="admin" required>
<input class="form-control mb-2" type="password" name="password" placeholder="password" required>
<button class="btn btn-primary w-100">Entrar</button>
</form></div></body></html>