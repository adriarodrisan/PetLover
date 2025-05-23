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
    <!-- Sección inicial con categorías de búsqueda -->
  </header>
  <section class="seccion-principal">
    <h2>Encuentra a tu mejor amigo</h2>
    <p>Explora nuestros refugios y encuentra a tu compañero ideal</p>
    <div class="contenedor-categorias">
      <a href="perros.php" class="tarjeta-categoria">🐶 <h3>Perros</h3></a>
      <a href="gatos.php" class="tarjeta-categoria">🐱 <h3>Gatos</h3></a>
    </div>
  </section>
  <!-- Carrusel de gatos destacados -->
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
        <div class="carrusel-img-wrapper"><img src="./Imagenes_Animales/gatos/ivana.jpg" alt="Ivana"></div>
        <div class="nombre-mascota">Ivana</div>
        <p class="descripcion-mascota">En busca de un lugar mas acogedor.</p>
      </div>
    </div>
    <button class="carrusel-btn next" onclick="moverCarrusel('gatos', 1)">›</button>
  </div>
  <!-- Carrusel de perros destacados -->
  <h2 class="carrusel-titulo">Perros en Adopción</h2>
  <div class="carrusel-container">
    <button class="carrusel-btn prev" onclick="moverCarrusel('perros', -1)">‹</button>
    <div class="carrusel" id="carruselPerros">

      <div class="carrusel-slide">
        <div class="carrusel-img-wrapper"><img src="./Imagenes_Animales/perros/akana.jpeg" alt="Akana"></div>
        <div class="nombre-mascota">Akana</div>
        <p class="descripcion-mascota">Energía pura y amor sin límites.</p>
      </div>

      <div class="carrusel-slide">
        <div class="carrusel-img-wrapper"><img src="./Imagenes_Animales/perros/Bindi.jpeg" alt="Bindi"></div>
        <div class="nombre-mascota">Bindi</div>
        <p class="descripcion-mascota">Leal como nadie, ¡y le encanta pasear!</p>
      </div>

      <div class="carrusel-slide">
        <div class="carrusel-img-wrapper"><img src="./Imagenes_Animales/perros/Blue.jpeg" alt="Blue"></div>
        <div class="nombre-mascota">Blue</div>
        <p class="descripcion-mascota">Un corazón suave y mirada tierna.</p>
      </div>

      <div class="carrusel-slide">
        <div class="carrusel-img-wrapper"><img src="./Imagenes_Animales/perros/boki.png" alt="Boki"></div>
        <div class="nombre-mascota">Boki</div>
        <p class="descripcion-mascota">Siempre listo para jugar y dar lametones.</p>
      </div>

      <div class="carrusel-slide">
        <div class="carrusel-img-wrapper"><img src="./Imagenes_Animales/perros/bola.jpeg" alt="Bola"></div>
        <div class="nombre-mascota">Bola</div>
        <p class="descripcion-mascota">Tranquilo, noble y súper abrazable.</p>
      </div>

      <div class="carrusel-slide">
        <div class="carrusel-img-wrapper"><img src="./Imagenes_Animales/perros/bruno.jpeg" alt="Bruno"></div>
        <div class="nombre-mascota">Bruno</div>
        <p class="descripcion-mascota">Simpático y lleno de alegría.</p>
      </div>

      <div class="carrusel-slide">
        <div class="carrusel-img-wrapper"><img src="./Imagenes_Animales/perros/damarco.jpeg" alt="Damarco"></div>
        <div class="nombre-mascota">Damarco</div>
        <p class="descripcion-mascota">Inteligente y siempre atento.</p>
      </div>

      <div class="carrusel-slide">
        <div class="carrusel-img-wrapper"><img src="./Imagenes_Animales/perros/dog1.png" alt="Cookie"></div>
        <div class="nombre-mascota">Cookie</div>
        <p class="descripcion-mascota">Su ternura conquista corazones.</p>
      </div>

      <div class="carrusel-slide">
        <div class="carrusel-img-wrapper"><img src="./Imagenes_Animales/perros/dog2.png" alt="Milkiie"></div>
        <div class="nombre-mascota">Milkiie</div>
        <p class="descripcion-mascota">Curiosa, valiente y llena de vida.</p>
      </div>

      <div class="carrusel-slide">
        <div class="carrusel-img-wrapper"><img src="./Imagenes_Animales/perros/doris.jpeg" alt="Doris"></div>
        <div class="nombre-mascota">Doris</div>
        <p class="descripcion-mascota">Amable, paciente y buena con niños.</p>
      </div>

      <div class="carrusel-slide">
        <div class="carrusel-img-wrapper"><img src="./Imagenes_Animales/perros/dragon.jpeg" alt="Dragon"></div>
        <div class="nombre-mascota">Dragon</div>
        <p class="descripcion-mascota">Poderoso nombre, corazón de peluche.</p>
      </div>

      <div class="carrusel-slide">
        <div class="carrusel-img-wrapper"><img src="./Imagenes_Animales/perros/duna.jpg" alt="Duna"></div>
        <div class="nombre-mascota">Duna</div>
        <p class="descripcion-mascota">Silenciosa y muy observadora.</p>
      </div>

      <div class="carrusel-slide">
        <div class="carrusel-img-wrapper"><img src="./Imagenes_Animales/perros/goliath.jpg" alt="Goliath"></div>
        <div class="nombre-mascota">Goliath</div>
        <p class="descripcion-mascota">Gran tamaño, aún más grande el corazón.</p>
      </div>

      <div class="carrusel-slide">
        <div class="carrusel-img-wrapper"><img src="./Imagenes_Animales/perros/greta.jpeg" alt="Greta"></div>
        <div class="nombre-mascota">Greta</div>
        <p class="descripcion-mascota">Una exploradora curiosa y amigable.</p>
      </div>

      <div class="carrusel-slide">
        <div class="carrusel-img-wrapper"><img src="./Imagenes_Animales/perros/heros.jpeg" alt="Heroes"></div>
        <div class="nombre-mascota">Heroes</div>
        <p class="descripcion-mascota">Un amigo valiente esperando por ti.</p>
      </div>

    </div>
    <button class="carrusel-btn next" onclick="moverCarrusel('perros', 1)">›</button>
  </div>
  <section class="hero-video-section">
    <div class="hero-video-card">
      <h2 class="hero-title">Conoce cómo funciona nuestro Refugio</h2>
      <p class="hero-subtitle">Cada día damos esperanza a quienes más lo necesitan. Mira cómo lo hacemos.</p>

      <div class="hero-video-wrapper">
        <iframe
          src="https://www.youtube.com/embed/X9QxvAaf_kY"
          title="Video PetLover"
          frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
          allowfullscreen>
        </iframe>
      </div>
    </div>
  </section>
  <!-- Testimonios de adoptantes -->
  <section class="seccion-testimonios">
    <h2>💬 Comentarios de nuestros Adoptantes</h2>
    <p>Lo que dicen las personas que han encontrado su mejor amigo en PetLover.</p>

    <div class="contenedor-testimonios">
      <div class="tarjeta-testimonio">
        <p>"Adopté a Max hace 6 meses y es la mejor decisión que he tomado."</p>
        <h4>- Sofía G.</h4>
      </div>
      <div class="tarjeta-testimonio">
        <p>"Gracias a PetLover encontré a Luna, mi compañera de vida."</p>
        <h4>- Carlos P.</h4>
      </div>
      <div class="tarjeta-testimonio">
        <p>"Me enamoré de Bruno apenas lo vi en la web. Hoy no me imagino la casa sin él."</p>
        <h4>- Marta L.</h4>
      </div>
      <div class="tarjeta-testimonio">
        <p>"El proceso fue sencillo y claro. Ahora Toby me acompaña a todas partes."</p>
        <h4>- Andrés M.</h4>
      </div>
      <div class="tarjeta-testimonio">
        <p>"La atención del equipo fue excelente. Adoptamos a Nala y fue amor a primera vista."</p>
        <h4>- Daniela y Javi</h4>
      </div>
      <div class="tarjeta-testimonio">
        <p>"Mi hija y yo estábamos nerviosas por adoptar, pero PetLover nos acompañó en todo momento."</p>
        <h4>- Clara S.</h4>
      </div>
      <div class="tarjeta-testimonio">
        <p>"Nunca imaginé cuánto amor recibiríamos de Rocky. ¡Gracias PetLover!"</p>
        <h4>- Elena V.</h4>
      </div>
      <div class="tarjeta-testimonio">
        <p>"PetLover hizo que el proceso de adopción fuera tan fácil y cálido. Milo es un sol."</p>
        <h4>- Tomás F.</h4>
      </div>
    </div>
  </section>

  <!-- Proceso de adopción resumido -->
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
  <!-- JS del carrusel -->
  <script>
    const carruseles = {
      gatos: 0,
      perros: 0
    };

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