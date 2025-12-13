<?php
$host = 'localhost';       // normalmente localhost
$db   = 'c2760646_prounap';
$user = 'c2760646';      // usuario MySQL
$pass = 'Brasil2025';   // contraseña MySQL
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $conn = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
    error_log("Error de conexión: " . $e->getMessage()); // registrar en log
    die("El servicio no está disponible en este momento."); // mensaje genérico
}
