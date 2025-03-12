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
$sql_adoptante = "SELECT * FROM adoptante WHERE Correo = '$correo'";
$resultado_adoptante = mysqli_query($conn, $sql_adoptante);

if (mysqli_num_rows($resultado_adoptante) > 0) {
    $fila = mysqli_fetch_assoc($resultado_adoptante);

    if (password_verify($contrasena, $fila['Contraseña'])) {
        $_SESSION['usuario'] = $fila['Nombre'];
        $_SESSION['rol'] = 'refugio';
        header("Location: Home_Petlover.html");
        exit;
    } else {
        echo "Contraseña incorrecta.";
        exit;
    }
}

echo "Correo no encontrado.";
?>
