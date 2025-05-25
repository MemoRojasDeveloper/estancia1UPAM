<?php
function connection(){
    $host = "localhost";
    $user="root";
    $pass="Gui113rm07";
    $bd="sistemadeseguimientoaerobot";

    $connect=mysqli_connect($host, $user, $pass);

    mysqli_select_db($connect, $bd);

    return $connect;
};
?>
