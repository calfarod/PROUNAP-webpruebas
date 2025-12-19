<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Red Profesional :: Prounap</title>
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
        require_once 'includes/nav2.php'; 
    ?>
    <!-- fin del nav -->

<!-- Sección 4 - RP -->
<section class="section-featured bg-white py-5"
    style="background: url('img/pimg17.jpg') center center / cover no-repeat; min-height: 950px;">
    <div class="container h-100 py-5">
        <div class="row h-100 align-items-stretch">
            <!-- Contenedor izquierdo celeste -->
            <div class="col-md-6 d-flex">
                <div class="rp-box rp-box-left flex-fill d-flex flex-column justify-content-center align-items-start px-5">
                    <!-- Título grande -->
                    <h2 class="display-4 fw-bold mb-4" style="color:#005593;">Red Profesional</h2>
                    <!-- Primer párrafo -->
                    <p class="lead mb-3" style="color:#005593; max-width: 620px;">
                        En PROUNAP celebramos la diversidad de talentos y trayectorias, convencidos de que la unión de nuestras experiencias construye una red más fuerte, solidaria y llena de oportunidades.
                    </p>
                    <!-- Segundo párrafo -->
                    <p class="lead mb-4" style="color:#005593; max-width: 620px;">
                        Descubre el poder de tu aporte y sumérgete en una comunidad que te apoya, reconoce y te inspira a seguir creciendo. ¡Hazte parte de nuestra historia y ayúdanos a proyectar el futuro profesional de la Universidad Arturo Prat!
                    </p>
                </div>
            </div>
            <!-- Contenedor derecho rosado -->
            <div class="col-md-6 d-flex">
                <div class="rp-box rp-box-right flex-fill d-flex justify-content-center align-items-center">
                    <img src="img/pimg18.jpg" alt="Red Profesional"
                         class="img-fluid rounded-4 rp-img"
                         style="max-width: 90%; max-height: 80%; object-fit:cover;">
                </div>
            </div>
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