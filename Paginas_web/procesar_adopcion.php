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
$apellido= trim($_POST['apellido']);
$dni= trim($_POST['dni']);
$direccion= trim($_POST['direccion']);
$telefono= trim($_POST['telefono']);
$correo= trim($_POST['correo']);
//animal
$nombre_animal = trim($_POST['nombre_animal']);
//$chip = trim($_POST['chip']);
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

//verificar si el animal esta guardado en la base de datos
$id_animal = $db->prepare("SELECT ID FROM animal WHERE Nombre = :nombre_animal");
$id_animal ->bindParam(':nombre_animal', $nombre_animal);
$id_animal ->execute();

if ($id_animal->rowCount() < 1) {
    echo '<!DOCTYPE html>
            <html lang="es">
                <head>
                    <meta charset="UTF-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <title>Error 453</title>
                </head>
                <body>
                    <div class="alertas">
                        <h1>Error 453</h1>
                        <h1>Error con el animal</h1>
                        <p>No hay Animal con este nombre, Intentalo revisar que no te has equivocado</p>
                        <a href="/Paginas_web/Home_Petlover.php"> Ir al inicio</a>
                    </div>
                </body>
            </html>
            ';
    exit;
}
$id_adoptante = $db->prepare("SELECT ID FROM adoptante WHERE Nombre = :nombre_adoptante");
$id_adoptante ->bindParam(':nombre_adoptante', $nombre_adoptante);
$id_adoptante ->execute();

if ($id_adoptante->rowCount() < 1) {
    echo '<!DOCTYPE html>
            <html lang="es">
                <head>
                    <meta charset="UTF-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <title>Error 454</title>
                </head>
                <body>
                    <div class="alertas">
                        <h1>Error 454</h1>
                        <h1>Error con el Nombre</h1>
                        <p>No hay Usuario con este nombre, Intentalo revisar que no te has equivocado o no estas registrado</p>
                        <a href="/Paginas_web/inicio_Sesion.html"> Ir al registro</a>
                        <a href="/Paginas_web/Home_Petlover.php"> Ir al inicio</a>
                    </div>
                </body>
            </html>
            ';
    exit;
}
//datos insertado
$registrar_adopcion = $db->prepare("INSERT INTO adopciones (nombre_adoptante, apellido_adoptante, dni, direccion, telefono, correo, nombre_animal, especie, raza, sexo, compromisos) 
                                    VALUES (:nombre, :apellido, :dni, :direccion, :telefono, :correo, :nombre_animal, :especie, :raza, :sexo, :compromisos)");
$registrar_adopcion ->bindParam(':nombre', $nombre);
$registrar_adopcion ->bindParam(':apellido', $apellido);
$registrar_adopcion ->bindParam(':dni', $dni);
$registrar_adopcion ->bindParam(':direccion', $direccion);
$registrar_adopcion ->bindParam(':telefono', $telefono);
$registrar_adopcion ->bindParam(':correo', $correo);
$registrar_adopcion ->bindParam(':nombre_animal', $nombre_animal);
//$registrar_adopcion ->bindParam(':chip', $chip);
$registrar_adopcion ->bindParam(':especie', $especie);
$registrar_adopcion ->bindParam(':raza', $raza);
$registrar_adopcion ->bindParam(':sexo', $sexo);
$registrar_adopcion ->bindParam(':compromisos', $compromisos);
$registrar_adopcion ->execute();
//$registrar_usuarios = "INSERT INTO adoptante (DNI, Nombre, Telefono, Correo, Contraseña) VALUES ('$dni', '$nombre','$telefono','$correo','$contrasena_hasheada');";
if ($registrar_adopcion){
//if (mysqli_query($conn, $registrar_usuarios)){
    echo '<!DOCTYPE html>
            <html lang="es">
                <head>
                    <meta charset="UTF-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <title>Registro Exitoso!</title>
                </head>
                <body>
                    <div class="alertas">
                        <h1>Adopción registrada exitosamente</h1>
                        <a href="/Paginas_web/Home_Petlover.php"> Ir al inicio</a>
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

