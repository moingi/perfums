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
    <?php require __DIR__ . '/../templates/header.php'; ?>
    <div class="login">
        <form method="POST" action="../db/login_sql.php">
            <h2>Inicio de sesión</h2>
            <div>
                <div class="logentr">
                    <input type="text" placeholder="Correo electrónico:" name="txtnombre" required>
                </div>
                <div class="logentr">
                    <input type="password" placeholder="Contraseña:" name="txtpasswd" required>
                </div>
                <div class="logpoliticas">
                    <input class="abc" type="checkbox" required>
                    <p>He leído y acepto las <a href="/politicas-de-privacidad">Políticas de privacidad</a></p>
                </div>
                <input type="submit" value="Iniciar sesión">
                <div class="logreg">
                    <p>No tienes cuanta? <a href="register">Regístrate</a></p>
                </div>
            </div>
        </form>
    </div>
    <?php require __DIR__ . '/../templates/footer.html'; ?>
    </body>
</html>