<?php
    session_start();
?>

<header>
    <div class="headprin">
        <div class="one">
            <!-- Imagen pagina -->
            <a href="/"><img src="../img/pruebas.png" alt="imagen prueba"></a>
        </div>
        <div class="form">
            <input id="searchButton" class="subfoto" type="image" src="../img/header/lupa_black.png"/>
            <form id="searchContainer">
                <input class="busca" type="text"/>
                <input class="sub" type="image" src="../img/header/flecha_derecha.png">
            </form>
            
            <script src="../scripts/buscador.js"></script>

        </div>
        <div class="loginbot">
            <?php
            if (isset($_SESSION['nombre'])) {
                // Si el usuario ha iniciado sesión, muestra su nombre
                echo '<a href="/usuario">'. $_SESSION['nombre'].' '.$_SESSION['apellido'].'</a>';
                echo '<a href="../db/logout.php">Cerrar seesion</a>';
                

            } else {
                // Si no ha iniciado sesión, muestra el enlace de "Inicia sesión"
                echo '<a href="login"><img src="../img/header/login_black.png" alt=""></a>';
            }
            ?>
        </div>
    </div>
    <div>
        <nav>
            <ul class="menu">
                <li>Marcas
                    <ul class="submenu">
                        <li>Lorem Ipsum</li>
                    </ul>
                </li>
                <li>Man
                    <ul class="submenu">
                        <li> Ipsum</li>
                    </ul>
                </li>
                <li>Woman
                    <ul class="submenu">
                        <li>Lorem </li>
                    </ul>
                </li>
                <li>Perfumes
                    <ul class="submenu">
                        <li>Lorem Ipsum</li>
                    </ul>
                </li>
                <li>Tiendas
                    <ul class="submenu">
                        <li>Lorem Ipsum</li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</header>
<div class="espaciado"></div>