<?php
ini_set('display_errors', 1);

ini_set('display_startup_errors', 1);

error_reporting(E_ALL);
//Codificación UTF-8
$opciones = [PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"];
try {
    $db = new PDO('mysql:host=localhost;dbname=protectora', 'petlove', 'mascota');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch (PDOException $e){
    echo 'Falló la conexión: ' . $e->getMessage(); 
}
// Recolectar y limpiar datos del formulario
$correo = trim($_POST['email']);
$contrasena = trim($_POST['password']);
// Validar campos obligatorios
if (empty($correo) || empty($contrasena)) {
    echo "<link rel='stylesheet' href='./Css_Paginas/Errores.css'>
    <div class='error'>Por favor completa todos los campos.</div>";
    exit;
}
// Verificar si el usuario es adoptante
$registros_adoptante = $db->prepare("SELECT * FROM Adoptante WHERE Correo = :correo");
$registros_adoptante ->bindParam(':correo', $correo);
$registros_adoptante ->execute();

   if ($registros_adoptante->rowCount() > 0) {
    $fila = $registros_adoptante->fetch(PDO::FETCH_ASSOC);
    if (password_verify($contrasena, $fila['Contraseña'])) {
       // Sesión para adoptante
         $nombre= $fila['Nombre'];
        setcookie("rol", "adoptante", time() + (3600), "/");
        setcookie("nombre",$nombre, time() + (3600), "/"); 
        echo '<!DOCTYPE html>
            <html lang="es">
                <head>
                    <meta charset="UTF-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <title>Registro Exitoso</title>
                </head>
                <body class="cuerpo">
                    <div class="alertas">
                        <h1>Inicio de sesion exitoso</h1>
                        <a href="Home_Petlover.php"> Ir al inicio</a>
                    </div>
                </body>
            </html>
            ';
            exit;
    } else {
        echo "<link rel='stylesheet' href='./Css_Paginas/Errores.css'>
    <div class='error'>Contraseña incorrecta.</div";
        exit;
    }
}
// Verificar si el usuario es una protectora
$registros_protectora = $db->prepare("SELECT * FROM Refugio WHERE Correo = :correo");
$registros_protectora ->bindParam(':correo', $correo);
$registros_protectora ->execute();
if ($registros_protectora->rowCount() > 0) {
    $fila = $registros_protectora->fetch(PDO::FETCH_ASSOC);
    if (password_verify($contrasena, $fila['Contraseña'])) {
        $nombre= $fila['Nombre'];
        // Sesión para protectora
        setcookie("rol", "protectora", time() + (3600), "/");
        setcookie("nombre",$nombre, time() + (3600), "/"); 
        echo '<!DOCTYPE html>
            <html lang="es">
                <head>
                    <meta charset="UTF-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <title>Registro Exitoso</title>
                </head>
                <body class="cuerpo">
                    <div class="alertas">
                        <h1>Inicio de sesión exitoso</h1>
                        <a href="/Paginas_web/Home_Petlover.html"> Ir al inicio</a>
                    </div>
                </body>
            </html>
            ';
            exit;
    } else {
        echo "<link rel='stylesheet' href='./Css_Paginas/Errores.css'>
    <div class='error'>Contraseña incorrecta.</div>";
        exit;
    }
}
echo "<link rel='stylesheet' href='./Css_Paginas/Errores.css'>
    <div class='error'>Correo no encontrado.</div>";
?>
