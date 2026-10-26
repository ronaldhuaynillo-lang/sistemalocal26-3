<!DOCTYPE html>
<html lang="es"><head><meta charset="UTF-8"><title>Login</title>
<style>
body{background:#f0f2f5;font-family:Arial;display:flex;justify-content:center;align-items:center;height:100vh;margin:0}
.card{background:#fff;padding:35px;border-radius:12px;box-shadow:0 4px 12px rgba(0,0,0,.1);width:350px}
h2{margin:0 0 15px 0} .error{color:#d93025;font-size:14px;margin-bottom:15px}
label{font-size:14px;display:block;margin:10px 0 5px 0}
input{width:100%;padding:10px;border:1px solid #333;box-sizing:border-box}
button{width:100%;margin-top:15px;background:#1e3a5f;color:#fff;border:none;padding:12px;border-radius:6px;cursor:pointer;font-weight:bold}
</style></head><body>
<div class="card"><h2>Iniciar sesión</h2>
<?php if(session()->getFlashdata('error')): ?><div class="error">Usuario o contraseña incorrectos.</div><?php endif; ?>
<form method="post" action="http://localhost/sistemalocal26-3/public/login">
<label>Usuario</label><input type="text" name="usuario" value="admin" required>
<label>Contraseña</label><input type="password" name="clave" value="123456" required>
<button type="submit">Ingresar</button></form></div></body></html>