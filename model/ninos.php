<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/style.css">

    <title>Niños</title>
</head>

<body>
    <div class="container"> <br>
        <h1 class="text-center">NIÑOS</h1> <br>
        <br>
        <div class="container">
            <a href="./../views/ninos/insertar.php" class="btn btn-success">Agregar Niño</a>
            <a href="../index.php" class="btn btn-dark">REGRESAR</a>
        </div>
        <!--<a href="model/usuarios.php" class="buton_insert">REGISTER</a>-->
        <!--<a href="model/ninos.php" class="buton_actualizar">LOGIN</a>-->



        <br>

    </div>



    <div class="container">

        <table class="table table-striped">
            <!-- PRINCIPAL-->
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">NOMBRE NIÑO</th>
                    <th scope="col">FECHA NACIMIENTO</th>
                    <th scope="col">GRUPO</th>
                    <th scope="col">FAMILIAR</th>
                    <th scope="col">ASISTENCIA</th>
                    <th scope="col">ACCIONES</th>
                </tr>
            </thead>

            <!-- CUERPO-->
            <tbody>
                <?php
                require("./../config/conexion.php");

                $sql = $conexion->query("SELECT n.id_ninos, n.nombre_nino, n.fecha_nacimiento, g.nombre_grupos, u.nombre_usuarios  FROM ninos n
                    JOIN usuarios u ON n.familiar_id = u.id_usuario
                    JOIN grupos g ON n.grupo_id = g.id_grupo;");

                while ($resultado = $sql->fetch_assoc()) {
                ?>
                    <tr>
                        <th scope="row"> <?php echo $resultado['id_ninos']; ?> </th>
                        <td> <?php echo $resultado['nombre_nino']; ?> </td>
                        <td> <?php echo $resultado['fecha_nacimiento']; ?> </td>
                        <td> <?php echo $resultado['nombre_grupos']; ?> </td>
                        <td> <?php echo $resultado['nombre_usuarios']; ?> </td>
                        <th>
                            <a href="./../views/ninos/asistencia.php?id=<?php echo $resultado['id_ninos'] ?>" class="btn btn-info"> Marcar </a>
                        </th>
                        <th>
                            <a href="./../views/ninos/editar.php?id=<?php echo $resultado['id_ninos'] ?>" class="btn btn-warning">Editar</a>
                            <a href="../crud/nino/eliminar.php ?id=<?php echo $resultado['id_ninos'] ?>" class="btn btn-danger">Eliminar</a>

                        </th>
                    </tr>

                <?php
                }
                ?>

            </tbody>
        </table>

    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>