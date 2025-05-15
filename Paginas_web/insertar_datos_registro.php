<?php
ini_set('display_errors', 1);

ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// Conexión a la base de datos usando PDO
try {
    $db = new PDO('mysql:host=localhost;dbname=protectora', 'petlove', 'mascota');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Falló la conixion: ' . $e->getMessage();
}
// Recolección de datos del formulario y eliminación de espacios
$dni = trim($_POST['dni']);
$nombre = trim($_POST['nombre']);
$telefono = trim($_POST['telefono']);
$correo = trim($_POST['correo']);
$contrasena = trim($_POST['contrasena']);
$confirmar_contrasena = trim($_POST['confirmar_contrasena']);
// Validaciones usando expresiones regulares
$requisitos_dni = "/^\d{8}[A-Za-z]$/";
$requisitos_telefono = "/^[679]\d{8}$/";
$requisitos_correo = "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9._%+-]+\.[a-zA-Z]{2,}$/";
$requisitos_contrasena = "/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[@$!%*?&])[a-zA-Z\d@$!%*?&]{8,}$/";
//revisar que los campos no sean null
$valido_dni = preg_match($requisitos_dni, $dni);
$valido_telefono = preg_match($requisitos_telefono, $telefono);
$valido_correo = preg_match($requisitos_correo, $correo);
$valido_contrasena = preg_match($requisitos_contrasena, $contrasena);
// Verifica que ningún campo esté vacío
if (empty($dni) || empty($nombre) || empty($telefono) || empty($correo) || empty($contrasena) || empty($confirmar_contrasena)) {
    echo "Por favor, no dejes ningun hueco vacio en el formulario";
    exit;
}
//verificar las contraseñas que sean iguales
if ($contrasena !== $confirmar_contrasena) {
    echo "Las cotraseñas no coinciden.";
    exit;
}
// Validaciones individuales
if (!$valido_dni) {
    echo "El DNI no es valido.";
    exit;
}
if (!$valido_telefono) {
    echo "El Teléfono no es valido.";
    exit;
}
if (!$valido_correo) {
    echo "El Correo no es valido.";
    exit;
}
if (!$valido_contrasena) {
    echo "El Contraseña no es valido.";
    exit;
}
// Comprobamos si el correo ya está registrado en 'Adoptante'
$registros_adoptate = $db->prepare("SELECT * FROM Adoptante WHERE Correo = :correo");
$registros_adoptate->bindParam(':correo', $correo);
$registros_adoptate->execute();

if ($registros_adoptate->rowCount() > 0) {
    echo "<link rel='stylesheet' href='./Css_Paginas/Errores.css'>
    <div class='error'>Este correo ya esta registrado, por favor, intelo con otro correo</div>";
    exit;
}
// Comprobamos si el correo ya está registrado en 'Refugio'
$registros_protectora = $db->prepare("SELECT * FROM Refugio WHERE Correo = :correo");
$registros_protectora->bindParam(':correo', $correo);
$registros_protectora->execute();

if ($registros_protectora->rowCount() > 0) {
    echo "<link rel='stylesheet' href='./Css_Paginas/Errores.css'>
    <div class='error'>Este correo ya esta registrado, por favor, intelo con otro correo</div>";
    exit;
}
// Hashear la contraseña para guardarla de forma segura
$contrasena_hasheada = password_hash($contrasena, PASSWORD_DEFAULT);
// Insertar nuevo adoptante en la base de datos
$registrar_usuarios = $db->prepare("INSERT INTO Adoptante (DNI, Nombre, Telefono, Correo, Contraseña) VALUES (:dni, :nombre,:telefono,:correo,:contrasena)");
$registrar_usuarios->bindParam(':dni', $dni);
$registrar_usuarios->bindParam(':nombre', $nombre);
$registrar_usuarios->bindParam(':correo', $correo);
$registrar_usuarios->bindParam(':telefono', $telefono);
$registrar_usuarios->bindParam(':contrasena', $contrasena_hasheada);
$registrar_usuarios->execute();
// Si el registro fue exitoso:
if ($registrar_usuarios) {

    setcookie("rol", "adoptante", time() + (3600), "/");
    setcookie("nombre", $nombre, time() + (3600), "/");
    // Enviar correo de confirmación
    include 'mail_registro.php';
    enviarCorreosregistro($correo, $nombre);
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
    echo "Error al registrar usuario: " . $db->errorInfo()[2];
    exit;
}
