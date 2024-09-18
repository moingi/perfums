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
        <div class="regdis">
            <div class="infouser">
                <main class="m-auto">
                    <h1 class="h3 mb-3 fw-normal">Información del usuario</h1>
                    <h3>Datos personales</h3>
                    <form method="POST" action="../db/upload_user.php">
                        <div class="regdis">
                            <div class="form-floating">
                                <input type="text" name="nombre" class="form-control" id="floatingInput" placeholder="name@example.com" name="txtnombre" required>
                                <label for="floatingInput">
                                    <?php 
                                        echo $_SESSION['nombre'];
                                    ?>
                                </label>
                            </div>
                            <div class="form-floating">
                                <input type="text" name="apell" class="form-control" id="floatingPassword" placeholder="Password" name="txtpasswd" required>
                                <label for="floatingInput">
                                    <?php echo $_SESSION['apellido'];?>
                                </label>
                            </div>
                        </div>
                        <div class="form-floating">
                            <input type="date" name="fecha" class="form-control" id="floatingInput" name="txtnombre" required>
                            <label for="floatingPassword">Fecha de nacimiento:</label>
                        </div>
                        <button class="btn btn-primary py-2 button-submit" type="submit">Actualizar información</button>    
                    </form>
                    <br>
                    <h3>Correo electrónico</h3>
                    <form method="POST" action="../db/change_mail.php">
                        <div class="form-floating">
                            <input type="text" class="form-control" id="floatingPassword" placeholder="Password" name="mail" required>
                            <label for="floatingInput">
                                <?php 
                                    echo $_SESSION['mail'];
                                ?>
                            </label>
                        </div>
                        <button class="btn btn-primary py-2 button-submit" type="submit">Actualizar correo electrónico</button>   
                    </form>
                    <br>
                    <h3>Contraseña</h3>
                    <form method="POST" action="../db/change_passwd.php">
                        <div class="regdis">
                            <div class="form-floating">
                                <input type="password" class="form-control" id="floatingInput" placeholder="" name="oldpass" required>
                                <label for="floatingInput">Contraseña antigua</label>
                            </div>
                            <div class="form-floating">
                                <input type="password" class="form-control" id="floatingInput" placeholder="" name="newpass" required>
                                <label for="floatingInput">Contraseña nueva</label>
                            </div>
                        </div>
                        <button class="btn btn-primary py-2 button-submit" type="submit">Actualizar contraseña</button>    
                    </form>
                </main>
        
    
            </div>
        </div>
        <?php require __DIR__ . '/../templates/footer.html'; ?>
    </body>
</html>