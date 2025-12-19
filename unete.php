<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Únete :: Prounap</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link rel="icon" type="image/png" href="img/favicon.png" />

    <!-- Bootstrap 4 / Bootstrap Icons -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css"
    />
    <link href="css/stylesprounap.css" rel="stylesheet" />

    <style>
      @font-face {
        font-family: "Chillax Variable";
        src: url("../fonts/Chillax Variable.woff2") format("woff2");
        font-weight: 100 900;
        font-display: swap;
      }

      body {
        font-family: "Chillax Variable", Arial, sans-serif;
      }
    </style>
  </head>

  <body class="bg-light">

    <!-- Navbar -->
    <?php
        require_once 'includes/nav2.php'; 
    ?>
    <!-- fin del nav -->

    <!-- Sección 6A Únete -->
    <section
      class="section-featured bg-white"
      style="
        background-image: url('img/pimg23.jpg');
        background-size: cover;
        min-height: 1000px;
      "
    >
      <div class="container-fluid px-0">
        <div
          class="d-flex flex-row align-items-stretch"
          style="min-height: 1000px"
        >
          <!-- Izquierdo: barra amarilla -->
          <div
            class="container-izquierdo d-flex flex-column justify-content-between"
            style="width: 50px; min-width: 50px; max-width: 50px"
          ></div>
          <!-- columna espaciadora -->
          <div
            class="container-izquierdo d-flex flex-column justify-content-between"
            style="width: 850px; min-width: 150px; max-width: 850px"
          ></div>
          <!-- Contenido: verde, título, texto, botón -->
          <div
            class="container-contenido d-flex flex-column justify-content-center align-items-start p-4"
            style="flex: 2 1 320px; min-width: 240px"
          >
            <h2 class="display-4 fw-bold mb-3" style="color: #e7e309">
              Únete a Prounap
            </h2>
            <p class="text-white lead mb-3">La Red está en desarrollo.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Sección 6 Únete -->
    <section
      class="section-featured bg-white"
      style="
        background-image: url('img/pimg21.jpg');
        background-size: cover;
        min-height: 1000px;
      "
    >
      <div class="container-fluid px-0">
        <div
          class="d-flex flex-row align-items-stretch"
          style="min-height: 1000px"
        >
          <!-- Izquierdo: barra amarilla -->
          <div
            class="container-izquierdo d-flex flex-column justify-content-between"
            style="width: 50px; min-width: 50px; max-width: 50px"
          ></div>
          <!-- Flor: imagen de fondo -->
          <div
            class="container-flor d-flex flex-column justify-content-center align-items-center"
            style="
              flex: 1 1 180px;
              min-width: 120px;
              max-width: 340px;
              background: url('img/pimg22.jpg') center center / cover no-repeat;
              border-radius: 0;
            "
          >
            <!-- Si quieres poner una flor SVG o imagen adicional, agrégala aquí -->
          </div>
          <!-- columna espaciadora -->
          <div
            class="container-izquierdo d-flex flex-column justify-content-between"
            style="width: 150px; min-width: 150px; max-width: 150px"
          ></div>
          <!-- Contenido: verde, título, texto, botón -->
          <div
            class="container-contenido d-flex flex-column justify-content-center align-items-start p-4"
            style="flex: 2 1 320px; min-width: 240px"
          >
            <h2 class="display-4 fw-bold mb-3" style="color: #fff">
              Únete a Prounap
            </h2>
            <p class="text-white lead mb-3">La Red está en desarrollo.</p>
            <p class="text-white lead mb-3">
              Pronto habilitaremos un formulario de registro. Ahora mismo,
              puedes escribir a secretaria@prounap.cl y se pondrán en contacto
              contigo.
            </p>
            <p class="text-white lead mb-3">
              Te invitamos a ser parte de la Red de profesionales y exalumnos de
              Universidad Arturo Prat.
            </p>
            <p class="text-white lead mb-3">
              La clave está en aprender a ser competitivos con colaboración
              interna.
            </p>
            <a href="https://forms.gle/nrQHLMV4NoqmAdMv9" class="btn btn-pill mt-3">Únete a Prounap</a>
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
      document.addEventListener("DOMContentLoaded", function () {
        var tooltipTriggerList = [].slice.call(
          document.querySelectorAll('[data-bs-toggle="tooltip"]')
        );
        tooltipTriggerList.forEach(function (tooltipTriggerEl) {
          new bootstrap.Tooltip(tooltipTriggerEl);
        });
      });
    </script>

    <script>
      document.addEventListener("DOMContentLoaded", function () {
        var navBtn = document.getElementById("navPanelBtn");
        var navPanel = document.getElementById("navPanel");
        var hideTimeout;

        // Mostrar el panel al hacer clic
        navBtn.addEventListener("click", function (e) {
          e.preventDefault();
          navPanel.classList.toggle("show");
        });

        // Mostrar el panel si está visible y el mouse entra (evita ocultamiento accidental)
        navBtn.addEventListener("mouseenter", function () {
          if (navPanel.classList.contains("show")) {
            clearTimeout(hideTimeout);
          }
        });
        navPanel.addEventListener("mouseenter", function () {
          clearTimeout(hideTimeout);
        });

        // Ocultar el panel cuando el mouse sale del botón y del panel
        navBtn.addEventListener("mouseleave", function () {
          hideTimeout = setTimeout(function () {
            navPanel.classList.remove("show");
          }, 250); // ligerísimo retardo para experiencia suave
        });
        navPanel.addEventListener("mouseleave", function () {
          hideTimeout = setTimeout(function () {
            navPanel.classList.remove("show");
          }, 250);
        });

        // También ocultar el panel al hacer clic fuera de él y del botón
        document.addEventListener("click", function (e) {
          if (!navPanel.contains(e.target) && e.target !== navBtn) {
            navPanel.classList.remove("show");
          }
        });

        // Al hacer clic en algún botón del panel, cerrar
        navPanel.querySelectorAll("a.btn").forEach(function (btn) {
          btn.addEventListener("click", function () {
            navPanel.classList.remove("show");
          });
        });
      });
    </script>

    <script>
      // Quiénes Somos
      document.addEventListener("DOMContentLoaded", function () {
        var navBtnQuienes = document.getElementById("navPanelQuienesBtn");
        var navPanelQuienes = document.getElementById("navPanelQuienes");
        var hideTimeoutQuienes;

        navBtnQuienes.addEventListener("click", function (e) {
          e.preventDefault();
          navPanelQuienes.classList.toggle("show");
        });

        navBtnQuienes.addEventListener("mouseenter", function () {
          if (navPanelQuienes.classList.contains("show")) {
            clearTimeout(hideTimeoutQuienes);
          }
        });
        navPanelQuienes.addEventListener("mouseenter", function () {
          clearTimeout(hideTimeoutQuienes);
        });

        navBtnQuienes.addEventListener("mouseleave", function () {
          hideTimeoutQuienes = setTimeout(function () {
            navPanelQuienes.classList.remove("show");
          }, 250);
        });
        navPanelQuienes.addEventListener("mouseleave", function () {
          hideTimeoutQuienes = setTimeout(function () {
            navPanelQuienes.classList.remove("show");
          }, 250);
        });

        document.addEventListener("click", function (e) {
          if (
            !navPanelQuienes.contains(e.target) &&
            e.target !== navBtnQuienes
          ) {
            navPanelQuienes.classList.remove("show");
          }
        });

        navPanelQuienes.querySelectorAll("a.btn").forEach(function (btn) {
          btn.addEventListener("click", function () {
            navPanelQuienes.classList.remove("show");
          });
        });
      });
    </script>

    <script>
      // Red Profesional
      document.addEventListener("DOMContentLoaded", function () {
        var navBtnQuienes = document.getElementById("navPanelRedBtn");
        var navPanelQuienes = document.getElementById("navPanelRed");
        var hideTimeoutQuienes;

        navBtnQuienes.addEventListener("click", function (e) {
          e.preventDefault();
          navPanelQuienes.classList.toggle("show");
        });

        navBtnQuienes.addEventListener("mouseenter", function () {
          if (navPanelQuienes.classList.contains("show")) {
            clearTimeout(hideTimeoutQuienes);
          }
        });
        navPanelQuienes.addEventListener("mouseenter", function () {
          clearTimeout(hideTimeoutQuienes);
        });

        navBtnQuienes.addEventListener("mouseleave", function () {
          hideTimeoutQuienes = setTimeout(function () {
            navPanelQuienes.classList.remove("show");
          }, 250);
        });
        navPanelQuienes.addEventListener("mouseleave", function () {
          hideTimeoutQuienes = setTimeout(function () {
            navPanelQuienes.classList.remove("show");
          }, 250);
        });

        document.addEventListener("click", function (e) {
          if (
            !navPanelQuienes.contains(e.target) &&
            e.target !== navBtnQuienes
          ) {
            navPanelQuienes.classList.remove("show");
          }
        });

        navPanelQuienes.querySelectorAll("a.btn").forEach(function (btn) {
          btn.addEventListener("click", function () {
            navPanelQuienes.classList.remove("show");
          });
        });
      });
    </script>

    <script>
      // Red Profesional
      document.addEventListener("DOMContentLoaded", function () {
        var navBtnQuienes = document.getElementById("navPanelReflexionesBtn");
        var navPanelQuienes = document.getElementById("navPanelReflexiones");
        var hideTimeoutQuienes;

        navBtnQuienes.addEventListener("click", function (e) {
          e.preventDefault();
          navPanelQuienes.classList.toggle("show");
        });

        navBtnQuienes.addEventListener("mouseenter", function () {
          if (navPanelQuienes.classList.contains("show")) {
            clearTimeout(hideTimeoutQuienes);
          }
        });
        navPanelQuienes.addEventListener("mouseenter", function () {
          clearTimeout(hideTimeoutQuienes);
        });

        navBtnQuienes.addEventListener("mouseleave", function () {
          hideTimeoutQuienes = setTimeout(function () {
            navPanelQuienes.classList.remove("show");
          }, 250);
        });
        navPanelQuienes.addEventListener("mouseleave", function () {
          hideTimeoutQuienes = setTimeout(function () {
            navPanelQuienes.classList.remove("show");
          }, 250);
        });

        document.addEventListener("click", function (e) {
          if (
            !navPanelQuienes.contains(e.target) &&
            e.target !== navBtnQuienes
          ) {
            navPanelQuienes.classList.remove("show");
          }
        });

        navPanelQuienes.querySelectorAll("a.btn").forEach(function (btn) {
          btn.addEventListener("click", function () {
            navPanelQuienes.classList.remove("show");
          });
        });
      });
    </script>
  </body>
</html>
