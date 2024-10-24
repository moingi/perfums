<?php
    session_start();
?>

<header class="p-3 mb-4 border-bottom">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <div class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0 one">
            <a href="/"><img src="../img/pruebas.png" alt="imagen prueba"></a>
        </div>

        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
          <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
        </form>
        <?php
          if (isset($_SESSION['nombre'])) {
        ?>
        <div class="dropdown text-end">
          <a href="#" class="d-block link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="../img/header/login_black.png" alt="mdo" width="32" height="32" class="rounded-circle">
          </a>
          <ul class="dropdown-menu text-small">
            <li><a class="dropdown-item" href="/usuario">Profile</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="../db/logout.php">Sign out</a></li>
          </ul>
        </div>
        <?php
          } else {
        ?>
        <div class="col-md-3 text-center">
          <a href="/login"><button type="button" class="btn btn-success me-2">Login</button></a>
          <a href="/register"><button type="button" class="btn btn-success me-2">Sign-up</button></a>
        </div>
        <?php
          }
        ?> 
      </div>
    </div>
    <div>
    <button class="menu-toggle" id="menuToggle">&#9776;</button>
  <nav class="navbar" id="navbar">
    <ul>
      <li><a href="/listado?categoria=man">Hombre</a></li>
      <li><a href="/listado?categoria=woman">Mujer</a></li>
      <li><a href="/listado">Temporada</a></li>
      <li><a href="/listado">Marcas</a></li>
      <li><a href="#contact">Tienda</a></li>
    </ul>
  </nav>

  <script src="../scripts/menu_mov.js"></script>
    </div>
  </header>