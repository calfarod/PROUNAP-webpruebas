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

    // Nota: El código PHP no genera HTML, solo define variables
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

                <li class="nav-item dropdown <?php if ($pagina_actual == 'testfile1.php') echo 'active'; ?>">
                    <a class="nav-link dropdown-toggle" href="quienes-somos.php" target="_self" id="navbarDropdownQS" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Quiénes Somos
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownQS">
                        <li><a class="dropdown-item <?php if ($pagina_actual == 'mision.php') echo 'active'; ?>" href="#mision">Nuestra Misión</a></li>
                        <li><a class="dropdown-item <?php if ($pagina_actual == 'vision.php') echo 'active'; ?>" href="#vision">Nuestra Visión</a></li>
                        <li><a class="dropdown-item <?php if ($pagina_actual == 'historia.php') echo 'active'; ?>" href="#historia">Historia</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item <?php if ($pagina_actual == 'quienes-somos.php') echo 'active'; ?>" href="quienes-somos.php">Resumen</a></li>
                    </ul>
                </li>

                <li class="nav-item <?php if ($pagina_actual == 'red-profesional.php') echo 'active'; ?>">
                    <a class="nav-link" href="red-profesional.php" target="_self">
                        Red Profesional
                    </a>
                </li>
                <li class="nav-item <?php if ($pagina_actual == 'reflexiones.php') echo 'active'; ?>">
                    <a class="nav-link" href="reflexiones.php" target="_self">
                        Reflexiones
                    </a>
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