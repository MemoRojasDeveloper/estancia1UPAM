<?php 
include('conexion.php');
$con = connection();

$sql = "SELECT id, nombre, apellidoPaterno, apellidoMaterno, usuario, estatus FROM usuarios";
$query = mysqli_query($con, $sql);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seguimiento de Alumnos</title>
    <link rel="stylesheet" href="login/css/estilos_usuarios.css">
</head>
<body>
    <!-- Header con imagen -->
    <header class="main-header">
        <div class="container-logo">
        <img class="logo" src="login/img/AEROBOT-COLOR.png" alt="Encabezado Principal">
        </div>
    <div class="cover-photo">
        <img src="login/img/aerobot.jpg" alt="Portada">
    </div>
    </header>

    <h2 id="titulo">AEROBOT PUEBLA</h2>

    <main class="container">
        <div class="form-container">
            <div class="form-header">
                <h2>Insertar Usuario</h2>
                <button id="toggleForm" class="toggle-btn">+</button>
            </div>
            <form id="userForm" action="insert_user.php" method="POST" style="display: none;">
                <input type="text" placeholder="Nombre(s)" name="nombre" required>
                <input type="text" placeholder="Apellido Paterno" name="apellidoPaterno" required>
                <input type="text" placeholder="Apellido Materno" name="apellidoMaterno" required>
                <input type="text" placeholder="Nombre de Usuario" name="usuario" required>
                <input type="password" placeholder="Contraseña" name="password" required>
                <select name="estatus" required>
                    <option value="Activo">Activo</option>
                    <option value="Inactivo">Inactivo</option>
                </select>
                <input type="submit" value="Agregar Usuario">
            </form>
        </div>

        <div class="table-container">
            <h2>Usuarios Registrados</h2>
            <button id="toggleForm1" class="toggle-btn">+</button>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre(s)</th>
                        <th>Apellido Paterno</th>
                        <th>Apellido Materno</th>
                        <th>Usuario</th>
                        <th>Estatus</th>
                        <th>Editar</th>
                        <!--<th>Cambiar Estatus</th>-->
                    </tr>
                </thead>
                <tbody>
                    <?php while($row = mysqli_fetch_array($query)): ?>
                    <tr>
                        <td><?=$row['id']?></td>
                        <td><?=$row['nombre']?></td>
                        <td><?=$row['apellidoPaterno']?></td>
                        <td><?=$row['apellidoMaterno']?></td>
                        <td><?=$row['usuario']?></td>
                        <td><?=$row['estatus']?></td>
                        <td>
                            <form action="update.php" method="POST">
                                <input type="hidden" name="id" value="<?=$row['id']?>">
                                <button type="submit">Editar</button>
                            </form>
                        </td>
                        <!--<td><a href="#">Cambiar Estatus</a></td>-->
                    </tr>
                    <?php endwhile ?>
                </tbody>
            </table>
        </div>
    </main>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
        const toggleBtn = document.getElementById('toggleForm');
        const userForm = document.getElementById('userForm');
        
        toggleBtn.addEventListener('click', function() {
            userForm.classList.toggle('show');
            toggleBtn.classList.toggle('active');
        });
    });
    </script>
</body>
</html>
