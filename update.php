<?php
include('conexion.php');
$con = connection();

$id = $_POST['id'];

$sql  = "SELECT id, nombre, apellidoPaterno, apellidoMaterno, estatus FROM usuarios WHERE id = '$id'";
$query = mysqli_query($con, $sql);
$row = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Usuario</title>
    <link rel="stylesheet" href="login/css/estilos_update.css">
</head>
<body>
    <!-- Header con logo pequeño a la izquierda -->
    <header class="main-header">
        <img src="login/img/AEROBOT-COLOR.png" alt="Aerobot Logo">
    </header>

    <h2 id="titulo">AEROBOT PUEBLA</h2>

    <div class="container">
        <div class="form-container">
            <h2>Actualizar Usuario</h2>
            <form action="edit_user.php" method="POST">
                <input type="hidden" name="id" value="<?= $row['id'] ?>">

                <input type="text" name="nombre" value="<?= $row['nombre'] ?>" placeholder="Nombre(s)" required>
                <input type="text" name="apellidoPaterno" value="<?= $row['apellidoPaterno'] ?>" placeholder="Apellido Paterno" required>
                <input type="text" name="apellidoMaterno" value="<?= $row['apellidoMaterno'] ?>" placeholder="Apellido Materno" required>

                <label>Estatus actual: <strong><?= $row['estatus'] ?></strong></label>
                <select name="estatus" required>
                    <option value="Activo" <?= $row['estatus'] == 'Activo' ? 'selected' : '' ?>>Activo</option>
                    <option value="Inactivo" <?= $row['estatus'] == 'Inactivo' ? 'selected' : '' ?>>Inactivo</option>
                </select>

                <input type="submit" value="Actualizar Usuario">
            </form>
        </div>
    </div>
</body>
</html>
