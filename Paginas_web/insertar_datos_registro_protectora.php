<?php
ini_set('display_errors', 1);

ini_set('display_startup_errors', 1);

error_reporting(E_ALL);
// Conexión a la base de datos usando PDO
try {
    $db = new PDO('mysql:host=localhost;dbname=protectora', 'petlove', 'mascota');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // Conexión a la base de datos usando PDO
    echo 'Falló la conexión: ' . $e->getMessage();
}
// Recolección y limpieza de los datos enviados por POST
$nombre = trim($_POST['nombre']);
$ciudad = trim($_POST['ciudad']);
$correo = trim($_POST['correo']);
$contrasena = trim($_POST['contrasena']);
$confirmar_contrasena = trim($_POST['confirmar_contrasena']);
// Expresiones regulares para validar correo y contraseña segura
$requisitos_correo = "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9._%+-]+\.[a-zA-Z]{2,}$/";
$requisitos_contrasena = "/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[@$!%*?&])[a-zA-Z\d@$!%*?&]{8,}$/";
// Verifica que ningún campo esté vacío
$valido_correo = preg_match($requisitos_correo, $correo);
$valido_contrasena = preg_match($requisitos_contrasena, $contrasena);
if (empty($nombre) || empty($ciudad) || empty($correo) || empty($contrasena) || empty($confirmar_contrasena)) {
    echo "<link rel='stylesheet' href='./Css_Paginas/Errores.css'>
    <div class='error'>Por favor, no dejes ningun hueco vacio en el formulario<div class='error'>";
    exit;
}
// Verifica que las contraseñas coincidan
if ($contrasena !== $confirmar_contrasena) {
    echo "<link rel='stylesheet' href='./Css_Paginas/Errores.css'>
    <div class='error'>Las contraseñas no coinciden.</div>";
    exit;
}
// Valida el formato del correo
if (!$valido_correo) {
    echo "<link rel='stylesheet' href='./Css_Paginas/Errores.css'>
    <div class='error'>El correo no es válido.</div>";
    exit;
}
// Valida la fortaleza de la contraseña
if (!$valido_contrasena) {
    echo "<link rel='stylesheet' href='./Css_Paginas/Errores.css'>
    <div class='error'>La Contraseña no es valido.</div>";
    exit;
}
// Verifica si el correo ya está registrado como Adoptante
$registros_adoptate = $db->prepare("SELECT * FROM Adoptante WHERE Correo = :correo");
$registros_adoptate->bindParam(':correo', $correo);
$registros_adoptate->execute();
// Hashea la contraseña antes de almacenarla
if ($registros_adoptate->rowCount() > 0) {
    echo "<link rel='stylesheet' href='./Css_Paginas/Errores.css'>
    <div class='error'>Este correo ya esta registrado, por favor, inténtalo con otro correo</div>";
    exit;
}
// Inserta el nuevo usuario en la tabla Refugio
$registros_protectora = $db->prepare("SELECT * FROM Refugio WHERE Correo = :correo");
$registros_protectora->bindParam(':correo', $correo);
$registros_protectora->execute();

if ($registros_protectora->rowCount() > 0) {
    echo "<link rel='stylesheet' href='./Css_Paginas/Errores.css'>
    <div class='error'>Este correo ya esta registrado, por favor, intelo con otro correo</div>";
    exit;
}
//hashear pass
$contrasena_hasheada = password_hash($contrasena, PASSWORD_DEFAULT);
$registrar_usuarios = $db->prepare("INSERT INTO Refugio (Nombre, Ciudad, Correo, Contraseña) VALUES (:nombre,:ciudad,:correo,:contrasena)");
$registrar_usuarios->bindParam(':nombre', $nombre);
$registrar_usuarios->bindParam(':correo', $correo);
$registrar_usuarios->bindParam(':ciudad', $ciudad);
$registrar_usuarios->bindParam(':contrasena', $contrasena_hasheada);
$registrar_usuarios->execute();
// Si el registro fue exitoso:
if ($registrar_usuarios) {
    setcookie("rol", "protectora", time() + (3600), "/");
    setcookie("nombre", $nombre, time() + (3600), "/");
    // Envía correo de bienvenida
    include 'mail_registro.php';
    enviarCorreosregistro($correo, $nombre);
    // Muestra página de confirmación
    echo '<!DOCTYPE html>
            <html lang="es">
                <head>
                    <meta charset="UTF-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <link rel="stylesheet" href="./Css_Paginas/insertar_datos_registro.css">
                    <title>Registro Exitoso</title>
                </head>
                <body class="cuerpo">
                    <div class="alertas">
                        <h1>Registro Exitoso</h1>
                        <a href="Home_Petlover.php"> Ir al inicio</a>
                    </div>
                </body>
            </html>
            ';
    exit;
} else {
    // Si algo falla en la inserción
    echo "Error al registrar usuario: " . $db->errorInfo()[2];
    exit;
}
