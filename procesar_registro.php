<?php
// A3: procesar_registro.php - Script que procesa el formulario de registro

// =========================================================
// 1. DEPENDENCIAS Y CONFIGURACIÓN CRÍTICA
// =========================================================

// Incluimos la conexión a la DB ($pdo) y las funciones de hashing (A7)
require_once 'db_config.php'; 

// Clave Secreta de reCAPTCHA: ¡REEMPLAZA ESTO CON TU CLAVE SECRETA REAL!
define('RECAPTCHA_SECRET_KEY', 'TU_CLAVE_SECRETA_RECAPTCHA');

// =========================================================
// 2. RECUPERACIÓN Y SANITIZACIÓN DE DATOS (POST)
// =========================================================

// Verificamos que la solicitud sea POST (si el usuario accede directamente, esto fallará)
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header("Location: register.php"); // Redirigir al formulario
    exit();
}

// Usamos filter_input para sanitizar y validar los datos del formulario (A2)
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
// Para la contraseña, solo la limpiamos de tags, el hash la protegerá
$password = filter_input(INPUT_POST, 'password');
$recaptchaToken = filter_input(INPUT_POST, 'recaptchaToken');

// Verificación inicial de datos recibidos
if (!$email || !$password || !$recaptchaToken || strlen($password) < 8) {
    // Aquí puedes redirigir con un mensaje de error más específico
    die("Error en los datos de entrada o contraseña muy corta (mínimo 8 caracteres).");
}

// =========================================================
// 3. VALIDACIÓN I: GOOGLE RECAPTCHA (Seguridad contra Bots)
// =========================================================

try {
    // Construimos la URL para la verificación servidor-a-servidor con Google
    $url = "https://www.google.com/recaptcha/api/siteverify?secret=" . RECAPTCHA_SECRET_KEY . "&response=" . $recaptchaToken;
    
    // Hacemos la solicitud a Google
    $response = file_get_contents($url);
    $responseKeys = json_decode($response, true);

    // Comprobación: debe ser exitosa y el score de riesgo debe ser aceptable (0.0 a 1.0)
    // Usamos 0.5 como umbral de seguridad
    if (!$responseKeys["success"] || $responseKeys["score"] < 0.5) {
        // Rechazar si no pasó el Captcha o si el score es bajo
        die("Error de seguridad: Solicitud considerada de riesgo. Inténtelo de nuevo.");
    }
} catch (Exception $e) {
    error_log("Error en la validación de reCAPTCHA: " . $e->getMessage());
    die("Error interno de seguridad.");
}


// =========================================================
// 4. VALIDACIÓN II: VERIFICACIÓN DE DUPLICIDAD EN DB
// =========================================================

try {
    // Preparamos la consulta para evitar inyecciones SQL (parámetros '?' )
    $stmt = $pdo->prepare("SELECT COUNT(*) FROM users WHERE email = ?");
    $stmt->execute([$email]);
    
    if ($stmt->fetchColumn() > 0) {
        // Si el correo ya existe, terminamos y notificamos
        die("Error: El correo electrónico '$email' ya está registrado.");
    }
} catch (PDOException $e) {
    error_log("Error de DB en verificación de email: " . $e->getMessage());
    die("Error interno del servidor al verificar el email.");
}


// =========================================================
// 5. PREPARACIÓN FINAL DE DATOS (Hashing y Tokens)
// =========================================================

// Generar el hash seguro de la contraseña (Usando la función de A7)
$password_hash = hash_password($password); 

// Generar un token de activación criptográficamente seguro de 64 caracteres hexadecimales
$activation_token = bin2hex(random_bytes(32)); 


// =========================================================
// 6. INSERCIÓN EN LA BASE DE DATOS (CRÍTICO)
// =========================================================

try {
    $sql = "INSERT INTO users (email, password_hash, role, status, activation_token) 
            VALUES (?, ?, ?, 'inactivo', ?)"; // Rol por defecto: 'publico', Estado: 'inactivo'

    $stmt = $pdo->prepare($sql);
    
    // Ejecutamos la inserción con los valores seguros
    $stmt->execute([$email, $password_hash, 'publico', $activation_token]);
    
} catch (PDOException $e) {
    error_log("Error de DB en inserción: " . $e->getMessage());
    die("Error al registrar el usuario. Por favor, intente más tarde.");
}


// =========================================================
// 7. PREPARACIÓN PARA ENVÍO DE EMAIL (CONTINUIDAD A A11)
// =========================================================

// Enlace de activación que se enviará al usuario
$activation_link = "http://tudominio.com/activar.php?token=" . $activation_token;

/*
// Si tuviéramos listo A11 (email_sender.php) y su función:
if (send_activation_email($email, $activation_link)) {
    // Redirección final si todo es exitoso
    header("Location: mensaje_exito.php?email=" . urlencode($email));
    exit();
} else {
    // Manejar el fallo del envío del email. El registro ya está en DB.
    // Podrías redirigir a una página que le pida al usuario reenviar el email.
    die("Registro exitoso, pero falló el envío del correo de activación. Contacte a soporte.");
}
*/

// Temporalmente, redirigimos a una página simple para indicar éxito y continuar el desarrollo.
header("Location: mensaje_exito.php?email=" . urlencode($email));
exit();

// Cerramos la conexión a la DB (aunque PHP lo hace automáticamente)
$pdo = null;

?>