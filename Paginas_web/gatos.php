<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gatos en Adopción - Petlover</title>
    <link rel="stylesheet" href="./Css_Paginas/gatos.css">
</head>
<body>
    <header>
    <?php
        include 'navbar.php';
    ?>
    </header>
    <section class="hero">
        <h2>Gatos en Adopcion  </h2>
        <p>Encuentra el compañero ideal para ti. </p>
    </section>
    <section class="filters"> 
        <h3>Filtrar por: </h3>
        <select name="raza" onchange="filtrarGatos()">
    <option value="">Selecciona una raza</option>
    <option value="europeo">Europeo</option>
    <option value="persa">Persa</option>
    <option value="gato angora">Gato Angora</option>
    </select>

        <select id="peso">
            <option value="">Selecciona un peso</option>
            <option value="pequeno">Pequeño (-4kg)</option>
            <option value="mediano">Mediano (4-7kg)</option>
            <option value="grande">Grande (+7kg)</option>
        </select>
        <select id="edad">
            <option value="">Selecciona una edad</option>
            <option value="cachorro">Cachorro (-1 año)</option>
            <option value="adulto">Adulto (1-7 años)</option>
            <option value="senior">Senior (+7 años)</option>
        </select>
        <button onclick="filtrarGatos()">Buscar</button>
    </section>
    <section class="cat-list" id="cat-list">
        <div class="cat-card">
            <img src="./Imagenes_Animales/gatos/thom.jpg" alt="Gato en adopción">
            <h4>Milo</h4>
            <p>Raza: Europeo | Fecha de nacimiento: 02/2024 | Tamaño: Mediano | Sexo: Macho</p>
            <button>Saber más</button>
        </div>
        <div class="cat-card">
            <img src="./Imagenes_Animales/gatos/marioli.jpeg" alt="Gato en adopción">
            <h4>Luna</h4>
            <p>Raza: Europeo | Fecha de nacimiento: 08/2022 | Tamaño: Mediano | Sexo: Hembra</p>
            <button>Saber más</button>
        </div>
        <div class="cat-card">
            <img src="./Imagenes_Animales/gatos/roscon.jpeg" alt="Gato en adopción">
            <h4>Heros</h4>
            <p>Raza: Europeo | Fecha de nacimiento: 03/2021 | Tamaño: Mediano | Sexo: Macho </p>
            <button>Saber más</button>
        </div>
        <div class="cat-card">
            <img src="./Imagenes_Animales/gatos/isis.png" alt="Gato en adopción">
            <h4>Isis</h4>
            <p>Raza: Europeo | Fecha de nacimiento: 09/2023 | Tamaño: Mediano | Sexo: Hembra</p>
            <button>Saber más</button>
        </div>
        <div class="cat-card">
            <img src="./Imagenes_Animales/gatos/ivana.jpg" alt="Gato en adopción">
            <h4>Ivana</h4>
            <p>Raza: Europeo | Fecha de nacimiento: 10/2024 | Tamaño: Mediano | Sexo: Hembra </p>
            <button>Saber más</button>
        </div>
        <div class="cat-card">
            <img src="./Imagenes_Animales/gatos/jeni.jpeg" alt="Gato en adopción">
            <h4>Jeni</h4>
            <p>Raza: Europeo | Fecha de nacimiento: 06/2021 | Tamaño: Mediano | Sexo: Hembra </p>
            <button>Saber más</button>
        </div>
        <div class="cat-card">
            <img src="./Imagenes_Animales/gatos/kira.jpg" alt="Gato en adopción">
            <h4>Kira</h4>
            <p>Raza: Europeo | Fecha de nacimiento: 07/2025 | Tamaño: Pequeño | Sexo: Hembra</p>
            <button>Saber más</button>
        </div>
        <div class="cat-card">
            <img src="./Imagenes_Animales/gatos/lupita.jpeg" alt="Gato en adopción">
            <h4>Lupita</h4>
            <p>Raza: Europeo | Fecha de nacimiento: 08/2024 | Tamaño: Mediano | Sexo: Hembra</p>
            <button>Saber más</button>
        </div>
        <div class="cat-card">
            <img src="./Imagenes_Animales/gatos/mami.jpg" alt="Gato en adopción">
            <h4>Mami</h4>
            <p>Raza: Gato Angora | Fecha de nacimiento: 11/2024 | Tamaño: Medino | Sexo: Hembra</p>
            <button>Saber más</button>
        </div>        
        <div class="cat-card">
            <img src="./Imagenes_Animales/gatos/nit.jpeg" alt="Gato en adopción">
            <h4>Nit</h4>
            <p>Raza: Europeo | Fecha de nacimiento: 04/2022 | Tamaño: Mediano | Sexo: Macho</p>
            <button>Saber más</button>
        </div>        
        <div class="cat-card">
            <img src="./Imagenes_Animales/gatos/palomilla.jpg" alt="Gato en adopción">
            <h4>Palomilla</h4>
            <p>Raza: Europeo | Fecha de nacimiento: 06/2024 | Tamaño: Mediano | Sexo: Hembra</p>
            <button>Saber más</button>
        </div>       
         <div class="cat-card">
            <img src="./Imagenes_Animales/gatos/parda.jpg" alt="Gato en adopción">
            <h4>Parda</h4>
            <p>Raza: Europeo | Fecha de nacimiento: 05/2021 | Tamaño: Mediano | Sexo: Hembra</p>
            <button>Saber más</button>
        </div>       
         <div class="cat-card">
            <img src="./Imagenes_Animales/gatos/robison.jpg" alt="Gato en adopción">
            <h4>Robison</h4>
            <p>Raza: Europeo | Fecha de nacimiento: 01/2023 | Tamaño: Mediano | Sexo: Macho</p>
            <button>Saber más</button>
        </div>        
        <div class="cat-card">
            <img src="./Imagenes_Animales/gatos/telerin.jpg" alt="Gato en adopción">
            <h4>Telerin</h4>
            <p>Raza: Europeo | Fecha de nacimiento: 08/2022 | Tamaño: Mediaano | Sexo: Macho</p>
            <button>Saber más</button>
        </div>        
        <div class="cat-card">
            <img src="./Imagenes_Animales/gatos/tigrsa.jpeg" alt="Gato en adopción">
            <h4>Tigresa</h4>
            <p>Raza: Persa | Fecha de nacimiento: 08/2022 | Tamaño: Mediano | Sexo: Hembra</p>
            <button>Saber más</button>
        </div>       
         <div class="cat-card">
            <img src="./Imagenes_Animales/gatos/yeka.jpg" alt="Gato en adopción">
            <h4>Yeka</h4>
            <p>Raza: Europeo | Fecha de nacimiento: 08/2022 | Tamaño: Mediano | Sexo: Hembra</p>
            <button>Saber más</button>
        </div>        
        <div class="cat-card">
            <img src="./Imagenes_Animales/gatos/ari.jpeg" alt="Gato en adopción">
            <h4>Ari</h4>
            <p>Raza: Europeo | Fecha de nacimiento: 08/2022 | Tamaño: Mediano | Sexo: Hembra</p>
            <button>Saber más</button>
        </div>        
        <div class="cat-card">
            <img src="./Imagenes_Animales/gatos/Chispa.jpg" alt="Gato en adopción">
            <h4>Chispa</h4>
            <p>Raza: Europeo | Fecha de nacimiento: 08/2022 | Tamaño: Mediano | Sexo: Hembra</p>
            <button>Saber más</button>
        </div>        
        <div class="cat-card">
            <img src="./Imagenes_Animales/gatos/sarabi.jpeg" alt="Gato en adopción">
            <h4>Sarabi</h4>
            <p>Raza: Europeo | Fecha de nacimiento: 08/2022 | Tamaño: Mediano | Sexo: Hembra</p>
            <button>Saber más</button>
        </div>        
        <div class="cat-card">
            <img src="./Imagenes_Animales/gatos/cookie.jpeg" alt="Gato en adopción">
            <h4>Cookie</h4>
            <p>Raza: Europeo | Fecha de nacimiento: 08/2022 | Tamaño: Medianno | Sexo: Macho</p>
            <button>Saber más</button>
        </div>       
        <div class="cat-card">
            <img src="./Imagenes_Animales/gatos/joy.jpeg" alt="Gato en adopción">
            <h4>Joy</h4>
            <p>Raza: Europeo | Fecha de nacimiento: 08/2022 | Tamaño: Mediano | Sexo: Macho</p>
            <button>Saber más</button>
        </div>        
        <div class="cat-card">
            <img src="./Imagenes_Animales/gatos/carey.jpeg" alt="Gato en adopción">
            <h4>Caray</h4>
            <p>Raza: Europeo | Fecha de nacimiento: 08/2022 | Tamaño: Mediano | Sexo: Hembra</p>
            <button>Saber más</button>
        </div>        
        <div class="cat-card">
            <img src="./Imagenes_Animales/gatos/ray.jpeg" alt="Gato en adopción">
            <h4>Ray</h4>
            <p>Raza: Europeo | Fecha de nacimiento: 08/2022 | Tamaño: Mediano | Sexo: Macho </p>
            <button>Saber más</button>
        </div>        
        <div class="cat-card">
            <img src="./Imagenes_Animales/gatos/paulina.jpeg" alt="Gato en adopción">
            <h4>Paulina</h4>
            <p>Raza: Europeo | Fecha de nacimiento: 08/2022 | Tamaño: Mediano | Sexo: Hembra</p>
            <button>Saber más</button>
        </div>       
         <div class="cat-card">
            <img src="./Imagenes_Animales/gatos/falccon.jpeg" alt="Gato en adopción">
            <h4>Falcon</h4>
            <p>Raza: Europeo | Fecha de nacimiento: 08/2022 | Tamaño: Mediano | Sexo: Macho</p>
            <button>Saber más</button>
        </div>       
         <div class="cat-card">
            <img src="./Imagenes_Animales/gatos/vegeta.jpeg" alt="Gato en adopción">
            <h4>Vegeta</h4>
            <p>Raza: Europe | Fecha de nacimiento: 08/2022 | Tamaño: Mediano | Sexo: Macho</p>
            <button>Saber más</button>
        </div>        
        <div class="cat-card">
            <img src="./Imagenes_Animales/gatos/goku.jpeg" alt="Gato en adopción">
            <h4>Goku</h4>
            <p>Raza: Europeo | Fecha de nacimiento: 08/2022 | Tamaño: Mediano | Sexo: Macho</p>
            <button>Saber más</button>
        </div>        
        <div class="cat-card">
            <img src="./Imagenes_Animales/gatos/eureka.jpeg" alt="Gato en adopción">
            <h4>Eureka</h4>
            <p>Raza: Europeo | Fecha de nacimiento: 08/2022 | Tamaño: Mediano | Sexo: Hembra</p>
            <button>Saber más</button>
        </div>        
        <div class="cat-card">
            <img src="./Imagenes_Animales/gatos/enxeneta.jpeg" alt="Gato en adopción">
            <h4>Enxeneta</h4>
            <p>Raza: Europeo | Fecha de nacimiento: 08/2022 | Tamaño: Mediano | Sexo: Hembra</p>
            <button>Saber más</button>
        </div>
        <div class="cat-card">
            <img src="./Imagenes_Animales/gatos/missi.jpeg" alt="Gato en adopción">
            <h4>Missi</h4>
            <p>Raza: Europeo | Fecha de nacimiento: 08/2022 | Tamaño: Mediano | Sexo: Hembra</p>
            <button>Saber más</button>
        </div>
    </section>
    <footer class="footer">
        © 2025 PetLover | Contacto: petlover@gmail.com
    </footer>
    <script>
