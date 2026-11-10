<!DOCTYPE html>
<html><head><meta charset="UTF-8"><title>Login</title></head><body>
<h2>Login - Sistema Local</h2>
<?php if(session()->getFlashdata('error')): ?>
<div style="color:red"><?= session()->getFlashdata('error') ?></div>
<?php endif; ?>
<form action="<?= site_url('login') ?>" method="post">
<?= csrf_field() ?>
Usuario: <input type="text" name="usuario" value="admin" required><br><br>
Clave: <input type="password" name="password" value="admin123" required><br><br>
<button type="submit">INGRESAR</button>
</form>
</body></html>