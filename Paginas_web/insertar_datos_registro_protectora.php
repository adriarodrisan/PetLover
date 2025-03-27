<?php
ini_set('display_errors', 1);

ini_set('display_startup_errors', 1);

error_reporting(E_ALL);
try {
    $db = new PDO('mysql:host=localhost;dbname=protectora', 'petlove', 'mascota');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch (PDOException $e){
    echo 'Falló la conixion: ' . $e->getMessage(); 
}
/*$servername = 'localhost'; // este sera el nombre de nuestro servidor
$database = 'protectora'; // nombre bd
$username = 'petlove'; // Usuario bd
$password = 'mascota'; // pass base de datos
// creamos conexion
//if (function_exists('mysqli_connect')){
//    echo "mysqli yes";
//}
//echo "intentamos conexion" . $servername . $database.$username.$password;
$conn = new mysqli($servername, $username, $password, $database);
//verificamos la conexion
//echo "este no se muestra";
if ($conn->connect_errno){
    echo 'fallo al conectar';
    die("Conexion fallida: ". $conn->connect_error);
}*/
$dni= trim($_POST['dni']);
$nombre= trim($_POST['nombre']);
$telefono= trim($_POST['telefono']);
$correo= trim($_POST['correo']);
$contrasena= trim($_POST['contrasena']);
$confirmar_contrasena= trim($_POST['confirmar_contrasena']);
//revisar que los campos no sean null
//echo $dni." ".$correo;
if(empty($dni) || empty($nombre) || empty($telefono) || empty($correo) || empty($contrasena) || empty($confirmar_contrasena)){
    echo "Por favor, no dejes ningun hueco vacio en el formulario";
    exit;
}
//verificar las contraseñas que sean iguales
if ($contrasena !== $confirmar_contrasena){
    echo "Las cotraseñas no coinciden.";
    exit;
}
//verificar si el mail esta registrado
$registros_adoptate = $db->prepare("SELECT * FROM adoptante WHERE Correo = :correo");
$registros_adoptate ->bindParam(':correo', $correo);
$registros_adoptate ->execute();
//$verificar_correo_usuario = "SELECT * FROM adoptante WHERE Correo = '$correo'";
//$correo_verificado_usuario = mysqli_query($conn, $verificar_correo_usuario);
//if (mysqli_num_rows($correo_verificado_usuario)>0){
if ($registros_adoptate->rowCount() > 0) {
    echo "Este correo ya esta registrado, por favor, intelo con otro correo";
    exit;
}
$registros_protectora = $db->prepare("SELECT * FROM refugio WHERE Correo = :correo");
$registros_protectora ->bindParam(':correo', $correo);
$registros_protectora ->execute();
//$verificar_correo_protectora = "SELECT * FROM refugio WHERE Correo = '$correo'";
//$correo_verificado_protectora = mysqli_query($conn, $verificar_correo_protectora);
//if (mysqli_num_rows($correo_verificado_protectora)>0){
if ($registros_protectora->rowCount() > 0) {
    echo "Este correo ya esta registrado, por favor, intelo con otro correo";
    exit;
}
//hashear pass
$contrasena_hasheada = password_hash($contrasena, PASSWORD_DEFAULT);
$registrar_usuarios = $db->prepare("INSERT INTO adoptante (DNI, Nombre, Telefono, Correo, Contraseña) VALUES (:dni, :nombre,:telefono,:correo,:contrasena)");
$registrar_usuarios ->bindParam(':dni', $dni);
$registrar_usuarios ->bindParam(':nombre', $nombre);
$registrar_usuarios ->bindParam(':correo', $correo);
$registrar_usuarios ->bindParam(':telefono', $telefono);
$registrar_usuarios ->bindParam(':contrasena', $contrasena_hasheada);
$registrar_usuarios ->execute();
//$registrar_usuarios = "INSERT INTO adoptante (DNI, Nombre, Telefono, Correo, Contraseña) VALUES ('$dni', '$nombre','$telefono','$correo','$contrasena_hasheada');";
if ($registrar_usuarios){
//if (mysqli_query($conn, $registrar_usuarios)){
    echo '<!DOCTYPE html>
            <html lang="es">
                <head>
                    <meta charset="UTF-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <title>Registro Exitoso</title>
                </head>
                <body class="cuerpo">
                    <div class="alertas">
                        <h1>Registro Exitoso</h1>
                        <a href="/Paginas_web/Home_Petlover.html"> Ir al inicio</a>
                    </div>
                </body>
            </html>
            ';
            exit;
}else{
   echo "Error al registrar usuario: ". $db->errorInfo()[2];
   exit;
}
?>