function filtrarGatos() {
    const razaSeleccionada = document.querySelector('select[name="raza"]').value.toLowerCase();
    const tarjetas = document.querySelectorAll('.cat-card');

    tarjetas.forEach(tarjeta => {
        const texto = tarjeta.textContent.toLowerCase();
        if (!razaSeleccionada || texto.includes(razaSeleccionada)) {
            tarjeta.style.display = "block";
        } else {
            tarjeta.style.display = "none";
        }
    });
}
</script>

<div id="fichaAnimal" class="ficha-modal">
  <div class="ficha-contenido">
    <span class="cerrar-ficha" onclick="cerrarFicha()">&times;</span>
    <div class="ficha-izquierda">
      <img id="fichaImagen" src="" alt="Foto del animal">
    </div>
    <div class="ficha-derecha">
      <h2 id="fichaNombre"></h2>
      <p id="fichaInfo"></p>
      <h4>Mi historia:</h4>
      <p id="fichaHistoria" class="historia"></p>
      <button class="btn-adoptar">❤️ Quiero Adoptar</button>
    </div>
  </div>
</div>
<script>
const historiasGatos = {
  "Milo": "Milo fue encontrado en un parque en una noche lluviosa. A pesar del frío, no perdió su ternura.",
  "Luna": "Luna fue rescatada siendo una cría. Ahora es una gata tranquila que ama dormir en el regazo.",
  "Heros": "Siempre curioso y observador, Heros se ha convertido en el alma del refugio.",
  "Isis": "Con mirada sabia, Isis es ideal para hogares tranquilos. Su ronroneo es pura magia.",
  // Pruebas
};
  function mostrarFicha(nombre, imagen, info) {
  document.getElementById("fichaNombre").innerText = nombre;
  document.getElementById("fichaImagen").src = imagen;
  document.getElementById("fichaInfo").innerText = info;
  document.getElementById("fichaHistoria").innerText = historiasGatos[nombre] || "Este animal tiene mucho amor que dar. Ven a conocerlo.";
  document.getElementById("fichaAnimal").style.display = "block";
}
function cerrarFicha() {
  document.getElementById("fichaAnimal").style.display = "none";
}
};

</script>

</body>
</html>