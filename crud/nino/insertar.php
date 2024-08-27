<?php
include_once("./../../config/conexion.php");
$nombre_nino = $_POST['nombre_nino'];
$f_nacimiento = $_POST['f_nacimiento'];
$grupo = $_POST['grupo'];
$familiar = $_POST['familiar'];

$sql = "INSERT INTO ninos(nombre_nino, fecha_nacimiento, grupo_id, familiar_id) 
VALUE('$nombre_nino','$f_nacimiento','$grupo','$familiar')";

$resultado = mysqli_query($conexion, $sql);

if ($resultado === TRUE) {
    header("location:./../../model/ninos.php");
} else {
    echo "DAtos no Insertados";
}