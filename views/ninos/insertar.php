<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Agregar Niño</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <h1 class="bg-black p-2 text-white text-center">Agregar Niño</h1>

    <br>
    <div class="container">
        <form action="../../crud/nino/insertar.php" method="POST">
            <div class="mb-3">
                <label class="form-label">Nombre Completo</label>
                <input type="text" class="form-control" name="nombre_nino">
            </div>
            <div class="mb-3">
                <label class="form-label">Fecha de Nacimiento</label>
                <input type="date" class="form-control" name="f_nacimiento">
            </div>
            <label for="">Grupo</label>
            <select class="form-select mb-3" name="grupo">
                <option selected> Seleccionar Grupo </option>
                <?php
                include("../../config/conexion.php");

                $sql = $conexion->query("SELECT * FROM grupos");
                while ($resultado = $sql->fetch_assoc()) {
                    echo "<option value='" . $resultado['id_grupo'] . "'>" . $resultado['nombre_grupos'] . "</option>";
                }

                ?>

            </select>
            <label for="">Familiar</label>
            <select class="form-select mb-3" name="familiar">
                <option selected> Seleccionar Familiar </option>
                <?php
                include("../../config/conexion.php");

                $sql = $conexion->query("SELECT * FROM usuarios WHERE rol = 'familiar'");
                while ($resultado = $sql->fetch_assoc()) {
                    echo "<option value='" . $resultado['id_usuario'] . "'>" . $resultado['nombre_usuarios'] . "</option>";
                }

                ?>

            </select>
            <div class="text-center">
                <button type="submit" class="btn btn-danger">Enviar</button>
                <a href="../../model/ninos.php" class="btn btn-dark">REGRESAR</a>
            </div>
    </div>

    </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>