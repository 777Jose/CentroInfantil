<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar Niños</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <h1 class="bg-black p-2 text-white text-center">EDITAR NIÑOS</h1>
    <br>
    <form class="container" action="../../crud/nino/editar.php" method="POST">
        <?php
        include_once('../../config/conexion.php');
        $sql = "SELECT * FROM ninos WHERE id_ninos=" . $_REQUEST['id'];
        $resultado = $conexion->query($sql);

        $row = $resultado->fetch_assoc();
        ?>
        <input type="Hidden" class="form-control" name="id" value="<?php echo $row['id_ninos'] ?>">

        <div class="mb-3">
            <label class="form-label">Nombre Completo</label>
            <input type="text" class="form-control" name="nombre_nino" value="<?php echo $row['nombre_nino'] ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Fecha_Nacimiento</label>
            <input type="date" class="form-control" name="f_nacimiento" value="<?php echo $row['fecha_nacimiento'] ?>">
        </div>
        <label for="">Grupo</label>
        <select class="form-select mb-3" aria-label="Default select example" name="grupo">
            <option selected disabled>Seleccione Grupo</option>
            <?php
                include("../../config/conexion.php");

                $sql1 = "SELECT * FROM grupos WHERE id_grupo=".$row['grupo_id'];
                $resultado1 = $conexion->query($sql1);

                $row1 = $resultado1->fetch_assoc();

                echo "<option selected value='".$row1['id_grupo']."'>".$row1['nombre_grupos']."</option>";

                $sql2 = "SELECT * FROM grupos";
                $resultado2 = $conexion->query($sql2);

                while ($fila =$resultado2->fetch_array()) {
                    echo "<option value='".$fila['id_grupo']."'>".$fila['nombre_grupos']."</option>";
                }

                ?>
        </select>
        <label for="">Familiar</label>
        <select class="form-select mb-3" aria-label="Default select example" name="familiar">
            <option selected disabled>Seleccione Familiar</option>
            <?php
                include("../../config/conexion.php");

                $sql3 = "SELECT * FROM usuarios WHERE id_usuario=".$row['familiar_id'];
                $resultado3 = $conexion->query($sql3);

                $row2 = $resultado3->fetch_assoc();

                echo "<option selected value='".$row2['id_usuario']."'>".$row2['nombre_usuarios']."</option>";

                $sql4 = "SELECT * FROM usuarios WHERE rol = 'familiar'";
                $resultado4 = $conexion->query($sql4);

                while ($fila1 =$resultado4->fetch_array()) {
                    echo "<option value='".$fila1['id_usuario']."'>".$fila1['nombre_usuarios']."</option>";
                }

                ?>
        </select>

        <div class="text-center">
            <button type="submit" class="btn btn-danger">EDITAR</button>
            <a href="../../model/usuarios.php" class="btn btn-dark">REGRESAR</a>
        </div>
        </div>

    </form>

</body>
