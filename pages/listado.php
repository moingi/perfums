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
        <title>Productos - Lorem</title>
    </head>
    <body>

        <?php require __DIR__ . '/../templates/header.php';?>

        <div class="productos_sep">
            <h1>Productos</h1>
            <div class="d-flex">
                <div class="w-25 p-3 m-5 h-auto d-inline-block bg-secondary">
                    <h5>Búsqueda por filtros</h5>
                    <!-- Crear con AJAX (Preguntar a Roger) -->
                    <p><input type="checkbox">
                    Jean Paul Gaultier</p>
                </div>
                <div class="w-75 p-3 m-5 d-flex justify-content-center h-auto d-inline-block bg-primary row">
                    <?php
                        $categoria = $_GET["categoria"];

                        require __DIR__ . '/../db/connect.php';

                        $sql = "SELECT * FROM perfumes WHERE genero_perf = '".$_GET["categoria"]."'";

                        $resultado = $connect->query($sql);

                        $arrayResultado = array();

                        if ($resultado->num_rows > 0) {
                            while ($fila = $resultado->fetch_assoc()) {
                                // $arrayResultado[] = $fila;
                                ?>

                                    <a href="/producto?idperf=<?php echo $fila["id_perf"];?>" class="col-sm-3 pt-5 pb-4 m-3 text-center border rounded"><div>
                                        <img src="../img/productos/<?php echo $fila["imagen_perf"];?>" width="150 px">
                                        <h3><?php echo $fila["name_perf"];?></h3>
                                        <p><?php echo $fila["precio_perf"];?> €</p>
                                    </div></a>

                                <?php
                            }
                        } else {
                            echo "No se encontraron resultados.";
                        }
                        // foreach ($arrayResultado as $elemento) {
                        //     var_dump($elemento);
                        //     echo "<br><br>";
                        // };
                    ?>
                </div>
            </div>
        </div>
        <?php require __DIR__ . '/../templates/footer.html'; ?>
    </body>
</html>