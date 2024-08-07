<?php
// Obtiene la ruta desde el parámetro "route"
$route = isset($_GET['route']) ? $_GET['route'] : 'home';

// Divide la ruta en partes
$route_parts = explode('/', $route);

// Determina la ruta base (primera parte de la ruta)
$base_route = $route_parts[0];

// Rutas y archivos correspondientes
$routes = [
    'home' => 'pages/home.php',
    'login' => 'pages/login.php',
    'register' => 'pages/register.php',
    'politicas-de-privacidad' => 'pages/politicas de privacidad.php',
    'contact' => 'pages/contact.php',
];

// Verifica si la ruta existe en la lista de rutas permitidas
if (array_key_exists($base_route, $routes)) {
    // Incluye el archivo correspondiente
    include $routes[$base_route];
} else {
    // Muestra un mensaje de error si la ruta no es válida
    include '404.php';
}
?>
