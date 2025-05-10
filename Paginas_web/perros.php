<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perros en Adopción - Petlover</title>
    <link rel="stylesheet" href="./Css_Paginas/Perros.css">
</head>
<body>
    <header>
    <?php
        include 'navbar.php';
    ?>
    </header>
    <section class="hero">
        <h2>Perros en Adopción</h2>
        <p>Encuentra el compañero ideal para ti.</p>
    </section>
    <section class="filters">
        <h3>Filtrar por:</h3>
        <select id="raza">
            <option value=""> Seleciona una raza</option>
            <option value="labrador">Labrador</option>
            <option value="pastor">Pastor Alemán</option>
            <option value="chihuahua">chihuahua</option>
        </select>
        <select  id="peso">
            <option value="">Selecciona un peso</option>
            <option value="paqueño">Peuqeño (-10kg)</option>
            <option value="mediano">Mediano (10-20kg)</option>
            <option value="grande">Grade (+25kg)</option>
        </select>
        <select id="edad">
            <option value="">Selecciona una edad</option>
            <option value="cachorro"> Cachorro (-1 año)</option>
            <option value="adulto">Adulto (1-7 años)</option>
            <option value="senior"> Senior (+7 años)</option>
        </select>
        <button onclick="filtrarPerror()">Buscar</button>
    </section>
    <section class="lista-perros" id="lista-perros">
        <div class="tarjeta-perro">
            <img src="./Imagenes_Animales/perros/kira.jpeg" alt="Perro en adopción">
            <h4>Kira</h4>
            <p>Raza Mestiza| Fecha de nacimiento: 5/2017  |  Tamaño: Mediano </p>
            <button>Saber más</button>
        </div>
        <div class="tarjeta-perro">
            <img src="./Imagenes_Animales/perros/greta.jpeg" alt="Perro en adopción">
            <h4>Greta</h4>
            <p>Raza: Mestizo  | Fecha de nacimiento: 02/2019 | Tamaño: Mediano </p>
            <button>Saber más</button>
        </div>
        <div class="tarjeta-perro">
            <img src="./Imagenes_Animales/perros/Blue.jpeg" alt="Perro en adopción">
            <h4>Blue</h4>
            <p>Raza Mestiza| Fecha de nacimiento: 06/2020  |  Tamaño: Mediano </p>
            <button>Saber más</button>
        </div>
        <div class="tarjeta-perro">
            <img src="./Imagenes_Animales/perros/lia.jpg" alt="Perro en adopción">
            <h4>Lia</h4>
            <p>Raza: Mestizo  | Fecha de nacimiento: 08/2021 | Tamaño: Mediano </p>
            <button>Saber más</button>
        </div><div class="tarjeta-perro">
            <img src="./Imagenes_Animales/perros/Blue.jpeg" alt="Perro en adopción">
            <h4>Blue</h4>
            <p>Raza Pitbull| Fecha de nacimiento: 03/2023  |  Tamaño: Mediano </p>
            <button>Saber más</button>
        </div>
        <div class="tarjeta-perro">
            <img src="./Imagenes_Animales/perros/pan.jpg" alt="Perro en adopción">
            <h4>Pan</h4>
            <p>Raza: Mestizo  | Fecha de nacimiento: 01/2023 | Tamaño: Mediano </p>
            <button>Saber más</button>
        </div><div class="tarjeta-perro">
            <img src="./Imagenes_Animales/perros/dragon.jpeg" alt="Perro en adopción">
            <h4>Dragon</h4>
            <p>Raza Fila Brasileiro | Fecha de nacimiento: 03/2018 |  Tamaño: Mediano </p>
            <button>Saber más</button>
        </div>
        <div class="tarjeta-perro">
            <img src="./Imagenes_Animales/perros/doris.jpeg" alt="Perro en adopción">
            <h4>Doris</h4>
            <p>Raza: Mestizo  | Fecha de nacimiento:  10/2016 | Tamaño: Mediano </p>
            <button>Saber más</button>
        </div>
        <div class="tarjeta-perro">
            <img src="./Imagenes_Animales/perros/paulette.jpg" alt="Perro en adopción">
            <h4>Paulette</h4>
            <p>Raza: Mestizo  | Fecha de nacimiento:  10/2016 | Tamaño: Mediano </p>
            <button>Saber más</button>
        </div>
        <div class="tarjeta-perro">
            <img src="./Imagenes_Animales/perros/bruno.jpeg" alt="Perro en adopción">
            <h4>Bruno</h4>
            <p>Raza: Mestizo  | Fecha de nacimiento:  10/2016 | Tamaño: Mediano </p>
            <button>Saber más</button>
        </div>
        <div class="tarjeta-perro">
            <img src="./Imagenes_Animales/perros/bola.jpeg" alt="Perro en adopción">
            <h4>Bola</h4>
            <p>Raza: Mestizo  | Fecha de nacimiento:  10/2016 | Tamaño: Mediano </p>
            <button>Saber más</button>
        </div>
        <div class="tarjeta-perro">
            <img src="./Imagenes_Animales/perros/Mattiz.jpg" alt="Perro en adopción">
            <h4>Mattiz</h4>
            <p>Raza: Mestizo  | Fecha de nacimiento:  10/2016 | Tamaño: Mediano </p>
            <button>Saber más</button>
        </div>
        <div class="tarjeta-perro">
            <img src="./Imagenes_Animales/perros/Mattiz.jpg" alt="Perro en adopción">
            <h4>Mattiz</h4>
            <p>Raza: Mestizo  | Fecha de nacimiento:  10/2016 | Tamaño: Mediano </p>
            <button>Saber más</button>
        </div>
        <div class="tarjeta-perro">
            <img src="./Imagenes_Animales/perros/marcus.jpeg" alt="Perro en adopción">
            <h4>Marcus</h4>
            <p>Raza: Mestizo  | Fecha de nacimiento:  10/2016 | Tamaño: Mediano </p>
            <button>Saber más</button>
        </div>
        <div class="tarjeta-perro">
            <img src="./Imagenes_Animales/perros/tanque.jpeg" alt="Perro en adopción">
            <h4>Tanque</h4>
            <p>Raza: Mestizo  | Fecha de nacimiento:  10/2016 | Tamaño: Mediano </p>
            <button>Saber más</button>
        </div>
        <div class="tarjeta-perro">
            <img src="./Imagenes_Animales/perros/akana.jpeg" alt="Perro en adopción">
            <h4>Akana</h4>
            <p>Raza: Mestizo  | Fecha de nacimiento:  10/2016 | Tamaño: Mediano </p>
            <button>Saber más</button>
        </div>
        <div class="tarjeta-perro">
            <img src="./Imagenes_Animales/perros/luar.jpeg" alt="Perro en adopción">
            <h4>Luar</h4>
            <p>Raza: Mestizo  | Fecha de nacimiento:  10/2016 | Tamaño: Mediano </p>
            <button>Saber más</button>
        </div>
        <div class="tarjeta-perro">
            <img src="./Imagenes_Animales/perros/selva.jpeg" alt="Perro en adopción">
            <h4>Selva</h4>
            <p>Raza: Mestizo  | Fecha de nacimiento:  10/2016 | Tamaño: Mediano </p>
            <button>Saber más</button>
        </div>
        <div class="tarjeta-perro">
            <img src="./Imagenes_Animales/perros/heros.jpeg" alt="Perro en adopción">
            <h4>Heros</h4>
            <p>Raza: Mestizo  | Fecha de nacimiento:  10/2016 | Tamaño: Mediano </p>
            <button>Saber más</button>
        </div>
        <div class="tarjeta-perro">
            <img src="./Imagenes_Animales/perros/Sol.jpeg" alt="Perro en adopción">
            <h4>Sol</h4>
            <p>Raza: Mestizo  | Fecha de nacimiento:  10/2016 | Tamaño: Mediano </p>
            <button>Saber más</button>
        </div>
        <div class="tarjeta-perro">
            <img src="./Imagenes_Animales/perros/serah.jpeg" alt="Perro en adopción">
            <h4>Serah</h4>
            <p>Raza: Mestizo  | Fecha de nacimiento:  10/2016 | Tamaño: Mediano </p>
            <button>Saber más</button>
        </div>
        <div class="tarjeta-perro">
            <img src="./Imagenes_Animales/perros/Bindi.jpeg" alt="Perro en adopción">
            <h4>Bindi</h4>
            <p>Raza: Mestizo  | Fecha de nacimiento:  10/2016 | Tamaño: Mediano </p>
            <button>Saber más</button>
        </div>
        <div class="tarjeta-perro">
            <img src="./Imagenes_Animales/perros/lola.jpg" alt="Perro en adopción">
            <h4>Lola</h4>
            <p>Raza: Mestizo  | Fecha de nacimiento:  10/2016 | Tamaño: Mediano </p>
            <button>Saber más</button>
        </div>
        <div class="tarjeta-perro">
            <img src="./Imagenes_Animales/perros/thor.jpg" alt="Perro en adopción">
            <h4>Thor</h4>
            <p>Raza: Mestizo  | Fecha de nacimiento:  10/2016 | Tamaño: Mediano </p>
            <button>Saber más</button>
        </div>
        <div class="tarjeta-perro">
            <img src="./Imagenes_Animales/perros/marina.jpeg" alt="Perro en adopción">
            <h4>Marina</h4>
            <p>Raza: Mestizo  | Fecha de nacimiento:  10/2016 | Tamaño: Mediano </p>
            <button>Saber más</button>
        </div>
        <div class="tarjeta-perro">
            <img src="./Imagenes_Animales/perros/goliath.jpg" alt="Perro en adopción">
            <h4>Goliath</h4>
            <p>Raza: Mestizo  | Fecha de nacimiento:  10/2016 | Tamaño: Mediano </p>
            <button>Saber más</button>
        </div>
        <div class="tarjeta-perro">
            <img src="./Imagenes_Animales/perros/neo.jpeg" alt="Perro en adopción">
            <h4>Neo</h4>
            <p>Raza: Mestizo  | Fecha de nacimiento:  10/2016 | Tamaño: Mediano </p>
            <button>Saber más</button>
        </div>
        <div class="tarjeta-perro">
            <img src="./Imagenes_Animales/perros/duna.jpg" alt="Perro en adopción">
            <h4>Duna</h4>
            <p>Raza: Mestizo  | Fecha de nacimiento:  10/2016 | Tamaño: Mediano </p>
            <button>Saber más</button>
        </div>
        <div class="tarjeta-perro">
            <img src="./Imagenes_Animales/perros/tita.jpeg" alt="Perro en adopción">
            <h4>Tita</h4>
            <p>Raza: Mestizo  | Fecha de nacimiento:  10/2016 | Tamaño: Mediano </p>
            <button>Saber más</button>
        </div>
        <div class="tarjeta-perro">
            <img src="./Imagenes_Animales/perros/nudo.jpg" alt="Perro en adopción">
            <h4>Nudo</h4>
            <p>Raza: Mestizo  | Fecha de nacimiento:  10/2016 | Tamaño: Mediano </p>
            <button>Saber más</button>
        </div>

    </section>
    <footer class="footer">
        © 2025 PetLover | Contacto: petlover@gmail.com
    </footer>
    
</body>
</html>