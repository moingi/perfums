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
    <title>Registro - Parfums</title>
</head>
<body>
    <?php require __DIR__ . '/../templates/header.php'; ?>
    <div class="register">
        <!-- <form method="POST" action="../db/register_sql.php">
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
                            <input type="submit" value="Registrar usuario">
                        </div>
                    </div>
                </div>
                <div class="reglog">
                    <p>Ya tienes cuenta? <a href="login">Inicia sesión</a></p>
                </div>
            </form> -->
    
            <main class="form-signin m-auto">
            
                <form method="POST" action="../db/register_sql.php">
                    <img class="mb-4" src="../img/pruebas.png" alt="" width="72" height="57">
                    <h1 class="h3 mb-3 fw-normal">Inicio de sesión</h1>
                    <div class="regdis">
                        <div class="form-floating">
                            <input type="text" name="nombre" class="form-control" id="floatingInput" placeholder="name@example.com" name="txtnombre" required>
                            <label for="floatingInput">Nombre</label>
                        </div>
                        <div class="form-floating">
                            <input type="password" name="apell" class="form-control" id="floatingPassword" placeholder="Password" name="txtpasswd" required>
                            <label for="floatingPassword">Apellido</label>
                        </div>
                    </div>
                    <div class="form-floating">
                        <input type="date" name="fecha" class="form-control" id="floatingInput" name="txtnombre" required>
                        <label for="floatingPassword">Fecha de nacimiento:</label>
                        </div>
                
                    <div class="form-floating">
                        <input type="text" class="form-control" id="floatingPassword" placeholder="Password" name="mail" required>
                        <label for="floatingPassword">Correo electronico</label>
                    </div>
                
                    <div class="regdis">
                        <div class="form-floating">
                            <input type="password" class="form-control" id="floatingInput" placeholder="name@example.com" name="contrasena" required>
                            <label for="floatingInput">Contraseña</label>
                        </div>
                    </div>
                    <div class="form-check text-start my-3">
                    </div>
                    <button class="btn btn-primary py-2 button-submit" type="submit">Registrar usuario</button>    
                </form>
            </main>
    
    
        </div>


    <?php require __DIR__ . '/../templates/footer.html'; ?>
    </body>
</html>