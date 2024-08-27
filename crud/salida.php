<?php
include_once("./../config/conexion.php");
$id = $_GET['id_s'];

$sql = "UPDATE asistencia a
JOIN ninos n ON a.nino_id = n.id_ninos
SET a.hora_salida = localtime 
 WHERE id_ninos = '$id'";

$query = mysqli_query($conexion, $sql);

if($query === TRUE){
    header("location:./../index.php");
}