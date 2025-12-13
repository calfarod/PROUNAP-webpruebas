<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once "includes/conexion.php";

$correo   = $_POST['correo']   ?? '';
$password = $_POST['password'] ?? '';

// ¡IMPORTANTE! Usar nombre de variable acorde con la consulta
$sql = "SELECT * FROM usuarios WHERE correo = :correo AND activo = 1 LIMIT 1";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':correo', $correo);
$stmt->execute();
$usuario = $stmt->fetch(PDO::FETCH_ASSOC);

if ($usuario && password_verify($password, $usuario['password_hash'])) {
    session_start();
    $_SESSION['usuario_id'] = $usuario['id'];
    //$_SESSION['usuario']    = $usuario['correo'];
    header("Location: login-exito.php");
    exit();
} else {
    header("Location: login-fallo.php");
    exit();
}
