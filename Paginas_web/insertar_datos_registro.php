<?php
require_once ('conexion.php');
if (!$conn){
    die("Conexión fallida: ". mysqli_connect_error());
}
$dni= trim($_POST['dni']);
$nombre= trim($_POST['nombre']);
$telefono= trim($_POST['telefono']);
$correo= trim($_POST['correo']);
$contrasena= trim($_POST['contrasena']);
$confirmar_contrasena= trim($_POST['confirmar_contrasena']);
//revisar que los campos no sean null
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
$verificar_correo_usuario = "SELECT * FROM adoptante WHERE Correo = '$correo'";
$correo_verificado_usuario = mysqli_query($conn, $verificar_correo_usuario);
if (mysqli_num_rows($correo_verificado)>0){
    echo "Este correo ya esta registrado, por favor, intelo con otro correo";
    exit;
}
$verificar_correo_protectora = "SELECT * FROM refugio WHERE Correo = '$correo'";
$correo_verificado_protectora = mysqli_query($conn, $verificar_correo_protectora);
if (mysqli_num_rows($correo_verificado)>0){
    echo "Este correo ya esta registrado, por favor, intelo con otro correo";
    exit;
}
?>