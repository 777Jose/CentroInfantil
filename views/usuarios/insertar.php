<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Agregar Usuario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <h1 class="bg-black p-2 text-white text-center">Agregar Usuario</h1>
    
    <br>
    <div class="container">
        <form action="../../crud/insertar.php" method="POST">
            <div class="mb-3">
                <label class="form-label">Nombre Completo</label>
                <input type="text" class="form-control" name="nombre_usuario">
            </div>
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" class="form-control" name="email">
            </div>
            <div class="mb-3">
                <label class="form-label">Contraseña</label>
                <input type="password" class="form-control" name="password">
            </div>
            <!-- <div class="mb-3">
                <label class="form-label">Rol de Usuario</label>
                <input type="text" class="form-control" name="rol">
            </div> -->
            <label for="">Rol de Usuarios</label>
            <select class="form-select mb-3" name="rol">
                <option selected disabled>Selecionar Usuario</option>
                <option value="1">Administrador</option>
                <option value="2">Educador</option>
                <option value="3">Familiar</option>
            </select>
            <div class="text-center">
                <button type="submit" class="btn btn-danger">Enviar</button>
                <a href="../../model/usuarios.php" class="btn btn-dark">REGRESAR</a>
            </div>
    </div>

    </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>