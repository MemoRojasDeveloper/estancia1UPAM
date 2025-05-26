<?php
include('conexion.php');
$con = connection();

$id = $_POST['id_mindkids'];
$fecha = $_POST['fecha'];
$avance = $_POST['avance'];
$curso = $_POST['curso'];
$comentarios = $_POST['comentarios'];

$sql = "UPDATE aerolab_mindkids SET fecha='$fecha', avance='$avance', curso='$curso', comentarios='$comentarios' 
WHERE id_mindkids='$id'";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: inicio.php");
};
?>