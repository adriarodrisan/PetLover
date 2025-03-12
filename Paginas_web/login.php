<?php
session_start();
include('conexion.php');

if (!$conn) {
    die("Conexion fallida: " . mysqli_connect_error());
}
$correo = trim($_POST['correo']);
$contrasena = trim($_POST['contrasena']);

if (empty($correo) || empty($contrasena)) {
    echo "Por favor completa todos los campos.";
    exit;
}
?>