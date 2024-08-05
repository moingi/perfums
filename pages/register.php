<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/general.css">
    <link rel="stylesheet" href="../css/color.css">
    <title>Login - Parfums</title>
</head>
<body>
    <?php require __DIR__ . '/../templates/header.html'; ?>
    <div class="register">
        <form method="POST" action="../db/register_sql.php">
            <h2>Registro de usuario</h2>
                <div class="regpartes">
                    <div>
                        <div class="regentr">
                            <input type="text" name="nombre" placeholder="Nombre:" name="txtnombre" required>
                        </div>
                        <div class="regentr">
                            <input type="text" name="apell" placeholder="Apellidos:" name="txtnombre" required>
                        </div>
                        <div class="regentr">
                            <input type="date" name="fecha" placeholder="Fecha de nacimiento: (XX/XX/XXXX)" name="txtnombre" required>
                        </div>
                    </div>
                    <div>
                        <div class="regentr">
                            <input type="text" name="mail" placeholder="Correo electronico:" name="txtnombre" required>
                        </div>
                        <div class="regentr">
                            <input type="password" name="contrasena" placeholder="Contraseña:" name="txtnombre" required>
                        </div>
                        <div class="regentr regsub">
                            <input type="submit" value="Iniciar sesión">
                        </div>
                    </div>
                </div>
                <div class="reglog">
                    <p>Ya tienes cuenta? <a href="login">Inicia sesión</a></p>
                </div>
            </form>
    </div>
    <?php require __DIR__ . '/../templates/footer.html'; ?>
    </body>
</html>