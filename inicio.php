<?php 
include('conexion.php');
$con = connection();

$sql = "SELECT id_mindkids, fecha, avance, curso, comentarios FROM aerolab_mindkids";
$query = mysqli_query($con, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seguimiento de Alumnos</title>
    <link rel="stylesheet" href="login/css/estilos_inicio.css">
</head>
<body>
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
                <h2>AEROLAB MINDKIDS</h2>
                <!-- Botón para mostrar/ocultar el formulario -->
                <button id="toggleForm" class="toggle-btn">+</button>
            </div>
            <!-- El formulario se oculta inicialmente con 'display: none;' -->
            <form id="aerolabMindkids" action="insert_mindkids.php" method="POST">
                <input type="date" placeholder="fecha" name="fecha" required>
                <input type="text" placeholder="Avance" name="avance" required>
                <input type="text" placeholder="Curso" name="curso" required>
                <input type="text" placeholder="Comentarios" name="comentarios" required>
                <input type="submit" value="Enviar">
            </form>
        </div>

        <div class="table-container">
            <h2>Progresos</h2>
            <button id="toggleForm" class="toggle-btn">+</button>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Fecha</th>
                        <th>Avance</th>
                        <th>Curso</th>
                        <th>Comentarios</th>
                        <th>Editar</th>
                        <!--<th>Cambiar Estatus</th>-->
                    </tr>
                </thead>
                <tbody>
                    <?php while($row = mysqli_fetch_array($query)): ?>
                    <tr>
                        <td><?=$row['id_mindkids']?></td>
                        <td><?=$row['fecha']?></td>
                        <td><?=$row['avance']?></td>
                        <td><?=$row['curso']?></td>
                        <td><?=$row['comentarios']?></td>
                        <!--<td><=$row['estatus']?></td>-->
                        <td>
                            <form action="update_mindkids.php" method="POST">
                                <input type="hidden" name="id_mindkids" value="<?=$row['id_mindkids']?>">
                                <button type="submit">Editar</button>
                            </form>
                        </td>
                    </tr>
                    <?php endwhile ?>
                </tbody>
            </table>
        </div>
    </main>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Seleccionamos el botón y el formulario por su ID
            const toggleBtn = document.getElementById('toggleForm');
            const userForm = document.getElementById('aerolabMindkids'); // ID correcto del formulario

            // Agregamos un event listener para el botón
            toggleBtn.addEventListener('click', function() {
                // Alternamos la clase 'show' en el formulario
                userForm.classList.toggle('show');
                // Alternamos la clase 'active' en el botón
                toggleBtn.classList.toggle('active');
            });
        });
    </script>
</body>
</html>
