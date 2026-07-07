<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Menú Inventario</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
    /* Paleta Esmeralda que combina con consultar_producto.php */
    :root {
        --color-primario: #064e3b; /* Verde esmeralda profundo */
        --color-vivido: #059669;   /* Verde menta vibrante */
        --bg-sutil: #f0fdf4;       /* Fondo con matiz verdoso claro */
    }

    body {
        background-color: var(--bg-sutil) !important;
    }

    /* Detalle esmeralda en la barra superior */
    .navbar {
        border-bottom: 3px solid var(--color-vivido);
    }

    /* Tarjeta estilizada para la bienvenida */
    .welcome-box {
        background: #ffffff;
        border-radius: 12px;
        padding: 2.5rem;
        border-left: 6px solid var(--color-vivido);
    }
</style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand fw-bold" href="#">Sistema de Inventario</a>
    <div class="collapse navbar-collapse">
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="menuInventario" data-bs-toggle="dropdown">
            Inventario
          </a>
          <ul class="dropdown-menu shadow-sm" style="border-top: 3px solid var(--color-vivido);">
            <li><a class="dropdown-item" href="consultar_producto.php">Consultar y modificar producto</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container py-5">
    <div class="row">
        <div class="col-md-8 col-lg-6">
            <div class="welcome-box shadow-sm">
                <h3 class="fw-bold mb-3" style="color: var(--color-primario);">Bienvenido al módulo de inventario</h3>
                <p class="text-secondary mb-0">
                    Selecciona <strong class="text-dark">Inventario &raquo; Consultar y modificar producto</strong> en el menú superior.
                </p>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>