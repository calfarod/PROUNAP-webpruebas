<?php
session_start();

// Si el usuario ya estaba logueado, redirigir al área privada
if (isset($_SESSION['usuario_id'])) {
    header("Location: login-exito.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Fallido - PROUNAP</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="icon" href="img/favicon.png" type="image/png">
</head>
<body>

    <!-- HEADER Y MENÚ -->
    <header class="header">
        <div class="container">
            <a href="index.html" class="logo">espaacios</a>
            <nav class="main-nav">
                <ul class="nav-links">
                    <li><a href="index.html#home">Home</a></li>
                    <li><a href="index.html#reportaje1">Reportaje 1</a></li>
                    <li><a href="index.html#reportaje2">Reportaje 2</a></li>
                    <li><a href="login.html" class="login-button">Login</a></li>
                </ul>
            </nav>
            <button class="hamburger" aria-label="Abrir menú">
                <div class="bar"></div>
            </button>
        </div>
    </header>

    <main>
        <!-- SECCIÓN LOGIN FALLIDO -->
        <section id="login-fallo" class="p-section-light">
            <div class="container">
                <h2 class="section-title">Error de Acceso</h2>
                <p>El correo y la contraseña ingresados no coinciden.</p>
                <p>Por favor, confirme su casilla de correo para que podamos enviarle un mensaje con instrucciones de recuperación de acceso.</p>
                <p><a href="login.html">Volver a intentar login</a></p>
            </div>
        </section>
    </main>

    <!-- FOOTER -->
    <footer class="footer">
        <div class="container">
            <p>espaacios</p>
        </div>
    </footer>

    <!-- SCRIPT HAMBURGER -->
    <script>
        const hamburger = document.querySelector('.hamburger');
        const navLinks = document.querySelector('.nav-links');
        hamburger.addEventListener('click', () => {
            navLinks.classList.toggle('active');
            hamburger.classList.toggle('active');
        });
    </script>

</body>
</html>
