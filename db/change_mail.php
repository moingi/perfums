<?php

session_start();

require_once("connect.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $mail = $_POST["mail"];

        $query3 = mysqli_query($connect,"SELECT mail FROM users WHERE mail='".$mail."'");
        $nr = mysqli_num_rows($query3);

        if($nr < 1){
            
        

            $query1 = mysqli_query($connect,"UPDATE users SET mail='".$mail."' WHERE mail='".$_SESSION['mail']."'");

            $query2 = mysqli_query($connect,"SELECT * FROM users WHERE id='".$_SESSION['id']."'");

            $fila = $query2->fetch_assoc();
            
            $_SESSION['mail'] = $fila['mail'];

            echo '<script type="text/javascript">
            alert("Cambios de usuario realizados correctamente");
            window.location.href = "/usuario";
            </script>';

            exit();
            
        } else {
            echo '<script type="text/javascript">
            alert("Este correo ya esta en uso");
            window.location.href = "/usuario";
            </script>';
        }

} else {
    echo "Please submit the form.";
}

?>
