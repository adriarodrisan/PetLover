<?php
ini_set('display_errors', 1);

ini_set('display_startup_errors', 1);

error_reporting(E_ALL);
$opciones = [PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"];
try {
    $db = new PDO('mysql:host=localhost;dbname=protectora', 'petlove', 'mascota');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch (PDOException $e){
    echo 'Falló la conixion: ' . $e->getMessage(); 
}
/*session_start();
$servername = 'localhost'; // este sera el nombre de nuestro servidor
$database = 'protectora'; // nombre bd
$username = 'petlove'; // Usuario bd
$password = 'mascota'; // pass base de datos
$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_errno){
    echo 'fallo al conectar';
    die("Conexion fallida: ". $conn->connect_error);
}*/
$correo = trim($_POST['email']);
$contrasena = trim($_POST['password']);
if (empty($correo) || empty($contrasena)) {
    echo "Por favor completa todos los campos.";
    exit;
}
$registros_adoptante = $db->execute("SELECT * FROM adoptante WHERE Correo = '$correo'");
//$sql_adoptante = "SELECT * FROM adoptante WHERE Correo = '$correo'";
//$resultado_adoptante = mysqli_query($conn, $sql_adoptante);
//if (mysqli_num_rows($resultado_adoptante) > 0) {
   if ($registros_adoptante->rowCount() > 0) {
    $fila = $registros_adoptante->fetch(PDO::FETCH_ASSOC);
    if (password_verify($contrasena, $fila['Contraseña'])) {
        //$_SESSION['usuario'] = $fila['Nombre'];
        //$_SESSION['rol'] = 'refugio';
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
                        <a href="/Paginas_web/Home_Petlover.html"> Ir al inicio</a>
                    </div>
                </body>
            </html>
            ';
            exit;
    } else {
        echo "Contraseña incorrecta.";
        exit;
    }
}
$registros_protectora = $db->execute("SELECT * FROM refugio WHERE Correo = '$correo'");
   if ($registros_protectora->rowCount() > 0) {
    $fila = $registros_protectora->fetch(PDO::FETCH_ASSOC);
    if (password_verify($contrasena, $fila['Contraseña'])) {
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
                        <a href="/Paginas_web/Home_Petlover.html"> Ir al inicio</a>
                    </div>
                </body>
            </html>
            ';
            exit;
    } else {
        echo "Contraseña incorrecta.";
        exit;
    }
}
echo "Correo no encontrado.";
?>
