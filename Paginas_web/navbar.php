<?php
$rol = $_COOKIE['rol'] ?? null;
?>
<header class="navbar">
    <div class="logo-contenedor">
        <img id="logo" src="./Imagenes_Animales/logo.png" alt="Logo PetLover">
    </div>
    <div class="menu-centro">
    <ul>
    <li><a href="SobreNosotros.html">Sobre Nosotros</a></li>
    <li><a href="#Adopcion">Cómo Adoptar</a></li>
    <li><a href="#Ayudas">Ayudanos</a></li>
    <li><a href="contacto.html">Contato</a></li>
    <li><a href="contrato_adopcion.html">Contrato Prueba</a></li>
    <?php if ($rol === 'adoptante'): ?>
        <li><a href="mostrar_mascota.php">Ver Mascotas</a></li>
      <?php elseif ($rol === 'protectora'): ?>
        <li><a href="insertar_mascota.php">Publicar Mascota</a></li>
      <?php endif; ?>
      </ul>
    </div>

    <div class="btn-session">
    <?php if ($rol):?>
        <a href="cerrar_sesion.php" class="boton-autenticacion">Cerrar Session</a>
      <?php else: ?>
        <a href="Inicio_Sesion.html" class="boton-autenticacion">Iniciar Sesión</a>
        <?php endif; ?>
      </div>
</header>