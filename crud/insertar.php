<?php
include_once("./../config/conexion.php");
$nombre_usuario = $_POST['nombre_usuario'];
$email = $_POST['email'];
$password = $_POST['password'];
$rol = $_POST['rol'];
$sql = "INSERT INTO usuarios(nombre_usuarios, email, password, rol) VALUE('$nombre_usuario','$email','$password','$rol')";

$resultado = mysqli_query($conexion, $sql);

if ($resultado === TRUE) {
    header("location:./../model/usuarios.php");
} else {
    echo "DAtos no Insertados";
}
