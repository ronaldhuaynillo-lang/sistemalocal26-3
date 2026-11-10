<!DOCTYPE html><html><head><meta charset="UTF-8"></head><body>
<h1>Bienvenido <?= esc(session()->get('usuario')) ?></h1>
<a href="<?= site_url('alumnos') ?>">Ver Alumnos</a><br><br>
<form action="<?= site_url('logout') ?>" method="post"><?= csrf_field() ?><button>Salir</button></form>
</body></html>