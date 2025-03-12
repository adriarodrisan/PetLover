<?php
$servername = 'localhost'; // este sera el nombre de nuestro servidor
$database = 'protectora'; // nombre bd
$username = 'petlove'; // Usuario bd
$password = 'mascota'; // pass base de datos
// creamos conexion
$conn = new mysqli($servername, $username, $password, $database);
//verificamos la conexion
if ($conn->connect_error){
    die("Conexion fallida: ". $conn->connect_error);
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
if (mysqli_num_rows($correo_verificado_usuario)>0){
    echo "Este correo ya esta registrado, por favor, intelo con otro correo";
    exit;
}
$verificar_correo_protectora = "SELECT * FROM refugio WHERE Correo = '$correo'";
$correo_verificado_protectora = mysqli_query($conn, $verificar_correo_protectora);
if (mysqli_num_rows($correo_verificado_protectora)>0){
    echo "Este correo ya esta registrado, por favor, intelo con otro correo";
    exit;
}
//hashear pass
$contrasena_hasheada = password_hash($contrasena, PASSWORD_DEFAULT());
$registrar_usuarios = "INSERT INTO adoptante (DNI, Nombre, Telefono, Correo, Contraseña) VALUES ('$dni', '$nombre','$telefono','$correo','$contrasena_hasheada');";
if (mysqli_query($conn, $registrar_usuarios)){
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
    echo "Error al registrar usuario: ". mysqli_error($conn);
}
?>