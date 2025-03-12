<?php
$conn->set_charset("utf8");
$servername = 'localhost'; // este sera el nombre de nuestro servidor
$database = 'protectora'; // nombre bd
$username = 'petlove'; // Usuario bd
$password = 'mascota'; // pass base de datos
// creamos conexion
$conn = new mysqli($servername, $database, $username, $password);
//verificamos la conexion
if ($conn->connect_error){
    die("Conexion fallida: ". $conn->connect_error);
}
?>