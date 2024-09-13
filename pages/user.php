<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/general.css">
    <link rel="stylesheet" href="../css/color.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Usuario - Parfums</title>
</head>
    <body>
        <?php require __DIR__ . '/../templates/header.php'; ?>
        <div class="infouser">
            <div>
                <h2>Información del usuario</h2>
                <form class="inpuser" method="POST" action="../db/upload_user.php">
                    <div>
                        <h3>Nombre y apellido</h3>
                        <div>
                            <?php
                                echo'<input class="inpusers" type="text" placeholder="'.$_SESSION['nombre'].'" name="nombre" required>';
                                echo'<input class="inpusers" type="text" placeholder="'.$_SESSION['apellido'].'" name="apell" required>';
                            ?>
                        </div>
                    </div>
                    <div>
                        <h3>Correo electronico</h3>
                        <div>
                            <?php
                                echo'<input class="inpusers" type="text" placeholder="'.$_SESSION['email'].'" name="mail" required>';
                            ?>
                        </div>
                    </div>
                    <div>
                        <h3>Fecha de nacimiento</h3>
                        <div>
                            <?php
                                echo'<input class="inpusers" type="date" placeholder="'.$_SESSION['fecha'].'" name="fecha" required>';
                            ?>                        
                        </div>
                    </div>
                    <input type="submit" value="Guardar cambios">
                </form>
                <div class="espacioforms"></div>
                <div>
                    <h3>Cambiar contraseña</h3>
                    <form class="inpuser" method="POST" action="../db/change_passwd.php">
                        <div>
                            <input class="inpusers" type="password" placeholder="Contraseña antigua" name="oldpass" required>
                            <input class="inpusers" type="password" placeholder="Contraseña nueva" name="newpass" required>
                        </div>
                        <input type="submit" value="Guardar cambios">
                    </form>
                </div>
                <div class="espacioforms"></div>
                <div>
                    <form method="POST" action="../db/logout.php">
                        <input class="out" type="submit" value="Cerrar sessión">
                    </form>
                </div>
            </div>
        </div>
        <?php require __DIR__ . '/../templates/footer.html'; ?>
    </body>
</html>