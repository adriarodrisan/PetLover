<?php
//ESTE FORMULARIO ESTARÁ METIDO DENTRO DE LAS IMAGENES AL DARLE MAS INFORMACION. (Talvez tambien metemos un campo donde explicamos info de cada animal)
ini_set('display_errors', 1);

ini_set('display_startup_errors', 1);

error_reporting(E_ALL);
try {
    $db = new PDO('mysql:host=localhost;dbname=protectora', 'petlove', 'mascota');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch (PDOException $e){
    echo 'Falló la conixion: ' . $e->getMessage(); 
}
//persona
$nombre= trim($_POST['nombre']);
$dni= trim($_POST['dni']);
$direccion= trim($_POST['direccion']);
$telefono= trim($_POST['telefono']);
$correo= trim($_POST['correo']);
//animal
$nombre_animal = trim($_POST['nombre_animal']);
$chip = trim($_POST['chip']);
$especie = $_POST['especie'];
$raza = trim($_POST['raza']);
$sexo = $_POST['sexo'];

// Recibir los compromisos (implode es una funcion que devuelve un string de los elementos de un array)
$compromisos = isset($_POST['compromisos']) ? implode(", ", $_POST['compromisos']) : '';
//Validamos que los campos fueron rellenados
if(empty($nombre) || empty($dni) || empty($direccion) || empty($telefono) || empty($correo)){
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

if ($registros_adoptate->rowCount() > 0) {
    echo "Este correo ya esta registrado, por favor, intelo con otro correo";
    exit;
}
$registros_protectora = $db->prepare("SELECT * FROM refugio WHERE Correo = :correo");
$registros_protectora ->bindParam(':correo', $correo);
$registros_protectora ->execute();

if ($registros_protectora->rowCount() > 0) {
    echo "Este correo ya esta registrado, por favor, intelo con otro correo";
    exit;
}
//datos insertado
$registrar_adopcion = $db->prepare("INSERT INTO adopciones (nombre_adoptante, dni, direccion, telefono, correo, nombre_animal, chip, especie, raza, sexo, compromisos) 
                                    VALUES (:nombre, :dni, :direccion, :telefono, :correo, :nombre_animal, :chip, :especie, :raza, :sexo, :compromisos)");
$contrasena_hasheada = password_hash($contrasena, PASSWORD_DEFAULT);

$registrar_adopcion ->bindParam(':nombre', $nombre);
$registrar_adopcion ->bindParam(':dni', $dni);
$registrar_adopcion ->bindParam(':direccion', $direccion);
$registrar_adopcion ->bindParam(':telefono', $telefono);
$registrar_adopcion ->bindParam(':correo', $correo);
$registrar_adopcion ->bindParam(':nombre_animal', $nombre_animal);
$registrar_adopcion ->bindParam(':chip', $chip);
$registrar_adopcion ->bindParam(':especie', $especie);
$registrar_adopcion ->bindParam(':raza', $raza);
$registrar_adopcion ->bindParam(':sexo', $sexo);
$registrar_adopcion ->bindParam(':compromisos', $compromisos);



$registrar_usuarios ->execute();
//$registrar_usuarios = "INSERT INTO adoptante (DNI, Nombre, Telefono, Correo, Contraseña) VALUES ('$dni', '$nombre','$telefono','$correo','$contrasena_hasheada');";
if ($registrar_usuarios){
    $_SESSION['usuario'] = $nombre;
    $_SESSION['rol'] = 'protectora';
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

