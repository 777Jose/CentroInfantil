<?php

include_once("./../../config/conexion.php");
$id = $_POST['id'];
$nombre_nino = $_POST['nombre_nino'];
$f_nacimiento = $_POST['f_nacimiento'];
$grupo = $_POST['grupo'];
$familiar = $_POST['familiar'];

$sql = "UPDATE ninos SET
                        nombre_nino='" . $nombre_nino . "',
                        fecha_nacimiento='" . $f_nacimiento . "',
                        grupo_id='" . $grupo . "',
                        familiar_id='" . $familiar . "' WHERE id_ninos = '" . $id . "'";

if ($resultado = $conexion->query($sql)) {
    header("location:./../../model/ninos.php");
} else {
    echo "Datos no enviados correctamente.";
}
