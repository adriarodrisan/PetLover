<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PetLover home - Adopción de Mascotas </title>
    <link rel="stylesheet" href="./Css_Paginas/Home_Petlover.css">
</head>
<body>
    <header>
        <?php
    include 'navbar.php';
?> 
<!-- 🎥 Nuestros apartados de informacion, enlaces y boton de inicio de sesión -->     
    </header>
 <!-- 🎥 Separacion entre gato y perro  -->
    <section class= "seccion-principal">
        <h2>Encuentra a tu mejor amigo</h2>
        <p>Explora nuestros refugios y Encuentra a tu compañero ideal</p>
        <div class="contenedor-categorias">
            <a href="perros.php" class="tarjeta-categoria">🐶 <h3>Perros</h3></a>
            <a href="gatos.php" class="tarjeta-categoria">🐱 <h3>Gatos</h3></a>
        </div>
    </section>
<!-- 🐾 Sección de Perros y Gatos Destacados con grandes necesidades! -->
<!-- 🐾 Sección de Perros -->
<section class="seccion-destacados">
  <h2 class="titulo-destacados">🐾 Mascotas Destacadas</h2>
  <div class="carrusel-container">
    <button class="carrusel-btn prev" onclick="moverCarrusel(-1)">‹</button>
    <div class="carrusel" id="carruselDestacados">
      <img src="./Imagenes_Animales/perros/nerea.jpeg" alt="Mascota destacada">
      <img src="./Imagenes_Animales/perros/greta.jpeg" alt="Mascota destacada">
      <img src="./Imagenes_Animales/perros/kira.jpeg" alt="Mascota destacada">
      <img src="./Imagenes_Animales/gatos/isis.png" alt="Mascota destacada">
      <img src="./Imagenes_Animales/gatos/lupita.jpeg" alt="Mascota destacada">
      <img src="./Imagenes_Animales/gatos/jeni.jpeg" alt="Mascota destacada">
    </div>
    <button class="carrusel-btn next" onclick="moverCarrusel(1)">›</button>
  </div>
</section>
    <section class="video-presentacion">
    <h2>🎥 Conoce más sobre PetLover</h2>
    <div style="position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%;">
        <iframe 
            src="https://www.youtube.com/embed/X9QxvAaf_kY" 
            frameborder="0" 
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
            allowfullscreen 
            style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;">
        </iframe>
    </div>
</section>
<!-- 🐾 Sección de comentarios de Adoptantes (en preparación) -->
    <section class=" seccion-testimonios">
        <h2>💬comentarios de nuestros Adoptantes </h2>
        <p>Lo que dicen las personas que han encontrado su mejor amigo en PetLover.</p>
        <div class="tarjeta-testimonio">
            <p>"Adopté a Max hace 6 meses y es la mejor decisión que he tomado."</p>
            <h4>- Sofía G.</h4>
        </div>
        <div class="tarjeta-testimonio">
            <p>"Gracias a PetLover encontré a Luna, mi compañera de vida."</p>
            <h4>- Carlos P.</h4>
        </div>
    </section>  
        <!-- 📍 Cómo Adoptar -->
    <section class="seccion-adopcion">
        <h2>📍 Cómo Adoptar</h2>
        <div class="contenedor-pasos">
            <div class="paso">
                    <h3>1️⃣ Encuentra una mascota</h3>
                    <p>Explora nuestra lista de perros y gatos en adopción.</p>
                </div>
                <div class="paso">
                    <h3>2️⃣ Contacta con el refugio</h3>
                    <p>Habla con nuestros colaboradores para conocer más.</p>
                </div>
                <div class="paso">
                    <h3>3️⃣ Adopta y cambia una vida</h3>
                    <p>Completa el proceso y llévate un nuevo amigo a casa.</p>
                </div>
            </div>
    </section>
    
</body>
<?php include 'footer.php'; ?>
</html>