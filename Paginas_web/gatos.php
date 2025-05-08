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
        <select name="raza">
            <option value="">Selecciona una raza </option>
            <option value="siames">Siamés</option>
            <option value="persa">Persa</option>
            <option value="mainecoon">Maine Coon</option>
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
            <img src="./Imagenes_Animales/gatos/cat1.png" alt="Gato en adopción">
            <h4>Milo</h4>
            <p>Raza: Siamés | Fecha de nacimiento: 02/2023 | Tamaño: Mediano</p>
            <button>Saber más</button>
        </div>
        <div class="cat-card">
            <img src="./Imagenes_Animales/gatos/cat2.png" alt="Gato en adopción">
            <h4>Luna</h4>
            <p>Raza: Persa | Fecha de nacimiento: 08/2022 | Tamaño: Pequeño</p>
            <button>Saber más</button>
        </div>
        <div class="cat-card">
            <img src="./Imagenes_Animales/gatos/heros.jng" alt="Gato en adopción">
            <h4>Luna</h4>
            <p>Raza: Persa | Fecha de nacimiento: 08/2022 | Tamaño: Pequeño</p>
            <button>Saber más</button>
        </div>
        <div class="cat-card">
            <img src="./Imagenes_Animales/gatos/isis.png" alt="Gato en adopción">
            <h4>Luna</h4>
            <p>Raza: Persa | Fecha de nacimiento: 08/2022 | Tamaño: Pequeño</p>
            <button>Saber más</button>
        </div>
        <div class="cat-card">
            <img src="./Imagenes_Animales/gatos/ivana.jpg" alt="Gato en adopción">
            <h4>Luna</h4>
            <p>Raza: Persa | Fecha de nacimiento: 08/2022 | Tamaño: Pequeño</p>
            <button>Saber más</button>
        </div>
        <div class="cat-card">
            <img src="./Imagenes_Animales/gatos/jeni.jpeg" alt="Gato en adopción">
            <h4>Luna</h4>
            <p>Raza: Persa | Fecha de nacimiento: 08/2022 | Tamaño: Pequeño</p>
            <button>Saber más</button>
        </div>
        <div class="cat-card">
            <img src="./Imagenes_Animales/gatos/kira.jpg" alt="Gato en adopción">
            <h4>Luna</h4>
            <p>Raza: Persa | Fecha de nacimiento: 08/2022 | Tamaño: Pequeño</p>
            <button>Saber más</button>
        </div>
        <div class="cat-card">
            <img src="./Imagenes_Animales/gatos/lupita.jpeg" alt="Gato en adopción">
            <h4>Luna</h4>
            <p>Raza: Persa | Fecha de nacimiento: 08/2022 | Tamaño: Pequeño</p>
            <button>Saber más</button>
        </div>
        <div class="cat-card">
            <img src="./Imagenes_Animales/gatos/mami.jpg" alt="Gato en adopción">
            <h4>Luna</h4>
            <p>Raza: Persa | Fecha de nacimiento: 08/2022 | Tamaño: Pequeño</p>
            <button>Saber más</button>
        </div>        
        <div class="cat-card">
            <img src="./Imagenes_Animales/gatos/nit.jpeg" alt="Gato en adopción">
            <h4>Luna</h4>
            <p>Raza: Persa | Fecha de nacimiento: 08/2022 | Tamaño: Pequeño</p>
            <button>Saber más</button>
        </div>        
        <div class="cat-card">
            <img src="./Imagenes_Animales/gatos/palomilla.jpg" alt="Gato en adopción">
            <h4>Luna</h4>
            <p>Raza: Persa | Fecha de nacimiento: 08/2022 | Tamaño: Pequeño</p>
            <button>Saber más</button>
        </div>       
         <div class="cat-card">
            <img src="./Imagenes_Animales/gatos/parda.jpg" alt="Gato en adopción">
            <h4>Luna</h4>
            <p>Raza: Persa | Fecha de nacimiento: 08/2022 | Tamaño: Pequeño</p>
            <button>Saber más</button>
        </div>       
         <div class="cat-card">
            <img src="./Imagenes_Animales/gatos/robison.jpg" alt="Gato en adopción">
            <h4>Luna</h4>
            <p>Raza: Persa | Fecha de nacimiento: 08/2022 | Tamaño: Pequeño</p>
            <button>Saber más</button>
        </div>        
        <div class="cat-card">
            <img src="./Imagenes_Animales/gatos/telerin.jpg" alt="Gato en adopción">
            <h4>Luna</h4>
            <p>Raza: Persa | Fecha de nacimiento: 08/2022 | Tamaño: Pequeño</p>
            <button>Saber más</button>
        </div>        
        <div class="cat-card">
            <img src="./Imagenes_Animales/gatos/tigrsa.jpeg" alt="Gato en adopción">
            <h4>Luna</h4>
            <p>Raza: Persa | Fecha de nacimiento: 08/2022 | Tamaño: Pequeño</p>
            <button>Saber más</button>
        </div>       
         <div class="cat-card">
            <img src="./Imagenes_Animales/gatos/yeka.jpg" alt="Gato en adopción">
            <h4>Luna</h4>
            <p>Raza: Persa | Fecha de nacimiento: 08/2022 | Tamaño: Pequeño</p>
            <button>Saber más</button>
        </div>        
        <div class="cat-card">
            <img src="./Imagenes_Animales/gatos/ari.jpeg" alt="Gato en adopción">
            <h4>Luna</h4>
            <p>Raza: Persa | Fecha de nacimiento: 08/2022 | Tamaño: Pequeño</p>
            <button>Saber más</button>
        </div>        
        <div class="cat-card">
            <img src="./Imagenes_Animales/gatos/Chispa.jpg" alt="Gato en adopción">
            <h4>Luna</h4>
            <p>Raza: Persa | Fecha de nacimiento: 08/2022 | Tamaño: Pequeño</p>
            <button>Saber más</button>
        </div>        
        <div class="cat-card">
            <img src="./Imagenes_Animales/gatos/sarabi.jpeg" alt="Gato en adopción">
            <h4>Luna</h4>
            <p>Raza: Persa | Fecha de nacimiento: 08/2022 | Tamaño: Pequeño</p>
            <button>Saber más</button>
        </div>        
        <div class="cat-card">
            <img src="./Imagenes_Animales/gatos/cookie.jpeg" alt="Gato en adopción">
            <h4>Luna</h4>
            <p>Raza: Persa | Fecha de nacimiento: 08/2022 | Tamaño: Pequeño</p>
            <button>Saber más</button>
        </div>       
        <div class="cat-card">
            <img src="./Imagenes_Animales/gatos/joy.jpeg" alt="Gato en adopción">
            <h4>Luna</h4>
            <p>Raza: Persa | Fecha de nacimiento: 08/2022 | Tamaño: Pequeño</p>
            <button>Saber más</button>
        </div>        
        <div class="cat-card">
            <img src="./Imagenes_Animales/gatos/carey.jpeg" alt="Gato en adopción">
            <h4>Luna</h4>
            <p>Raza: Persa | Fecha de nacimiento: 08/2022 | Tamaño: Pequeño</p>
            <button>Saber más</button>
        </div>        
        <div class="cat-card">
            <img src="./Imagenes_Animales/gatos/ray.jpeg" alt="Gato en adopción">
            <h4>Luna</h4>
            <p>Raza: Persa | Fecha de nacimiento: 08/2022 | Tamaño: Pequeño</p>
            <button>Saber más</button>
        </div>        
        <div class="cat-card">
            <img src="./Imagenes_Animales/gatos/paulina.jpeg" alt="Gato en adopción">
            <h4>Luna</h4>
            <p>Raza: Persa | Fecha de nacimiento: 08/2022 | Tamaño: Pequeño</p>
            <button>Saber más</button>
        </div>       
         <div class="cat-card">
            <img src="./Imagenes_Animales/gatos/falccon.jpeg" alt="Gato en adopción">
            <h4>Luna</h4>
            <p>Raza: Persa | Fecha de nacimiento: 08/2022 | Tamaño: Pequeño</p>
            <button>Saber más</button>
        </div>       
         <div class="cat-card">
            <img src="./Imagenes_Animales/gatos/vegeta.jpeg" alt="Gato en adopción">
            <h4>Luna</h4>
            <p>Raza: Persa | Fecha de nacimiento: 08/2022 | Tamaño: Pequeño</p>
            <button>Saber más</button>
        </div>        
        <div class="cat-card">
            <img src="./Imagenes_Animales/gatos/goku.jpeg" alt="Gato en adopción">
            <h4>Luna</h4>
            <p>Raza: Persa | Fecha de nacimiento: 08/2022 | Tamaño: Pequeño</p>
            <button>Saber más</button>
        </div>        
        <div class="cat-card">
            <img src="./Imagenes_Animales/gatos/eureka.jpeg" alt="Gato en adopción">
            <h4>Luna</h4>
            <p>Raza: Persa | Fecha de nacimiento: 08/2022 | Tamaño: Pequeño</p>
            <button>Saber más</button>
        </div>        
        <div class="cat-card">
            <img src="./Imagenes_Animales/gatos/enxeneta.jpeg" alt="Gato en adopción">
            <h4>Luna</h4>
            <p>Raza: Persa | Fecha de nacimiento: 08/2022 | Tamaño: Pequeño</p>
            <button>Saber más</button>
        </div>
    </section>
    <footer class="footer">
        © 2025 PetLover | Contacto: petlover@gmail.com
    </footer>

</body>
</html>