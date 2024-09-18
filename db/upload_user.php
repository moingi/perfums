<?php

session_start();

$connect = mysqli_connect("localhost","root","", "db_perfums");

if(!$connect){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apell"];
        $fecha_nac = $_POST["fecha"];


            $query1 = mysqli_query($connect,"UPDATE users SET nombre='".$nombre."', lastname='".$apellido."', fecha_nacimiento='".$fecha_nac."' WHERE nombre='".$_SESSION['nombre']."'");

            $query2 = mysqli_query($connect,"SELECT * FROM users WHERE id='".$_SESSION['id']."'");

            $fila = $query2->fetch_assoc();
            
            $_SESSION['nombre'] = $fila['nombre'];
            $_SESSION['apellido'] = $fila['lastname'];
            $_SESSION['fecha'] = $fila['fecha_nacimiento'];

            echo '<script type="text/javascript">
            alert("Cambios de usuario realizados correctamente");
            window.location.href = "/usuario";
            </script>';

            exit();

} else {
    echo "Please submit the form.";
}

?>
