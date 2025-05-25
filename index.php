<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aerolab</title>

    <!-- Google Fonts + Font Awesome para íconos -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

    <!-- Enlace al archivo CSS externo -->
    <link rel="stylesheet" href="login/css/estilos.css">
</head>
<body>

    <div class="login-container">
        <i class="fas fa-user-circle"></i>
        <h2>Inicia sesión con tu cuenta</h2>
        <form method="post" action="">
            <?php
            include("conexion.php");
            include("controlador.php");
            ?>

            <div class="input-div">
                <div class="i">
                    <i class="fas fa-user"></i>
                </div>
                <input id="usuario" type="text" class="input" name="usuario" placeholder="Usuario" required>
            </div>

            <div class="input-div">
                <div class="i">
                    <i class="fas fa-lock"></i>
                </div>
                <input type="password" id="input" class="input" name="password" placeholder="Contraseña" required>
            </div>

            <input name="btningresar" class="btn" type="submit" value="LOG IN">
        </form>
    </div>
</body>
</html>
