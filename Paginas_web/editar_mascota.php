<?php
ini_set('display_errors', 1);

ini_set('display_startup_errors', 1);

error_reporting(E_ALL);
try {
    $db = new PDO('mysql:host=localhost;dbname=protectora', 'petlove', 'mascota');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $chip= trim($_POST['Chip_ID']);
    $nuevo_estado= trim($_POST['Estado']);
    $datos_animales = $db->prepare("UPDATE Animal SET Estado = :nuevo_estado WHERE Chip_ID = :chip");
    $datos_animales->bindParam(':chip', $chip);
    $datos_animales->bindParam(':nuevo_estado', $nuevo_estado);
    $datos_animales-> execute();
    echo "Estado Acualizado Correctamente.";
}catch (PDOException $e){
    echo 'Falló la conixion: ' . $e->getMessage(); 
}
?>
