<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Panel principal</title>
</head>
<body>

    <h1>Bienvenido al sistema</h1>

    <h2>Usuario: <?= esc(session()->get('usuario')) ?></h2>

    <a href="<?= base_url('logout') ?>">Cerrar sesión</a>

</body>
</html>