<?php
include('conexion.php');
$con = connection();

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$apellidoPaterno = $_POST['apellidoPaterno'];
$apellidoMaterno = $_POST['apellidoMaterno'];
$estatus = $_POST['estatus'];

$sql = "UPDATE usuarios SET nombre='$nombre', apellidoPaterno='$apellidoPaterno', apellidoMaterno='$apellidoMaterno', 
estatus='$estatus' WHERE id='$id'";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: inicio.php");
};
?>