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
$chip= trim($_POST['Chip_ID']);
$nombre= trim($_POST['nombre']);
$especie= trim($_POST['Especie']);
$raza= trim($_POST['raza']);
$fecha_nacimiento= trim($_POST['FechaNacimiento']);
$sexo= trim($_POST['Sexo']);
$peso= trim($_POST['Peso']);
$imagen= trim($_POST['Imagen']);
if(empty($chip)|| empty($nombre)|| empty($especie)|| empty($raza)|| empty($fecha_nacimiento)|| empty($sexo)|| empty($peso)|| empty($imagen)){
    echo "Por favor, no dejes ningun hueco vacio en el formulario";
    exit;
}
?>