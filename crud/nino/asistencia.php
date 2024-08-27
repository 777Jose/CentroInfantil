<?php
include_once("./../../config/conexion.php");

$nombre_nino = $_POST['asistencia'];
$h_ingreso = $_POST['h_ingreso'];
$asistencia = $_POST['r_asistencia'];

$sql = "INSERT INTO asistencia(nino_id, hora_ingreso, estado) 
VALUE('$nombre_nino', '$h_ingreso', '$asistencia')";

$resultado = mysqli_query($conexion, $sql);

if ($resultado === TRUE) {
    header("location:./../../index.php");
} else {
    echo "DAtos no Insertados";
}

