<?php

include_once("./../config/conexion.php");
$id = $_POST['id'];
$nombre_usuario = $_POST['nombre_usuario'];
$email = $_POST['email'];
$password = $_POST['password'];
$rol = $_POST['rol'];

$sql ="UPDATE usuarios SET
                        nombre_usuarios='".$nombre_usuario."',
                        email='".$email."',
                        password='".$password."',
                        rol='".$rol."' WHERE id_usuario = '".$id."'";

if ($resultado = $conexion ->query($sql)) {
    header("location:./../model/usuarios.php");
} else {
    echo "Datos no enviados correctamente.";
}