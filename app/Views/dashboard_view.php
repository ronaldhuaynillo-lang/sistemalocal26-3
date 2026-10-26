<!DOCTYPE html>
<html>
<head>
    <title>Panel principal</title>
</head>
<body>
    <h1>Bienvenido al sistema</h1>
    <p>Usuario: <?= session()->get('admin') ?></p>

    <a href="<?= site_url('logout') ?>">
        <button>Cerrar sesión</button>
    </a>
</body>
</html>