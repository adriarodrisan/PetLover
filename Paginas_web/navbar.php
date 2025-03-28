<?php
session_start();
?>
<nav>
<ul>
  <a href="SobreNosotros.html">Sobre Nosotros</a>
  <a href="#Adopcion">Cómo Adoptar</a>
  <a href="#Ayudas">Ayudanos</a>
  <a href="contacto.html">Contato</a>
  <a href="Agregar_Mascota">Agrega una mascota</a>
  <?php if ($_SESSION['rol'] === null ): ?>
  <li><a href="Inicio_Sesion.php">Iniciar Sesión</a>hola</li>
  <li><a href="registro.html">Registrarse</a>eferf</li>
  <?php elseif ($_SESSION['rol'] === 'adoptante'): ?>
  <li><a href="mostrar_masacota.php">Ver Mascotas</a>que tal</li>
  <li><a href="cerrar_sesion.php">Cerrar Sesión</a></li>
  <?php elseif ($_SESSION['rol'] === 'protectora'): ?>
  <li><a href="insertar_mascota.php">Publicar Mascota</a> fgsdfd</li>
  <li><a href="cerrar_sesion.php">Cerrar Sesión</a></li>
      <?php endif; ?>
  </ul>
            
</nav>