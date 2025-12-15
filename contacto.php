<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contacto :: Prounap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="img/favicon.png">

    <!-- Bootstrap 4 / Bootstrap Icons -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="css/stylesprounap.css" rel="stylesheet">

    <style>
        @font-face {
            font-family: 'Chillax Variable';
            src: url('../fonts/Chillax Variable.woff2') format('woff2');
            font-weight: 100 900;
            font-display: swap;
        }

        body {
            font-family: 'Chillax Variable', Arial, sans-serif;
        }
    </style>
</head>

<body class="bg-light">

    <!-- Navbar -->
    <?php
        require_once 'includes/nav1.php'; 
    ?>
    <!-- fin del nav -->

    <!-- Sección 2 - C -->
    <section class="hero-section d-flex align-items-center"
        style="background-image:url('img/img23.png'); background-size:cover; min-height: 100vh;">
        <div class="container py-4">
            <div class="row align-items-center">
                <!-- Columna izquierda: Presentación -->
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <h1 class="display-4 fw-bold text-white mb-3">Contacto</h1>
                    <p class="lead text-white mb-4">
                        <span class="fw-bold">Correo Secretaría:</span>
                        secretaria@prounap.cl
                    </p>
                    <p class="lead text-white mb-4">
                        <span class="fw-bold">Correo Tesorería:</span> tesoreria@prounap.cl
                    </p>
                    <p class="lead text-white mb-4">
                        <span class="fw-bold">Dirección Postal:</span> Av. Arturo Prat 2120
                    </p>
                    <p class="lead text-white mb-4">
                        Iquique Chile
                    </p>
                </div>

                <!-- Columna derecha: Formulario de contacto -->
                <div class="col-lg-6 d-flex justify-content-center align-items-center">
                    <form class="p-4 rounded-4 shadow-lg w-100"
                        style="max-width: 370px; background: linear-gradient(135deg, #f5fafd 0%, #cbe9f3 100%);"
                        method="post" autocomplete="off">
                        <h2 class="mb-4 text-primary text-center">Contacto</h2>

                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre</label>
                            <input type="text" class="form-control custom-border" id="nombre" name="nombre" required
                                maxlength="40" pattern="^[A-Za-zÁÉÍÓÚáéíóúÑñ ]{1,40}$"
                                title="Solo letras y espacios, sin caracteres especiales">
                        </div>
                        <div class="mb-3">
                            <label for="telefono" class="form-label">Teléfono</label>
                            <input type="tel" class="form-control custom-border" id="telefono" name="telefono" required
                                maxlength="15" pattern="^[0-9 ]{7,15}$"
                                title="Solo números y espacios, sin caracteres especiales">
                        </div>
                        <div class="mb-3">
                            <label for="correo" class="form-label">Correo electrónico</label>
                            <input type="email" class="form-control custom-border" id="correo" name="correo" required
                                maxlength="70" pattern="^[^<>()\[\]\\.,;:\s@\">
                        </div>
                        <div class="mb-3">
                            <label for="asunto" class="form-label">Asunto</label>
                            <input type="text" class="form-control custom-border" id="asunto" name="asunto" required
                                maxlength="40" pattern="^[A-Za-zÁÉÍÓÚáéíóúÑñ0-9 ]{1,40}$"
                                title="Solo letras, números y espacios, sin caracteres especiales">
                        </div>
                        <div class="mb-3">
                            <label for="descripcion" class="form-label">Descripción</label>
                            <textarea class="form-control custom-border" id="descripcion" name="descripcion" rows="3"
                                required maxlength="250" pattern="^[A-Za-zÁÉÍÓÚáéíóúÑñ0-9 ,.]{5,250}$"
                                title="Solo letras, números, espacios, coma y punto."></textarea>
                        </div>
                        <div class="d-flex justify-content-between gap-2">
                            <button type="reset" class="btn btn-outline-primary">Limpiar</button>
                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer class="footer-mw">
        <!-- Logo e íconos sociales -->
        <div class="container-xl footer-logo-social">
            <div class="row">
                <div class="col-12 col-lg-6 text-left">
                    <img src="img/logo2.jpg" alt="Logo" style="max-width:200px;">
                </div>
                <div class="col-12 col-lg-6 text-lg-right text-center">
                    <!--  col-12 col-lg-6 text-center mt-3 mt-lg-0 -->
                    <div class="footer-social-icons">
                        <a href="javascript:void(0)" title="@instaprounap" data-bs-toggle="tooltip"><i
                                class="bi bi-instagram"></i></a>
                        <a href="javascript:void(0)" title="@fprounap" data-bs-toggle="tooltip"><i
                                class="bi bi-facebook"></i></a>
                        <a href="javascript:void(0)" title="@Xprounap" data-bs-toggle="tooltip"><i
                                class="bi bi-twitter-x"></i></a>
                        <a href="javascript:void(0)" title="@inprounap" data-bs-toggle="tooltip"><i
                                class="bi bi-linkedin"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- línea horizontal fina -->
        <div class="footer-divider"></div>

        <!-- Sección principal en 5 columnas con separadores -->
        <div class="container-xl">
            <div class="row footer-cols-main">
                <!-- Solutions (columna más ancha) -->
                <div class="col-lg-3 col-md-6 col-sm-12 footer-main-content text-left">
                    <div class="footer-main-title">Solutiones</div>
                    <div class="footer-item"><i class="bi bi-mortarboard-fill mr-2"></i> Education Contínua</div>
                    <div class="footer-item"><i class="bi bi-people-fill mr-2"></i> Beneficios y Membresía</div>
                    <div class="footer-item"><i class="bi bi-heart-fill mr-2"></i> Organización y Beneficencia</div>
                    <div class="footer-item"><i class="bi bi-person-gear mr-2"></i> Responsabilidad Social</div>
                </div>
                <div class="footer-vertical-divider d-none d-lg-block"></div>
                <!-- About -->
                <div class="col-lg-2 col-md-6 col-sm-12 footer-main-content text-left">
                    <div class="footer-main-title">Acerca de</div>
                    <div class="footer-item"><i class="bi bi-info-circle mr-2"></i> Participación</div>
                    <div class="footer-item"><i class="bi bi-puzzle mr-2"></i> Estudios y Vinculación con el Medio VcM
                    </div>
                    <div class="footer-item"><i class="bi bi-eye mr-2"></i> Casos de Éxito</div>
                    <div class="footer-item"><i class="bi bi-chat-dots mr-2"></i> Testimonios</div>
                </div>
                <div class="footer-vertical-divider d-none d-lg-block"></div>
                <!-- Resources -->
                <div class="col-lg-2 col-md-6 col-sm-12 footer-main-content text-left">
                    <div class="footer-main-title">Recursos</div>
                    <div class="footer-item"><i class="bi bi-journals mr-2"></i> Blog</div>
                    <div class="footer-item"><i class="bi bi-life-preserver mr-2"></i> Soporte</div>
                    <div class="footer-item"><i class="bi bi-question-circle mr-2"></i> FAQs</div>
                    <div class="footer-item"><i class="bi bi-envelope mr-2"></i> Contáctanos</div>
                </div>
                <div class="footer-vertical-divider d-none d-lg-block"></div>
                <!-- Connect -->
                <div class="col-lg-2 col-md-6 col-sm-12 footer-main-content text-left">
                    <div class="footer-main-title">Conexión</div>
                    <div class="footer-item"><i class="bi bi-telephone-inbound mr-2"></i> 569-5350-2325</div>
                    <div class="footer-item"><i class="bi bi-envelope-check mr-2"></i> info@prounap.cl</div>
                    <div class="footer-item"><i class="bi bi-calendar-check mr-2"></i> Lun-Vie</div>
                    <div class="footer-item"><i class="bi bi-clock mr-2"></i> 9:00am-5:00pm CLST</div>
                </div>
                <div class="footer-vertical-divider d-none d-lg-block"></div>
                <!-- Contact -->
                <div class="col-lg-2 col-md-6 col-sm-12 footer-main-content text-left">
                    <div class="footer-main-title">Contacto</div>
                    <div class="footer-item"><i class="bi bi-geo-alt-fill mr-2"></i> Iquique + Chile</div>
                    <div class="footer-item"><i class="bi bi-globe mr-2"></i> www.prounap.cl</div>
                </div>
            </div>
        </div>

        <!-- Top resources en 4 columnas -->
        <div class="footer-second-divider"></div>
        <div class="container-xl">
            <div class="row footer-resources-row">
                <div class="col-md-3 col-sm-6 footer-resources-col text-left">
                    <div class="footer-main-title">Actividades Clave</div>
                    <div class="footer-item"><i class="bi bi-award mr-2"></i> Reconocimientos Profesionales</div>
                    <div class="footer-item"><i class="bi bi-calendar-event mr-2"></i> Difusión de eventos y actividades
                        sectoriales</div>
                </div>
                <div class="col-md-3 col-sm-6 footer-resources-col text-left">
                    <div class="footer-main-title">&nbsp;</div>
                    <div class="footer-item"><i class="bi bi-pc-display mr-2"></i> Compartir oportunidades laborales
                    </div>
                    <div class="footer-item"><i class="bi bi-diagram-2 mr-2"></i> Networking</div>
                </div>
                <div class="col-md-3 col-sm-6 footer-resources-col text-left">
                    <div class="footer-main-title">&nbsp;</div>
                    <div class="footer-item"><i class="bi bi-hospital mr-2"></i> Proyectos multidisciplinarios</div>
                    <div class="footer-item"><i class="bi bi-book mr-2"></i> Capacitación y formación continua</div>
                </div>
                <div class="col-md-3 col-sm-6 footer-resources-col text-left">
                    <div class="footer-main-title">&nbsp;</div>
                    <div class="footer-item"><i class="bi bi-people mr-2"></i> Mentoría y acompañamiento</div>
                    <div class="footer-item"><i class="bi bi-rocket-takeoff mr-2"></i> Intercambio de experiencias y
                        buenas prácticas</div>
                </div>
            </div>
        </div>

        <!-- Copyright & subir -->
        <div class="footer-bottom pb-4">
            © 2025 Prounap. Todos los derechos reservados.
        </div>
        <button id="back-to-top-btn" onclick="window.scrollTo({top:0, behavior:'smooth'})">
            <span><i class="bi bi-chevron-up"></i></span>
        </button>
    </footer>

    <!-- Bootstrap y JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/scripts.js"></script>
    <!-- Tooltips -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
            tooltipTriggerList.forEach(function (tooltipTriggerEl) {
                new bootstrap.Tooltip(tooltipTriggerEl);
            });
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var navBtn = document.getElementById('navPanelBtn');
            var navPanel = document.getElementById('navPanel');
            var hideTimeout;

            // Mostrar el panel al hacer clic
            navBtn.addEventListener('click', function (e) {
                e.preventDefault();
                navPanel.classList.toggle('show');
            });

            // Mostrar el panel si está visible y el mouse entra (evita ocultamiento accidental)
            navBtn.addEventListener('mouseenter', function () {
                if (navPanel.classList.contains('show')) {
                    clearTimeout(hideTimeout);
                }
            });
            navPanel.addEventListener('mouseenter', function () {
                clearTimeout(hideTimeout);
            });

            // Ocultar el panel cuando el mouse sale del botón y del panel
            navBtn.addEventListener('mouseleave', function () {
                hideTimeout = setTimeout(function () {
                    navPanel.classList.remove('show');
                }, 250); // ligerísimo retardo para experiencia suave
            });
            navPanel.addEventListener('mouseleave', function () {
                hideTimeout = setTimeout(function () {
                    navPanel.classList.remove('show');
                }, 250);
            });

            // También ocultar el panel al hacer clic fuera de él y del botón
            document.addEventListener('click', function (e) {
                if (!navPanel.contains(e.target) && e.target !== navBtn) {
                    navPanel.classList.remove('show');
                }
            });

            // Al hacer clic en algún botón del panel, cerrar
            navPanel.querySelectorAll('a.btn').forEach(function (btn) {
                btn.addEventListener('click', function () {
                    navPanel.classList.remove('show');
                });
            });
        });
    </script>

    <script>
        // Quiénes Somos
        document.addEventListener('DOMContentLoaded', function () {
            var navBtnQuienes = document.getElementById('navPanelQuienesBtn');
            var navPanelQuienes = document.getElementById('navPanelQuienes');
            var hideTimeoutQuienes;

            navBtnQuienes.addEventListener('click', function (e) {
                e.preventDefault();
                navPanelQuienes.classList.toggle('show');
            });

            navBtnQuienes.addEventListener('mouseenter', function () {
                if (navPanelQuienes.classList.contains('show')) {
                    clearTimeout(hideTimeoutQuienes);
                }
            });
            navPanelQuienes.addEventListener('mouseenter', function () {
                clearTimeout(hideTimeoutQuienes);
            });

            navBtnQuienes.addEventListener('mouseleave', function () {
                hideTimeoutQuienes = setTimeout(function () {
                    navPanelQuienes.classList.remove('show');
                }, 250);
            });
            navPanelQuienes.addEventListener('mouseleave', function () {
                hideTimeoutQuienes = setTimeout(function () {
                    navPanelQuienes.classList.remove('show');
                }, 250);
            });

            document.addEventListener('click', function (e) {
                if (!navPanelQuienes.contains(e.target) && e.target !== navBtnQuienes) {
                    navPanelQuienes.classList.remove('show');
                }
            });

            navPanelQuienes.querySelectorAll('a.btn').forEach(function (btn) {
                btn.addEventListener('click', function () {
                    navPanelQuienes.classList.remove('show');
                });
            });
        });
    </script>

    <script>
        // Red Profesional
        document.addEventListener('DOMContentLoaded', function () {
            var navBtnQuienes = document.getElementById('navPanelRedBtn');
            var navPanelQuienes = document.getElementById('navPanelRed');
            var hideTimeoutQuienes;

            navBtnQuienes.addEventListener('click', function (e) {
                e.preventDefault();
                navPanelQuienes.classList.toggle('show');
            });

            navBtnQuienes.addEventListener('mouseenter', function () {
                if (navPanelQuienes.classList.contains('show')) {
                    clearTimeout(hideTimeoutQuienes);
                }
            });
            navPanelQuienes.addEventListener('mouseenter', function () {
                clearTimeout(hideTimeoutQuienes);
            });

            navBtnQuienes.addEventListener('mouseleave', function () {
                hideTimeoutQuienes = setTimeout(function () {
                    navPanelQuienes.classList.remove('show');
                }, 250);
            });
            navPanelQuienes.addEventListener('mouseleave', function () {
                hideTimeoutQuienes = setTimeout(function () {
                    navPanelQuienes.classList.remove('show');
                }, 250);
            });

            document.addEventListener('click', function (e) {
                if (!navPanelQuienes.contains(e.target) && e.target !== navBtnQuienes) {
                    navPanelQuienes.classList.remove('show');
                }
            });

            navPanelQuienes.querySelectorAll('a.btn').forEach(function (btn) {
                btn.addEventListener('click', function () {
                    navPanelQuienes.classList.remove('show');
                });
            });
        });
    </script>

    <script>
        // Red Profesional
        document.addEventListener('DOMContentLoaded', function () {
            var navBtnQuienes = document.getElementById('navPanelReflexionesBtn');
            var navPanelQuienes = document.getElementById('navPanelReflexiones');
            var hideTimeoutQuienes;

            navBtnQuienes.addEventListener('click', function (e) {
                e.preventDefault();
                navPanelQuienes.classList.toggle('show');
            });

            navBtnQuienes.addEventListener('mouseenter', function () {
                if (navPanelQuienes.classList.contains('show')) {
                    clearTimeout(hideTimeoutQuienes);
                }
            });
            navPanelQuienes.addEventListener('mouseenter', function () {
                clearTimeout(hideTimeoutQuienes);
            });

            navBtnQuienes.addEventListener('mouseleave', function () {
                hideTimeoutQuienes = setTimeout(function () {
                    navPanelQuienes.classList.remove('show');
                }, 250);
            });
            navPanelQuienes.addEventListener('mouseleave', function () {
                hideTimeoutQuienes = setTimeout(function () {
                    navPanelQuienes.classList.remove('show');
                }, 250);
            });

            document.addEventListener('click', function (e) {
                if (!navPanelQuienes.contains(e.target) && e.target !== navBtnQuienes) {
                    navPanelQuienes.classList.remove('show');
                }
            });

            navPanelQuienes.querySelectorAll('a.btn').forEach(function (btn) {
                btn.addEventListener('click', function () {
                    navPanelQuienes.classList.remove('show');
                });
            });
        });
    </script>

</body>

</html>