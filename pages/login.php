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
    <title>Login - Parfums</title>
</head>
<body>
    <?php require __DIR__ . '/../templates/header.php'; ?>
    <div class="login">
        <main class="form-signin w-100 m-auto">
            <form method="POST" action="../db/login_sql.php">
                <img class="mb-4" src="../img/pruebas.png" alt="" width="72" height="57">
                <h1 class="h3 mb-3 fw-normal">Inicio de sesión</h1>
                <div class="form-floating">
                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="txtnombre">
                    <label for="floatingInput">Correo electrónico</label>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="txtpasswd">
                    <label for="floatingPassword">Contraseña</label>
                </div>

                <div class="form-check text-start my-3">
                </div>
                <button class="btn btn-primary py-2 button-submit" type="submit">Iniciar sesión</button>
            </form>
        </main>
    </div>

    
    <?php require __DIR__ . '/../templates/footer.html'; ?>
    </body>
</html>