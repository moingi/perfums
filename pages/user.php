<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/general.css">
    <link rel="stylesheet" href="../css/color.css">
    <title>Usuario - Parfums</title>
</head>
    <body>
        <?php require __DIR__ . '/../templates/header.php'; ?>
        <div class="infouser">
            <div>
                <h2>Información del usuario</h2>
                <form method="POST" action="../db/upload_user.php">
                    <div>
                        <h3>Nombre y apellido</h3>
                        <div>
                            <?php
                                echo'<input type="text" placeholder="'.$_SESSION['nombre'].'" name="nombre" required>';
                                echo'<input type="text" placeholder="'.$_SESSION['apellido'].'" name="apell" required>';
                            ?>
                        </div>
                    </div>
                    <div>
                        <h3>Correo electronico</h3>
                        <div>
                            <?php
                                echo'<input type="text" placeholder="'.$_SESSION['email'].'" name="mail" required>';
                            ?>
                        </div>
                    </div>
                    <div>
                        <h3>Fecha de nacimiento</h3>
                        <div>
                            <?php
                                echo'<input type="date" placeholder="'.$_SESSION['fecha'].'" name="fecha" required>';
                            ?>                        
                        </div>
                    </div>
                    <input type="submit" value="Guardar cambios">
                </form>
                <div class="espacioforms"></div>
                <div>
                    <h3>Cambiar contraseña</h3>
                    <form method="POST" action="../db/change_passwd.php">
                        <div>
                            <input type="password" placeholder="Contraseña antigua" name="oldpass">
                            <input type="password" placeholder="Contraseña nueva" name="newpass">
                        </div>
                        <input type="submit" value="Guardar cambios">
                    </form>
                    </div>
            </div>
        </div>
        <?php require __DIR__ . '/../templates/footer.html'; ?>
    </body>
</html>