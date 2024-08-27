<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/style.css">

    <title>Usuarios</title>
</head>

<body>
    <div class="container"> <br>
        <h1 class="text-center">USUARIOS</h1> <br>
        <br>
        <div class="container">
            <a href="./../views/usuarios/insertar.php" class="btn btn-success">Agregar Usuarios</a>
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
                    <th scope="col">NOMBRE USUARIO</th>
                    <th scope="col">EMAIL</th>
                    <th scope="col">PASSWORD</th>
                    <th scope="col">ROL</th>
                    <th scope="col">FECHA</th>
                    <th scope="col">ACCIONES</th>
                </tr>
            </thead>

            <!-- CUERPO-->
            <tbody>
                <?php
                    require("./../config/conexion.php");

                    $sql = $conexion -> query("SELECT * FROM usuarios");

                    while ($resultado = $sql->fetch_assoc()) {
                ?>
                <tr>
                    <th scope="row"> <?php echo $resultado['id_usuario']; ?> </th>
                    <td> <?php echo $resultado['nombre_usuarios']; ?> </td>
                    <td> <?php echo $resultado['email']; ?> </td>
                    <td> <?php echo $resultado['password']; ?> </td>
                    <td> <?php echo $resultado['rol']; ?> </td>
                    <td> <?php echo $resultado['fecha_creacion']; ?> </td>
                    <th>
                    <a href="./../views/usuarios/editar.php?id=<?php echo $resultado['id_usuario']?>" class="btn btn-warning">Editar</a>
                    <a href="../crud/eliminar_u.php ?id=<?php echo $resultado['id_usuario']?>" class="btn btn-danger">Eliminar</a>
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