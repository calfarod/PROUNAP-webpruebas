<?php
    // 1. Obtiene la ruta completa (ej: /proyecto/mision.php)
    $url_completa = $_SERVER['REQUEST_URI']; 

    // 2. Extrae solo el nombre del archivo (ej: mision.php)
    // Usamos basename() para eliminar directorios
    $pagina_actual = basename($url_completa); 

    // Opcional: Si el usuario visita index.php o solo el dominio, 
    // asegura que la variable no esté vacía para activar el enlace "Inicio".
    if (empty($pagina_actual)) {
        $pagina_actual = 'testfile1.php';
    }

    // Determinamos cuáles son las páginas en que debe buscar coincidencias
    // Creamos un array con las páginas que activan este menú
    $paginas_reflexiones = ['reflexiones.php', 'noticias.php', 'reportajes.php', 'testfile.php', 'testfile1.php']; 
?>    
   
<nav class="navbar sticky-top navbar-expand-lg navbar-light bg-white shadow-sm py-0">
    <div class="container-fluid">
        <a class="navbar-brand me-3" href="#">
            <img src="img/logo3.png" height="48" alt="Logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav"
            aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="mainNav">
            <ul class="navbar-nav mb-2 mb-lg-0 mx-auto">

                <li class="nav-item <?php if ($pagina_actual == 'index.php') echo 'active'; ?>">
                    <a class="nav-link" href="index.php" target="_self">
                        HOME
                    </a>
                </li>

                <li class="nav-item <?php if ($pagina_actual == 'testfile1.php') echo 'active'; ?>">
                    <a class="nav-link" href="quienes-somos.php" target="_self">
                        Quiénes Somos
                    </a>
                </li>

                <li class="nav-item <?php if ($pagina_actual == 'red-profesional.php') echo 'active'; ?>">
                    <a class="nav-link" href="red-profesional.php" target="_self">
                        Red Profesional
                    </a>
                </li>
                
                <li class="nav-item dropdown <?php echo in_array($pagina_actual, $paginas_reflexiones) ? 'active' : ''; ?>">
                    <a class="nav-link dropdown-toggle" href="reflexiones.php" target="_self" id="navbarDropdownReflexiones" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Reflexiones
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownReflexiones">
                        <li><a class="dropdown-item <?php if ($pagina_actual == 'reflexiones.php') echo 'active'; ?>" href="reflexiones.php">Reflexión</a></li>
                        <!-- <li><hr class="dropdown-divider"></li> -->
                        <li><a class="dropdown-item <?php if ($pagina_actual == 'noticias.php') echo 'active'; ?>" href="noticias.php">Noticias</a></li>
                        <li><a class="dropdown-item <?php if ($pagina_actual == 'reportajes.php') echo 'active'; ?>" href="reportajes.php">Reportajes</a></li>
                    </ul>
                </li>
                <li class="nav-item <?php if ($pagina_actual == 'unete.php') echo 'active'; ?>">
                    <a class="nav-link" href="unete.php" target="_self">
                        Únete
                    </a>
                </li>
                <li class="nav-item <?php if ($pagina_actual == 'contacto.php') echo 'active'; ?>">
                    <a class="nav-link" href="contacto.php" target="_self">
                        Contacto
                    </a>
                </li>

            </ul>
        </div>
    </div>
</nav>