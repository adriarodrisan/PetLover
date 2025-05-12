<?php
$rol = $_COOKIE['rol'] ?? null;
?>
<header class="navbar">
<link rel="stylesheet" href="./Css_Paginas/Home_Petlover.css">
    <div class="logo-contenedor">
        <a href="Home_Petlover.php"><img id="logo" src="./Imagenes_Animales/logo/logo.png" alt="Logo PetLover"></a>
    </div>
    <div class="menu-centro">
    <ul>
    <li><a href="SobreNosotros.html">Sobre Nosotros</a></li>
    <li><a href="Como_Adoptar.html">Cómo Adoptar</a></li>
    <li><a href="ayudas.php">Ayudanos</a></li>
    <li><a href="contacto.html">Contacto</a></li>
    <!--<li><a href="contrato_adopcion.html">Contrato Prueba</a></li> -->
    <?php if ($rol === 'adoptante'): ?>
          <a href="#">Ver Mascotas ▾</a>
                    <ul class="dropdown-content">
                        <li><a href="./perros.php">Perros</a></li>
                        <li><a href="./gatos.php">Gatos</a></li>
                    </ul>
        <li><a href="contrato_adopcion.html">Formulario de Adopcion</a></li>
      <?php elseif ($rol === 'protectora'): ?>
        <li><a href="Agregar_Mascota.html">Publicar Mascota</a></li>
      <?php endif; ?>
      </ul>
    </div>    

    <div class="btn-session">
    <?php if ($rol):?>
        <a href="cerrar_sesion.php" class="boton-autenticacion">Cerrar Session</a>
      <?php else: ?>
        <a href="inicio_sesion.html" class="boton-autenticacion">Iniciar Sesión</a>
        <?php endif; ?>
      </div>
</header>