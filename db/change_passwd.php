<?php

session_start();

require_once("connect.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $oldpass = $_POST["oldpass"];
        $newpass = $_POST["newpass"];

        
        $query = mysqli_query($connect,"SELECT * FROM users WHERE passwd='".$oldpass."'");
        $nr = mysqli_num_rows($query);

        if($nr == 0){
            echo '<script type="text/javascript">
            alert("La contraseña antigua no es correcta");
            window.location.href = "/usuario";
          </script>';
        } else {
            $query = mysqli_query($connect,"UPDATE users SET passwd='".$newpass."' WHERE nombre='".$_SESSION['nombre']."'");

            echo '<script type="text/javascript">
                alert("Cambio de contraseña realizado correctamente");
                window.location.href = "/usuario";
            </script>';
            exit();
        }

}

?>
