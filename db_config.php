<?php
// =========================================================
// A7: db_config.php - Configuración de la Conexión a MySQL y Funciones de Seguridad
// Este archivo debe ser incluido (require_once) en cualquier script que use la DB.
// =========================================================

// 1. CREDENCIALES DE LA BASE DE DATOS
// ------------------------------------
// Estas constantes se usan para establecer la conexión PDO.
define('DB_HOST', 'localhost');  // Nombre del servidor de la DB
define('DB_NAME', 'prounapc_bd'); // Nombre de la DB creada
define('DB_USER', 'prounapc');  // Tu usuario de MySQL
define('DB_PASS', '(@72LaGCh3L4zu'); // Tu contraseña de MySQL
define('DB_CHARSET', 'utf8mb4'); // Conjunto de caracteres recomendado para emojis y UTF-8

// 2. INTENTO DE CONEXIÓN USANDO PDO
// ------------------------------------
try {
    // Cadena de conexión (DSN)
    $dsn = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=" . DB_CHARSET;
    
    // Opciones de configuración de PDO para seguridad y manejo de errores
    $options = [
        // Lanzar excepciones en caso de error (facilita la depuración)
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, 
        // Devolver resultados como array asociativo por defecto
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,     
        // Desactivar emulación de sentencias preparadas (mejora la seguridad)
        PDO::ATTR_EMULATE_PREPARES   => false,                
    ];

    // Crea la instancia de conexión, almacenada en la variable $pdo
    $pdo = new PDO($dsn, DB_USER, DB_PASS, $options);
    
} catch (\PDOException $e) {
    // Manejo de errores de conexión: registrar el error y mostrar un mensaje genérico.
    error_log("Error de conexión a la base de datos: " . $e->getMessage());
    // Terminamos la ejecución si no podemos conectar, es un error crítico.
    die("Error crítico del sistema. Contacte al administrador.");
}

// =========================================================
// 3. FUNCIONES DE HASHING Y VERIFICACIÓN DE CONTRASEÑAS (SEGURIDAD)
// =========================================================

/**
 * Genera un hash seguro para la contraseña usando PASSWORD_DEFAULT (Bcrypt).
 * @param string $password La contraseña en texto plano.
 * @return string El hash seguro generado.
 */
function hash_password(string $password): string 
{
    // Usa PASSWORD_DEFAULT que, a partir de PHP 7.4, es Bcrypt y maneja el 'salt' automáticamente.
    return password_hash($password, PASSWORD_DEFAULT);
}

/**
 * Verifica si una contraseña ingresada coincide con un hash almacenado.
 * @param string $password La contraseña ingresada.
 * @param string $hash El hash almacenado en la base de datos.
 * @return bool True si la contraseña es correcta, False en caso contrario.
 */
function verify_password(string $password, string $hash): bool
{
    // Función segura que previene ataques de tiempo.
    return password_verify($password, $hash);
}

// ---------------------------------------------------------
// NOTA: El archivo termina aquí. No debe haber código HTML.
// ---------------------------------------------------------

// No es necesario cerrar el bloque PHP si es el único contenido del archivo, 
// pero se incluye para completar la estructura.
?>