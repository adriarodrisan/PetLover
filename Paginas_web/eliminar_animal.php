<?php
ini_set('display_errors', 1);

ini_set('display_startup_errors', 1);

error_reporting(E_ALL);
try {
    $db = new PDO('mysql:host=localhost;dbname=protectora', 'petlove', 'mascota');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $chip= trim($_POST['Chip_ID']);
    $eliminar_animales = $db->prepare("DELETE FROM Animal WHERE Chip_ID = :chip");
    $eliminar_animales->bindParam(':chip', $chip);
    $eliminar_animales-> execute();
    if ($eliminar_animales->rowCount() >0){
    echo "El animal con chip $chip a sido eliminado correctamente.";
    }else {
        echo "No hay ningun animal con el chip $chip.";
    }
}catch (PDOException $e){
    echo 'Falló la conixion: ' . $e->getMessage(); 
}
?>