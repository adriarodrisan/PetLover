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
$nombre= trim($_POST['Nombre']);
$especie= trim($_POST['Especie']);
$raza= trim($_POST['raza']);
$fecha_nacimiento= trim($_POST['FechaNacimiento']);
$sexo= trim($_POST['Sexo']);
$peso= trim($_POST['Peso']);
$estado= trim($_POST['Estado']);
$imagen= $_FILES['Imagen']['name'];
if(empty($chip)|| empty($nombre)|| empty($especie)|| empty($raza)|| empty($fecha_nacimiento)|| empty($sexo)|| empty($peso)|| empty($imagen)){
    echo "Por favor, no dejes ningun hueco vacio en el formulario";
    exit;
}
//verificar que no hay dos chips iguales
$datos_animales = $db->prepare("SELECT * FROM Animal WHERE Chip_ID = :chip");
$datos_animales->bindParam(':chip', $chip);
$datos_animales-> execute();
if ($datos_animales->rowCount()>0){
    echo "Este animal ya esta registrado porfavor revise el numero de chip que puede estar equivocado.";
    exit;
}
$nombre_protectora = $_COOKIE['nombre'] ?? null;
$datos_protectora= $db->query("SELECT ID FROM Refugio WHERE  Nombre= '$nombre_protectora'");
$datos_protectora-> execute();
$id_protectora = $datos_protectora->fetch(PDO::FETCH_ASSOC);
$protectora= $id_protectora['ID'];
$insert = $db->prepare("INSERT INTO Animal (Chip_ID, Nombre, Especie, raza, FechaNacimiento, Sexo, Peso, Estado, ID_refugio, Imagen) VALUES (:chip, :nombre, :especie, :raza, :fecha, :sexo, :peso, :estado, :refugio, :imagen)");
$insert->execute([
    ':chip' => $chip,
    ':nombre' => $nombre,
    ':especie' => $especie,
    ':raza' => $raza,
    ':fecha' => $fecha_nacimiento,
    ':sexo' => $sexo,
    ':peso' => $peso,
    ':estado' => $estado,
    ':refugio' => $id_protectora,
    ':imagen' => $rutaDestino
]);
    echo '<!DOCTYPE html>
            <html lang="es">
                <head>
                    <meta charset="UTF-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <title>Registro Del Animal Exitoso</title>
                </head>
                <body class="cuerpo">
                    <div class="alertas">
                        <h1>Registro Del Animal Exitoso</h1>
                        <a href="Home_Petlover.php"> Ir al inicio</a>
                    </div>
                </body>
            </html>
            ';
            exit;
}else{
    echo "Error al registrar usuario: ". db->errorInfo()[2];
}
?>