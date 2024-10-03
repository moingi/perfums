<?php

$connect = mysqli_connect("localhost","root","", "db_perfums");

if(!$connect){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apell"];
        $fecha_nac = $_POST["fecha"];
        $mail = $_POST["mail"];
        $pass = $_POST["contrasena"];

        
        $query = mysqli_query($connect,"SELECT * FROM users WHERE mail='".$mail."'");
        $nr = mysqli_num_rows($query);

        if($nr == 1){
            echo '<script type="text/javascript">
            alert("Este correo electronico ya esta en uso.");
            window.location.href = "/register";
          </script>';
        } else {
            $query = mysqli_query($connect,"INSERT INTO users (nombre, lastname, mail, passwd, fecha_nacimiento) VALUES ('".$nombre."','".$apellido."','".$mail."','".$pass."','".$fecha_nac."')");

            echo '<script type="text/javascript">
                    alert("Usuario registrado..");
                    window.location.href = "/login";
                </script>';

            exit();
        }

} else {
    echo "Please submit the form.";
}

?>