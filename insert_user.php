<?php
include('conexion.php');
$con = connection();

$nombre = $_POST['nombre'];
$apellidoPaterno = $_POST['apellidoPaterno'];
$apellidoMaterno = $_POST['apellidoMaterno'];
$usuario = $_POST['usuario'];
$password = $_POST['password'];
$estatus = $_POST['estatus'];

$sql = "INSERT INTO usuarios (nombre, apellidoPaterno, apellidoMaterno, usuario, contrasena, estatus)
VALUES ('$nombre', '$apellidoPaterno', '$apellidoMaterno', '$usuario', '$password', '$estatus')";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: usuarios.php");
};
?>