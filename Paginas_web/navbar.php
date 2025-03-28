<?php
session_start();
?>
<nav>
  <ul>
    <li><a href="Home_Petlover.php">Inicio</a></li>    
    
    <?php if (!isset($_SESSION['rol'])): ?>
      <li><a href="Inicio_Sesion.php">Iniciar Sesión</a></li>
      <li><a href="registro.html">Registrarse</a></li>






<nav>
            <a href="SobreNosotros.html">Sobre Nosotros</a>
            <a href="#Adopcion">Cómo Adoptar</a>
            <a href="#Ayudas">Ayudanos</a>
            <a href="contacto.html">Contato</a>
            <a href="Agregar_Mascota">Agrega una mascota</a>
            <a href="cerrar_sesion.php">Cerrar sersion</a>
</nav>