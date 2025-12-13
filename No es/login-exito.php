<?php
session_start();

// -------------------------
// 1️⃣ Verificar sesión
// -------------------------
if (!isset($_SESSION['usuario_id'])) {
    header("Location: login.html");
    exit();
}

// -------------------------
// 2️⃣ Conectar a la base de datos (opcional si necesitas datos del usuario)
// -------------------------
require 'includes/conexion.php'; // Archivo que contiene la conexión PDO

$stmt = $conn->prepare("SELECT correo FROM usuarios WHERE id = ?");
$stmt->execute([$_SESSION['usuario_id']]);
$usuario = $stmt->fetch(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área Privada - PROUNAP</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="icon" href="img/favicon.png" type="image/png">
</head>
<body>

    <!-- ======================= HEADER Y MENÚ ======================= -->
    <header class="header">
        <div class="container">
            <a href="index.html" class="logo">espaacios</a>
            <nav class="main-nav">
                <ul class="nav-links">
                    <li><a href="index.html#home">Home</a></li>
                    <li><a href="index.html#reportaje1">Reportaje 1</a></li>
                    <li><a href="index.html#reportaje2">Reportaje 2</a></li>
                    <li><a href="logout.php" class="login-button">Logout</a></li>
                </ul>
            </nav>
            <button class="hamburger" aria-label="Abrir menú">
                <div class="bar"></div>
            </button>
        </div>
    </header>

    <main>
        <!-- ======================= SECCIÓN HERO PRIVADA ======================= -->
        <section id="home" class="hero-section">
            <div class="container">
                <div class="hero-content">
                    <h1>[ ESPACIOS - ÉXITO PRIVADA PHP ]</h1>
                    <p>Bienvenido, <?php echo htmlspecialchars($usuario['correo']); ?>. Has ingresado correctamente a tu área privada.</p>
                </div>
            </div>
        </section>

        <!-- ======================= CONTENIDO PRIVADO ======================= -->
        <section class="p-section">
            <div class="container">
                <h2>Contenido Exclusivo</h2>
                <p>Aquí puedes mostrar la información exclusiva para usuario <?php echo htmlspecialchars($usuario['correo']); ?> registrado.</p>
            </div>
        </section>
    </main>

    <!-- ======================= FOOTER ======================= -->
    <footer class="footer">
        <div class="container">
            <p>espaacios</p>
        </div>
    </footer>

    <!-- ======================= SCRIPT HAMBURGER ======================= -->
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