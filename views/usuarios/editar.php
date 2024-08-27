<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar Usuario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <h1 class="bg-black p-2 text-white text-center">EDITAR USUARIOS</h1>
    <br>
    <form class="container" action="../../crud/editar_u.php" method="POST">
        <?php
        include_once('../../config/conexion.php');
        $sql = "SELECT * FROM usuarios WHERE id_usuario=" . $_REQUEST['id'];
        $resultado = $conexion->query($sql);

        $row = $resultado->fetch_assoc();
        ?>
        <input type="Hidden" class="form-control" name="id" value="<?php echo $row['id_usuario'] ?>">

        <div class="mb-3">
            <label class="form-label">Nombre Completo</label>
            <input type="text" class="form-control" name="nombre_usuario" value="<?php echo $row['nombre_usuarios'] ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" class="form-control" name="email" value="<?php echo $row['email'] ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Contraseña</label>
            <input type="text" class="form-control" name="password" value="<?php echo $row['password'] ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Rol de Usuario</label>
            <input type="text" class="form-control" name="rol" value="<?php echo $row['rol'] ?>">
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-danger">EDITAR</button>
            <a href="../../model/usuarios.php" class="btn btn-dark">REGRESAR</a>
        </div>
        </div>

    </form>

</body>