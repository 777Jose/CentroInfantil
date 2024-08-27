<?php
include_once("./../../config/conexion.php");

$id = $_GET['id'];

$sql = "DELETE FROM ninos WHERE id_ninos = '$id'";

$query = mysqli_query($conexion, $sql);

if($query === TRUE){
    header("location:./../../model/ninos.php");
}