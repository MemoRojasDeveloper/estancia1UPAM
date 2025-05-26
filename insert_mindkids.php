<?php
include('conexion.php');
$con = connection();

$fecha = $_POST['fecha'];
$avance = $_POST['avance'];
$curso = $_POST['curso'];
$comentarios = $_POST['comentarios'];

$sql = "INSERT INTO aerolab_mindkids (fecha, avance, curso, comentarios)
VALUES ('$fecha', '$avance', '$curso', '$comentarios')";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: inicio.php");
};
?>