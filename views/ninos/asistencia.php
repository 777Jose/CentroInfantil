<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <h1 class="bg-black p-2 text-white text-center">Registro de Asistencia</h1>

    <br>
    <div class="container">
        <form action="../../crud/nino/asistencia.php" method="POST">


        <label for="">Nombre del Niño</label>
        <select class="form-select mb-3" name="asistencia">
            <option selected> Seleccionar Niño </option>
            <?php
            include("../../config/conexion.php");

            $sql = $conexion->query("SELECT * FROM ninos");
            while ($resultado = $sql->fetch_assoc()) {
                echo "<option value='" . $resultado['id_ninos'] . "'>" . $resultado['nombre_nino'] . "</option>";
            }

            ?>
        </select>
            <div class="mb-3">
                <label class="form-label">Hora de Ingreso</label>
                <input type="datetime-local" class="form-control" name="h_ingreso">
            </div>

            <label for="">Asistencia</label>
            <select class="form-select mb-3" name="r_asistencia">
                <option selected disabled>Seleccionar Asistencia</option>
                <option value="1">presente</option>
                <option value="2">ausente</option>
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