<?php

if (!empty($_POST["btningresar"])) {
    if(empty($_POST["usuario"]) and empty ($_POST["password"])) {
        echo '<div>LOS CAMPOS ESTAN VACIOS</div>';
    } else {
        $usuario=$_POST["usuario"];
        $contrasena=$_POST["password"];
        $connect=connection(); //llamdo a la funcion connection de conexion.php
        $sql=$connect->query("select usuario, contrasena from usuarios where usuario='$usuario' and contrasena='$contrasena'");
        if($datos=$sql->fetch_object()) {
            header("Location:inicio.php");
        } else {
            echo '<div>ACCESO DENEGADO</div>';
            echo '<div>Usuario o Contraseña Incorrectos</div>';
        }
    }
}
?>