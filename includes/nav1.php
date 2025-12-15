<!-- Obtiene el nombre de la página activa -->
<?php
    // 1. Obtiene la ruta completa (ej: /proyecto/mision.php)
    $url_completa = $_SERVER['REQUEST_URI']; 

    // 2. Extrae solo el nombre del archivo (ej: mision.php)
    // Usamos basename() para eliminar directorios
    $pagina_actual = basename($url_completa); 

    // Opcional: Si el usuario visita index.php o solo el dominio, 
    // asegura que la variable no esté vacía para activar el enlace "Inicio".
    if (empty($pagina_actual)) {
        $pagina_actual = 'index.php';
    }

    // Nota: El código PHP no genera HTML, solo define variables
?>    
    
<!-- Navbar -->
<nav class="navbar sticky-top navbar-expand-lg navbar-light bg-white shadow-sm py-0">
    <div class="container-fluid">
        <a class="navbar-brand me-3" href="#">
            <img src="img/logo3.png" height="48" alt="Logo">
        </a>
        <!-- Botón hamburguesa -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav"
            aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="mainNav">
            <ul class="navbar-nav mb-2 mb-lg-0 mx-auto">

                <li class="nav-item <?php if ($pagina_actual == 'index.php') echo 'active'; ?>"><a class="nav-link" href="index.php" target="_self">:::HOME</a>
                </li>

                <!-- QUIÉNES SOMOS -->

                <li class="nav-item <?php if ($pagina_actual == 'quienes-somos.php') echo 'active'; ?>"><a class="nav-link" href="quienes-somos.php" target="_self">Quiénes
                        Somos</a></li>

                <!-- RED PROFESIONAL -->

                <li class="nav-item <?php if ($pagina_actual == 'red-profesional.php') echo 'active'; ?>"><a class="nav-link" href="red-profesional.php" target="_self">Red
                        Profesional</a>
                </li>

                <!-- REFLEXIONES -->

                <li class="nav-item <?php if ($pagina_actual == 'reflexiones.php') echo 'active'; ?>"><a class="nav-link" href="reflexiones.php" target="_self">Reflexiones</a>
                </li>

                <!-- ÚNETE -->

                <li class="nav-item <?php if ($pagina_actual == 'unete.php') echo 'active'; ?>"><a class="nav-link" href="unete.php" target="_self">Únete</a>
                </li>

                <li class="nav-item <?php if ($pagina_actual == 'contacto.php') echo 'active'; ?>"><a class="nav-link" href="contacto.php" target="_self">Contacto</a>
                </li>

            </ul>
            <!-- Login y Registro a la derecha -->
            <div class="d-flex ms-lg-3">
                <a href="#" target="_self" class="btn btn-outline-primary me-2">Login</a>
                <!-- <a href="#" target="_self" class="btn btn-primary me-2">Registro</a> -->
            </div>
            <div>
                <a href="https://prounap.cl/webmail" target="_blank" class="webmail-icon-link me-2">
                    <i class="bi bi-envelope-check-fill"></i>
                </a>
            </div>
        </div>
    </div>
</nav>
<!-- fin del nav -->
