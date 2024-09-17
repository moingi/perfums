<?php

session_start();

$connect = mysqli_connect("localhost","root","", "db_perfums");

if(!$connect){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    //echo "<pre>";
    //var_dump($_POST);
    //echo "</pre>";
    //die();

    if (isset($_POST["txtnombre"]) && isset($_POST["txtpasswd"])) {
        $mail = $_POST["txtnombre"];
        $pass = $_POST["txtpasswd"];

        $query = mysqli_query($connect,"SELECT * FROM users WHERE mail='".$mail."' and passwd='".$pass."'");
        $nr = mysqli_num_rows($query);

        if($nr == 1){

            $fila = $query->fetch_assoc();
            
            $_SESSION['nombre'] = $fila['nombre'];
            $_SESSION['apellido'] = $fila['lastname'];
            $_SESSION['mail'] = $fila['mail'];
            $_SESSION['fecha'] = $fila['fecha_nacimiento'];

            echo '<script type="text/javascript">
            alert("Inicio de sesión exitoso");
            window.location.href = "/";
            </script>';
            exit();
        } else {
            echo '<script type="text/javascript">
            alert("Usuario o contraseña incorrectos");
            window.location.href = "/login";
            </script>';
        }
    }

} else {
    echo "Please submit the form.";
}

?>
