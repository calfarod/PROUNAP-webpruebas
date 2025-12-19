<?php
// A1: index.php - Inicio de la página principal

// 1. Lógica de Verificación de Sesión (Pendiente de A5/A6)
// Esta variable se llenará más tarde con la información de $_SESSION.
$is_logged_in = isset($_SESSION['user_id']);
$username = $is_logged_in ? $_SESSION['username'] : 'Invitado';

// 2. Lógica de Verificación de Cookies (Consentimiento)
// (Reemplazado por lógica JS en scripts.js)

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Prounap | Sitio Web Oficial</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="img/favicon.png">

    <!-- Bootstrap 4 / Bootstrap Icons -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="css/stylesprounap.css" rel="stylesheet">

    <!-- <style>
        @font-face {
            font-family: 'Chillax Variable';
            src: url('../fonts/Chillax Variable.woff2') format('woff2');
            font-weight: 100 900;
            font-display: swap;
        }

        body {
            font-family: 'Chillax Variable', Arial, sans-serif;
        }
    </style> -->
</head>

<body class="bg-light">

    <!-- Navbar -->
    <?php
        require_once 'includes/nav2.php'; 
    ?>
    <!-- fin del nav -->


    <!-- Sección 1 - H -->
    <section class="hero-section d-flex align-items-center"
        style="background-image:url('img/pimg15.jpg'); background-size:cover;">
        <div class="container py-4">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-4 fw-bold text-white mb-3">¡Bienvenidos!</h1>
                    <p class="lead text-white mb-4">Descubre Nuestra Red de Desafíos y Oportunidades.</p>
                </div>
                <div class="col-lg-6 d-flex justify-content-center">
                    <img src="img/logo2b.jpg" class="rounded-4 shadow-lg img-fluid floating-img"
                        style="max-width:500px;" alt="Imagen principal">
                </div>
            </div>
        </div>

        <!-- <div class="anuncio">
            <a href="fiesta.html" target="_blank" class="annual25-card-link" style="display:block;">
                <img src="img/pimg1.jpg" alt="Fiesta Anual" class="rounded-4 shadow-lg annual-float-img">
            </a>
        </div> -->

        <!-- <div class="contenedor-flex">
            <img class="anuncio" src="TU-IMAGEN.jpg" alt="Anuncio">
        </div> -->

    </section>


    <!-- Sección 3 - Qs-->
    <section class="section-featured bg-white py-5"
        style="background: url('img/pimg16.jpg') center center / cover no-repeat;">
        <div class="container py-5">
            <h2 class="display-4 fw-bold text-center mb-5 text-white">Quiénes Somos</h2>
            <div class="row align-items-center">
                <!-- Contenedor Izquierda: Imagen -->
                <div class="col-md-6 d-flex justify-content-center">
                    <img src="img/pimg2.jpg" alt="Imagen destacada" class="img-fluid rounded-4"
                        style="height:660px; object-fit:cover; max-width:100%;">
                </div>
                <!-- Contenedor Derecha: Texto, bullets y botón -->
                <div class="col-md-6 d-flex flex-column justify-content-center px-md-5 mt-4 mt-md-0">
                    <p class="lead mb-4 text-white">
                        Toda buena relación comienza con una presentación, permítanos dar el inicio:
                    </p>
                    <ul class="feature-list mb-4">
                        <li>
                            <p class="lead mb-2 text-white">Somos la Asociación de Egresados y Titulados de la
                                Universidad Arturo Prat (PROUNAP).</p>
                        </li>
                        <li>
                            <p class="lead mb-2 text-white">Somos una red que reúne a profesionales de todas las
                                carreras de la Universidad Arturo Prat, fundada en 2018 en Iquique. PROUNAP tiene como
                                finalidad principal:
                            </p>
                        </li>
                        <li>
                            <p class="lead mb-2 text-white">Fortalecer la vinculación, colaboración y apoyo mutuo entre
                                sus miembros, promoviendo el desarrollo profesional, la excelencia académica y el
                                compromiso social.
                            </p>
                        </li>
                        <li>
                            <p class="lead mb-2 text-white">Impulsamos actividades, proyectos y espacios de
                                perfeccionamiento, con principios de ética, transparencia y servicio.
                            </p>
                        </li>
                        <li>
                            <p class="lead mb-2 text-white">Nuestra red fomenta la integración activa, la participación
                                democrática y la contribución positiva al entorno universitario y a la sociedad en
                                general.
                            </p>
                        </li>
                    </ul>
                    <!-- Botón con más margen y ancho reducido -->
                    <a href="quienes-somos.html" target="_blank" class="btn btn-primary btn-pill w-auto mt-5 mx-auto"
                        style="width:200px;">
                        Ver Más Información
                    </a>
                </div>
            </div>
    </section>

    <!-- Sección 4 - RP -->
    <section class="section-featured bg-white py-5"
        style="background: url('img/pimg17.jpg') center center / cover no-repeat; min-height: 950px;">
        <div class="container h-100 py-5">
            <div class="row h-100 align-items-stretch">
                <!-- Contenedor izquierdo celeste -->
                <div class="col-md-6 d-flex">
                    <div
                        class="rp-box rp-box-left flex-fill d-flex flex-column justify-content-center align-items-start px-5">
                        <!-- Título grande -->
                        <h2 class="display-4 fw-bold mb-4" style="color:#005593;">Red Profesional</h2>
                        <!-- Primer párrafo -->
                        <p class="lead mb-3" style="color:#005593; max-width: 620px;">
                            En PROUNAP celebramos la diversidad de talentos y trayectorias, convencidos de que la unión
                            de nuestras experiencias construye una red más fuerte, solidaria y llena de oportunidades.
                        </p>
                        <!-- Segundo párrafo -->
                        <p class="lead mb-4" style="color:#005593; max-width: 620px;">
                            Descubre el poder de tu aporte y sumérgete en una comunidad que te apoya, reconoce y te
                            inspira a seguir creciendo. ¡Hazte parte de nuestra historia y ayúdanos a proyectar el
                            futuro profesional de la Universidad Arturo Prat!
                        </p>
                        <!-- Botón píldora -->
                        <a href="red-profesional.html" target="_blank" class="btn btn-primary btn-pill mt-2"
                            style="width:220px;">Ir a Red Profesional</a>
                    </div>
                </div>
                <!-- Contenedor derecho rosado -->
                <div class="col-md-6 d-flex">
                    <div class="rp-box rp-box-right flex-fill d-flex justify-content-center align-items-center">
                        <img src="img/pimg18.jpg" alt="Red Profesional" class="img-fluid rounded-4 rp-img"
                            style="max-width: 90%; max-height: 80%; object-fit:cover;">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección 5 - Reflexiones -->
    <section class="section-featured bg-white py-5"
        style="background: url('img/pimg20.jpg') center center / cover no-repeat; min-height: 950px;">
        <div class="container h-100 py-5">
            <div class="row h-100 align-items-stretch">
                <!-- Contenedor derecho rosado -->
                <div class="col-md-6 d-flex">
                    <div class="rp-box2 rp-box2-right flex-fill d-flex justify-content-center align-items-center">
                        <img src="img/pimg21.png" alt="Red Profesional" class="img-fluid rounded-4 rp-img"
                            style="max-width: 90%; max-height: 80%; object-fit:cover;">
                    </div>
                </div>
                <!-- Contenedor izquierdo celeste -->
                <div class="col-md-6 d-flex">
                    <div
                        class="rp-box2 rp-box2-left flex-fill d-flex flex-column justify-content-center align-items-start px-5">
                        <!-- Título grande -->
                        <h2 class="display-4 fw-bold mb-4" style="color:#005593;">Reflexiones</h2>
                        <!-- Primer párrafo -->
                        <p class="lead mb-3" style="color:#005593; max-width: 620px;">
                            En Prounap queremos brindar un Espacio a la reflexión, como un proceso que impulsa el
                            crecimiento
                            intelectual, la madurez ética y la capacidad para adaptarse a nuevos desafíos y entornos.
                        </p>
                        <!-- Segundo párrafo -->
                        <p class="lead mb-4" style="color:#005593; max-width: 620px;">
                            Mediante la reflexión, una persona puede identificar aciertos y errores, fortalecer su
                            juicio crítico
                            y orientar mejor sus esfuerzos hacia metas personales, profesionales y sociales.
                        </p>
                        <!-- Botón píldora -->
                        <a href="reflexiones.html" target="_blank" class="btn btn-primary btn-pill mt-2"
                            style="width:220px;">Ir a Reflexiones</a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Sección 6A Únete -->
    <section class="section-featured bg-white">
        <div class="container-fluid px-0">
            <div class="d-flex flex-row align-items-stretch" style="min-height:1000px;">
                <!-- Izquierdo: barra amarilla -->
                <div class="container-izquierdo d-flex flex-column justify-content-between"
                    style="width:50px; min-width:50px; max-width:50px;">
                </div>
                <!-- columna espaciadora -->
                <div class="container-izquierdo d-flex flex-column justify-content-between"
                    style="width:850px; min-width:150px; max-width:850px;">
                </div>
                <!-- Contenido: verde, título, texto, botón -->
                <div class="container-contenido d-flex flex-column justify-content-center align-items-start p-4"
                    style="flex:2 1 320px; min-width:240px;">
                    <h2 class="display-4 fw-bold mb-3" style="color:#e7e309;">Únete a Prounap</h2>
                    <p class="text-white lead mb-3">
                        La Red está en desarrollo.
                    </p>
                    <a href="unete.html" target="_blank" class="btn btn-primary btn-pill mt-5" style="width:220px;">Ver
                        página únete</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección Directiva -->
    <section class="section-featured-directiva bg-white py-5">
        <div class="container">
            <!-- Más espacio arriba y debajo del título -->
            <h2 class="text-center"
                style="color:#005593; margin-top:60px; margin-bottom:40px; font-size:2.8rem; font-weight:700;">
                Directiva Prounap
            </h2>

            <!-- Imágenes en círculo con nombres y cargos -->
            <div class="d-flex justify-content-center gap-5 flex-wrap" style="margin-bottom:50px;">

                <!-- Presidente -->
                <div class="text-center">
                    <img src="img/presidencia.jpg" alt="Presidente" class="rounded-circle shadow"
                        style="width:220px; height:220px; object-fit:cover;">
                    <div style="color:#005593; font-weight:700; font-size:1.15rem; margin-top:16px;">
                        José Cruces<br>
                        Presidente
                    </div>
                </div>

                <!-- Secretaria -->
                <div class="text-center">
                    <img src="img/secretaria.jpg" alt="Secretaria" class="rounded-circle shadow"
                        style="width:220px; height:220px; object-fit:cover;">
                    <div style="color:#005593; font-weight:700; font-size:1.15rem; margin-top:16px;">
                        Solange Varas<br>
                        Secretaria
                    </div>
                </div>

                <!-- Tesorera -->
                <div class="text-center">
                    <img src="img/tesoreria.jpg" alt="Tesorera" class="rounded-circle shadow"
                        style="width:220px; height:220px; object-fit:cover;">
                    <div style="color:#005593; font-weight:700; font-size:1.15rem; margin-top:16px;">
                        Tita García<br>
                        Tesorera
                    </div>
                </div>

                <!-- Vicepresidencia -->
                <div class="text-center">
                    <img src="img/vicepresidencia.jpg" alt="Vice Presidente" class="rounded-circle shadow"
                        style="width:220px; height:220px; object-fit:cover;">
                    <div style="color:#005593; font-weight:700; font-size:1.15rem; margin-top:16px;">
                        César Villalobos<br>
                        Vicepresidente
                    </div>
                </div>
            </div>

            <!-- Texto destacado en azul con más espacio encima -->
            <div class="text-center" style="margin-top:60px;">
                <span style="font-size:1.4rem; font-weight:500; color:#005593;">
                    Asumimos el desafío con energía renovada
                </span>
            </div>
        </div>
    </section>



    <!-- FOOTER -->
    <?php
        require_once 'includes/footer1.php'; 
    ?>

    <!-- Bootstrap y JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/scripts.js"></script>

    <!-- Tooltips -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
            tooltipTriggerList.forEach(function(tooltipTriggerEl) {
                new bootstrap.Tooltip(tooltipTriggerEl);
            });
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var navBtn = document.getElementById('navPanelBtn');
            var navPanel = document.getElementById('navPanel');
            var hideTimeout;

            // Mostrar el panel al hacer clic
            navBtn.addEventListener('click', function(e) {
                e.preventDefault();
                navPanel.classList.toggle('show');
            });

            // Mostrar el panel si está visible y el mouse entra (evita ocultamiento accidental)
            navBtn.addEventListener('mouseenter', function() {
                if (navPanel.classList.contains('show')) {
                    clearTimeout(hideTimeout);
                }
            });
            navPanel.addEventListener('mouseenter', function() {
                clearTimeout(hideTimeout);
            });

            // Ocultar el panel cuando el mouse sale del botón y del panel
            navBtn.addEventListener('mouseleave', function() {
                hideTimeout = setTimeout(function() {
                    navPanel.classList.remove('show');
                }, 250); // ligerísimo retardo para experiencia suave
            });
            navPanel.addEventListener('mouseleave', function() {
                hideTimeout = setTimeout(function() {
                    navPanel.classList.remove('show');
                }, 250);
            });

            // También ocultar el panel al hacer clic fuera de él y del botón
            document.addEventListener('click', function(e) {
                if (!navPanel.contains(e.target) && e.target !== navBtn) {
                    navPanel.classList.remove('show');
                }
            });

            // Al hacer clic en algún botón del panel, cerrar
            navPanel.querySelectorAll('a.btn').forEach(function(btn) {
                btn.addEventListener('click', function() {
                    navPanel.classList.remove('show');
                });
            });
        });
    </script>

    <script>
        // Quiénes Somos
        document.addEventListener('DOMContentLoaded', function() {
            var navBtnQuienes = document.getElementById('navPanelQuienesBtn');
            var navPanelQuienes = document.getElementById('navPanelQuienes');
            var hideTimeoutQuienes;

            navBtnQuienes.addEventListener('click', function(e) {
                e.preventDefault();
                navPanelQuienes.classList.toggle('show');
            });

            navBtnQuienes.addEventListener('mouseenter', function() {
                if (navPanelQuienes.classList.contains('show')) {
                    clearTimeout(hideTimeoutQuienes);
                }
            });
            navPanelQuienes.addEventListener('mouseenter', function() {
                clearTimeout(hideTimeoutQuienes);
            });

            navBtnQuienes.addEventListener('mouseleave', function() {
                hideTimeoutQuienes = setTimeout(function() {
                    navPanelQuienes.classList.remove('show');
                }, 250);
            });
            navPanelQuienes.addEventListener('mouseleave', function() {
                hideTimeoutQuienes = setTimeout(function() {
                    navPanelQuienes.classList.remove('show');
                }, 250);
            });

            document.addEventListener('click', function(e) {
                if (!navPanelQuienes.contains(e.target) && e.target !== navBtnQuienes) {
                    navPanelQuienes.classList.remove('show');
                }
            });

            navPanelQuienes.querySelectorAll('a.btn').forEach(function(btn) {
                btn.addEventListener('click', function() {
                    navPanelQuienes.classList.remove('show');
                });
            });
        });
    </script>

    <script>
        // Red Profesional
        document.addEventListener('DOMContentLoaded', function() {
            var navBtnQuienes = document.getElementById('navPanelRedBtn');
            var navPanelQuienes = document.getElementById('navPanelRed');
            var hideTimeoutQuienes;

            navBtnQuienes.addEventListener('click', function(e) {
                e.preventDefault();
                navPanelQuienes.classList.toggle('show');
            });

            navBtnQuienes.addEventListener('mouseenter', function() {
                if (navPanelQuienes.classList.contains('show')) {
                    clearTimeout(hideTimeoutQuienes);
                }
            });
            navPanelQuienes.addEventListener('mouseenter', function() {
                clearTimeout(hideTimeoutQuienes);
            });

            navBtnQuienes.addEventListener('mouseleave', function() {
                hideTimeoutQuienes = setTimeout(function() {
                    navPanelQuienes.classList.remove('show');
                }, 250);
            });
            navPanelQuienes.addEventListener('mouseleave', function() {
                hideTimeoutQuienes = setTimeout(function() {
                    navPanelQuienes.classList.remove('show');
                }, 250);
            });

            document.addEventListener('click', function(e) {
                if (!navPanelQuienes.contains(e.target) && e.target !== navBtnQuienes) {
                    navPanelQuienes.classList.remove('show');
                }
            });

            navPanelQuienes.querySelectorAll('a.btn').forEach(function(btn) {
                btn.addEventListener('click', function() {
                    navPanelQuienes.classList.remove('show');
                });
            });
        });
    </script>

    <script>
        // Red Profesional
        document.addEventListener('DOMContentLoaded', function() {
            var navBtnQuienes = document.getElementById('navPanelReflexionesBtn');
            var navPanelQuienes = document.getElementById('navPanelReflexiones');
            var hideTimeoutQuienes;

            navBtnQuienes.addEventListener('click', function(e) {
                e.preventDefault();
                navPanelQuienes.classList.toggle('show');
            });

            navBtnQuienes.addEventListener('mouseenter', function() {
                if (navPanelQuienes.classList.contains('show')) {
                    clearTimeout(hideTimeoutQuienes);
                }
            });
            navPanelQuienes.addEventListener('mouseenter', function() {
                clearTimeout(hideTimeoutQuienes);
            });

            navBtnQuienes.addEventListener('mouseleave', function() {
                hideTimeoutQuienes = setTimeout(function() {
                    navPanelQuienes.classList.remove('show');
                }, 250);
            });
            navPanelQuienes.addEventListener('mouseleave', function() {
                hideTimeoutQuienes = setTimeout(function() {
                    navPanelQuienes.classList.remove('show');
                }, 250);
            });

            document.addEventListener('click', function(e) {
                if (!navPanelQuienes.contains(e.target) && e.target !== navBtnQuienes) {
                    navPanelQuienes.classList.remove('show');
                }
            });

            navPanelQuienes.querySelectorAll('a.btn').forEach(function(btn) {
                btn.addEventListener('click', function() {
                    navPanelQuienes.classList.remove('show');
                });
            });
        });
    </script>

    <!-- Cookie Consent Banner -->
    <div id="cookieConsent">
        <div class="cookie-content">
            <div class="cookie-text">
                Utilizamos cookies propias y de terceros para mejorar nuestros servicios y mostrarle publicidad relacionada con sus preferencias mediante el análisis de sus hábitos de navegación. Si continúa navegando, consideramos que acepta su uso. Puede obtener más información en nuestra <a href="politica-privacidad-prounap.html">Política de Privacidad</a>.
            </div>
            <div class="cookie-btn">
                <button id="acceptCookiesBtn" class="btn btn-primary btn-pill">Aceptar</button>
            </div>
        </div>
    </div>


</body>

</html>