<?php
include_once("./../config/conexion.php");
$id = $_GET['id'];

$sql = "DELETE FROM usuarios WHERE id_usuario = '$id'";

$query = mysqli_query($conexion, $sql);

if($query === TRUE){
    header("location:./../model/usuarios.php");
}