<?php

session_start();

$connect = mysqli_connect("localhost","root","", "db_perfums");

if(!$connect){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $mail = $_POST["mail"];


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
    echo "Please submit the form.";
}

?>
