<?php
session_start();

// Captura la URL actual
$url_actual = (isset($_SERVER['HTTP_REFERER'])) ? $_SERVER['HTTP_REFERER'] : '/';

// Destruye la sesión
session_destroy();

// Redirige al usuario a la URL actual
echo'<script type="text/javascript">
        alert("Sesión cerrada correctamente");
        window.location.href = "/login";
    </script>';

exit();
?>
