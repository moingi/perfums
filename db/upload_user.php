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
        $mail = $_POST["mail"];

        
        $query = mysqli_query($connect,"SELECT * FROM users WHERE mail='".$mail."'");
        $nr = mysqli_num_rows($query);

        if($nr == 1){
            echo '<script type="text/javascript">
            alert("Este correo electronico ya esta en uso.");
            window.location.href = "/usuario";
          </script>';
        } else {
            $query = mysqli_query($connect,"UPDATE users SET nombre='".$nombre."', lastname='".$apellido."', mail='".$mail."', fecha_nacimiento='".$fecha_nac."' WHERE nombre='".$_SESSION['nombre']."'");

            $query2 = mysqli_query($connect,"SELECT * FROM users WHERE mail='".$mail."'");

            $fila = $query2->fetch_assoc();
            
            $_SESSION['nombre'] = $fila['nombre'];
            $_SESSION['apellido'] = $fila['lastname'];
            $_SESSION['email'] = $fila['mail'];
            $_SESSION['fecha'] = $fila['fecha_nacimiento'];

            header("Location: /usuario");
            exit();
        }

} else {
    echo "Please submit the form.";
}

?>
