<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PetLover home - Adopción de Mascotas </title>
    <link rel="stylesheet" href="./Css_Paginas/Home_Petlover.css">
     <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;600&display=swap" rel="stylesheet">
      <style>
    @media (min-width: 768px) {
      .carrusel {
        gap: 30px;
        padding: 0 60px;
      }
      .carrusel-slide {
        flex: 0 0 33%;
      }
    }
    @media (max-width: 767px) {
      .carrusel-slide {
        flex: 0 0 90%;
      }
    }
  </style>
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
 <h2 class="carrusel-titulo">Gatos en Adopción</h2>
<div class="carrusel-container">
  <button class="carrusel-btn prev" onclick="moverCarrusel('gatos', -1)">‹</button>
  <div class="carrusel" id="carruselGatos">

    <div class="carrusel-slide">
      <div class="carrusel-img-wrapper"><img src="./Imagenes_Animales/gatos/ari.jpeg" alt="Ari"></div>
      <div class="nombre-mascota">Ari</div>
      <p class="descripcion-mascota">Curiosa y muy dulce.</p>
    </div>
    <div class="carrusel-slide">
      <div class="carrusel-img-wrapper"><img src="./Imagenes_Animales/gatos/carey.jpeg" alt="Greta"></div>
      <div class="nombre-mascota">Greta</div>
      <p class="descripcion-mascota">Mimosa y tranquila.</p>
    </div>
    <div class="carrusel-slide">
      <div class="carrusel-img-wrapper"><img src="./Imagenes_Animales/gatos/cat1.png" alt="Jeni"></div>
      <div class="nombre-mascota">Jeni</div>
      <p class="descripcion-mascota">Discreta y adorable.</p>
    </div>
    <div class="carrusel-slide">
      <div class="carrusel-img-wrapper"><img src="./Imagenes_Animales/gatos/cat2.png" alt="Cookie"></div>
      <div class="nombre-mascota">Cookie</div>
      <p class="descripcion-mascota">Muy amorosa y calmada.</p>
    </div>
    <div class="carrusel-slide">
      <div class="carrusel-img-wrapper"><img src="./Imagenes_Animales/gatos/Chispa.jpg" alt="Falcon"></div>
      <div class="nombre-mascota">Falcon</div>
      <p class="descripcion-mascota">Leal y silencioso.</p>
    </div>
    <div class="carrusel-slide">
      <div class="carrusel-img-wrapper"><img src="./Imagenes_Animales/gatos/cookie.jpeg" alt="Eureka"></div>
      <div class="nombre-mascota">Eureka</div>
      <p class="descripcion-mascota">Curiosa y muy despierta.</p>
    </div>
    <div class="carrusel-slide">
      <div class="carrusel-img-wrapper"><img src="./Imagenes_Animales/gatos/enxeneta.jpeg" alt="Missi"></div>
      <div class="nombre-mascota">Missi</div>
      <p class="descripcion-mascota">Pequeña y mimosa.</p>
    </div>
    <div class="carrusel-slide">
      <div class="carrusel-img-wrapper"><img src="./Imagenes_Animales/gatos/eureka.jpeg" alt="Nit"></div>
      <div class="nombre-mascota">Nit</div>
      <p class="descripcion-mascota">Silenciosa y buena compañera.</p>
    </div>
    <div class="carrusel-slide">
      <div class="carrusel-img-wrapper"><img src="./Imagenes_Animales/gatos/falccon.jpeg" alt="Ray"></div>
      <div class="nombre-mascota">Ray</div>
      <p class="descripcion-mascota">Un gato observador y tranquilo.</p>
    </div>
    <div class="carrusel-slide">
      <div class="carrusel-img-wrapper"><img src="./Imagenes_Animales/gatos/goku.jpeg" alt="Roscon"></div>
      <div class="nombre-mascota">Roscon</div>
      <p class="descripcion-mascota">Grande y bonachón.</p>
    </div>
    <div class="carrusel-slide">
      <div class="carrusel-img-wrapper"><img src="./Imagenes_Animales/gatos/heros.jpg" alt="Palomilla"></div>
      <div class="nombre-mascota">Palomilla</div>
      <p class="descripcion-mascota">Tierna y dormilona.</p>
    </div>
    <div class="carrusel-slide">
      <div class="carrusel-img-wrapper"><img src="./Imagenes_Animales/gatos/isis.png" alt="Vegeta"></div>
      <div class="nombre-mascota">Vegeta</div>
      <p class="descripcion-mascota">Un alma noble en busca de hogar.</p>
    </div>
      <div class="carrusel-slide">
      <div class="carrusel-img-wrapper"><img src="./Imagenes_Animales/gatos/ivana.jpg" alt="Vegeta"></div>
      <div class="nombre-mascota">Vegeta</div>
      <p class="descripcion-mascota">Un alma noble en busca de hogar.</p>
    </div>
  </div>
  <button class="carrusel-btn next" onclick="moverCarrusel('gatos', 1)">›</button>
</div>
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
<script>
  const carruseles = { gatos: 0, perros: 0 };

  function moverCarrusel(tipo, direccion) {
    const carrusel = document.getElementById(`carrusel${tipo.charAt(0).toUpperCase() + tipo.slice(1)}`);
    const totalSlides = carrusel.children.length;
    const visibleSlides = window.innerWidth >= 768 ? 3 : 1;
    const maxIndex = totalSlides - visibleSlides;

    carruseles[tipo] += direccion;

    if (carruseles[tipo] < 0) carruseles[tipo] = 0;
    if (carruseles[tipo] > maxIndex) carruseles[tipo] = maxIndex;

    const slideWidth = carrusel.children[0].offsetWidth + 30;
    carrusel.style.transform = `translateX(-${carruseles[tipo] * slideWidth}px)`;
  }
</script>

    
</body>
<?php include 'footer.php'; ?>
</html>