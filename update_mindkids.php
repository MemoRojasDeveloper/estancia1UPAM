<?php
include('conexion.php');
$con = connection();

$id = $_POST['id_mindkids'];

$sql  = "SELECT id_mindkids, fecha, avance, curso, comentarios FROM aerolab_mindkids WHERE id_mindkids = '$id'";
$query = mysqli_query($con, $sql);
$row = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Registro</title>
    <link rel="stylesheet" href="login/css/estilos_inicio.css">

</head>
<body>
    <!-- Header con logo pequeño a la izquierda -->
    <header class="main-header">
        <div class="container-logo">
            <img class="logo" src="login/img/AEROBOT-COLOR.png" alt="Encabezado Principal">
        </div>
        <div class="cover-photo">
            <img src="login/img/aerobot.jpg" alt="Portada">
        </div>
    </header>

    <h2 id="titulo">AEROBOT PUEBLA</h2>

    <div class="container">
        <div class="form-container">
            <h2>Actualizar Registro</h2>
            <form action="edit_mindkids.php" method="POST">
                <input type="hidden" name="id_mindkids" value="<?= $row['id_mindkids'] ?>">

                <input type="date" name="fecha" value="<?= $row['fecha'] ?>" placeholder="Fecha" required>
                <input type="text" name="avance" value="<?= $row['avance'] ?>" placeholder="Avances" required>
                <input type="text" name="curso" value="<?= $row['curso'] ?>" placeholder="Curso" required>
                <input type="text" name="comentarios" value="<?= $row['comentarios'] ?>" placeholder="Comentarios" required>
                <!--<label>Estatus actual: <strong><= $row['estatus'] ?></strong></label>
                <select name="estatus" required>
                    <option value="Activo" <= $row['estatus'] == 'Activo' ? 'selected' : '' ?>>Activo</option>
                    <option value="Inactivo" <= $row['estatus'] == 'Inactivo' ? 'selected' : '' ?>>Inactivo</option>
                </select>-->

                <input type="submit" value="Actualizar Registros">
            </form>
        </div>
    </div>
</body>
</html>
