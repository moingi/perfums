<?php
session_start();

// Captura la URL actual
$url_actual = (isset($_SERVER['HTTP_REFERER'])) ? $_SERVER['HTTP_REFERER'] : '/';

// Destruye la sesión
session_destroy();

// Redirige al usuario a la URL actual
header("Location: " . $url_actual);
exit();
?>
