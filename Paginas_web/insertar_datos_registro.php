<?php
require_once ('conexion.php');
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
?>