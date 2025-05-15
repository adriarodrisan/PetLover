<?php
ini_set('display_errors', 1);

ini_set('display_startup_errors', 1);

error_reporting(E_ALL);
// Conexión a la base de datos con PDO
try {
    $db = new PDO('mysql:host=localhost;dbname=protectora', 'petlove', 'mascota');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Falló la conexión: ' . $e->getMessage();
}
// Obtener y limpiar datos del formulario
$chip = trim($_POST['Chip_ID']);
$nombre = trim($_POST['Nombre']);
$especie = trim($_POST['Especie']);
$raza = trim($_POST['raza']);
$fecha_nacimiento = trim($_POST['FechaNacimiento']);
$sexo = trim($_POST['Sexo']);
$peso = trim($_POST['Peso']);
$estado = trim($_POST['Estado']);
$imagen = $_FILES['Imagen']['name'];
// Validación: todos los campos obligatorios deben estar presentes
if (empty($chip) || empty($nombre) || empty($especie) || empty($raza) || empty($fecha_nacimiento) || empty($sexo) || empty($peso) || empty($imagen)) {
    echo "<link rel='stylesheet' href='./Css_Paginas/Errores.css'>
    <div class='error'>Por favor, no dejes ningun hueco vacio en el formulario</div>";
    exit;
}
// Verificar que no exista otro animal con el mismo chip
$datos_animales = $db->prepare("SELECT COUNT(*) FROM Animal WHERE Chip_ID = :chip");
$datos_animales->bindParam(':chip', $chip);
$datos_animales->execute();
if ($datos_animales->fetchColumn() > 0) {
    echo "<link rel='stylesheet' href='./Css_Paginas/Errores.css'>
    <div class='error'>Este animal ya esta registrado por favor revise el numero de chip que puede estar equivocado.</div>";
    exit;
}
// Obtener el ID de la raza a partir del nombre
$consulta_raza = $db->prepare("SELECT ID FROM Raza WHERE Nombre_Raza = :nombre");
$consulta_raza->bindParam(':nombre', $raza);
$consulta_raza->execute();
$id_raza = $consulta_raza->fetch(PDO::FETCH_ASSOC);
$raza = $id_raza['ID'];
// Obtener el ID de la especie a partir del nombre
$consulta_especie = $db->prepare("SELECT ID FROM Especie WHERE Nombre_Especie = :nombre");
$consulta_especie->bindParam(':nombre', $especie);
$consulta_especie->execute();
$id_especie = $consulta_especie->fetch(PDO::FETCH_ASSOC);
$especie = $id_especie['ID'];
// Obtener ID de la protectora desde la cookie (nombre del refugio)
$nombre_protectora = $_COOKIE['nombre'] ?? null;
$datos_protectora = $db->prepare("SELECT ID FROM Refugio WHERE  Nombre= :nombre");
$datos_protectora->bindParam(':nombre', $nombre_protectora);
$datos_protectora->execute();
$id_protectora = $datos_protectora->fetch(PDO::FETCH_ASSOC);
$protectora = $id_protectora['ID'];
// Guardar imagen en carpeta 'uploads'
$rutaDestino = 'uploads/' . basename($_FILES['Imagen']['name']);
move_uploaded_file($_FILES['Imagen']['tmp_name'], $rutaDestino);
// Insertar el nuevo animal en la base de datos
$insert = $db->prepare("INSERT INTO Animal (Chip_ID, Nombre, Especie, raza, FechaNacimiento, Sexo, Peso, Estado, ID_refugio, Imagen) VALUES (:chip, :nombre, :especie, :raza, :fecha, :sexo, :peso, :estado, :refugio, :imagen)");
// Mostrar mensaje de éxito o error
if ($insert->execute([
    ':chip' => $chip,
    ':nombre' => $nombre,
    ':especie' => $especie,
    ':raza' => $raza,
    ':fecha' => $fecha_nacimiento,
    ':sexo' => $sexo,
    ':peso' => $peso,
    ':estado' => $estado,
    ':refugio' => $protectora,
    ':imagen' => $rutaDestino
])) {
    echo '<!DOCTYPE html>
            <html lang="es">
                <head>
                    <meta charset="UTF-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <link rel="stylesheet" href="./Css_Paginas/insertar_mascota.css">
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
} else {
    echo "Error al registrar usuario: " . db->errorInfo()[2];
}
