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
            <img src="./Imagenes_Animales/perros/dog1.png" alt="Perro en adopción">
            <h4>Miga</h4>
            <p>Raza Mestiza| Fecha de nacimiento: 5/2017  |  Tamaño: Mediano </p>
            <button>Saber más</button>
        </div>
        <div class="tarjeta-perro">
            <img src="./Imagenes_Animales/perros/dog2.png" alt="Perro en adopción">
            <h4>Lolo</h4>
            <p>Raza: Mestizo  | Fecha de nacimiento: 02/2019 | Tamaño: Mediano </p>
            <button>Saber más</button>
        </div>
        <div class="tarjeta-perro">
            <img src="./Imagenes_Animales/perros/Sol.jpeg" alt="Perro en adopción">
            <h4>Sol</h4>
            <p>Raza Mestiza| Fecha de nacimiento: 06/2020  |  Tamaño: Mediano </p>
            <button>Saber más</button>
        </div>
        <div class="tarjeta-perro">
            <img src="./Imagenes_Animales/perros/Bindi.jpeg" alt="Perro en adopción">
            <h4>Bindi</h4>
            <p>Raza: Mestizo  | Fecha de nacimiento: 08/2021 | Tamaño: Mediano </p>
            <button>Saber más</button>
        </div><div class="tarjeta-perro">
            <img src="./Imagenes_Animales/perros/Blue.jpeg" alt="Perro en adopción">
            <h4>Blue</h4>
            <p>Raza Pitbull| Fecha de nacimiento: 03/2023  |  Tamaño: Mediano </p>
            <button>Saber más</button>
        </div>
        <div class="tarjeta-perro">
            <img src="./Imagenes_Animales/perros/Pan.jpeg" alt="Perro en adopción">
            <h4>Pan</h4>
            <p>Raza: Mestizo  | Fecha de nacimiento: 01/2023 | Tamaño: Mediano </p>
            <button>Saber más</button>
        </div><div class="tarjeta-perro">
            <img src="./Imagenes_Animales/perros/goliath.jpg" alt="Perro en adopción">
            <h4>Goliath</h4>
            <p>Raza Fila Brasileiro | Fecha de nacimiento: 03/2018 |  Tamaño: Mediano </p>
            <button>Saber más</button>
        </div>
        <div class="tarjeta-perro">
            <img src="./Imagenes_Animales/perros/Mattiz.jpg" alt="Perro en adopción">
            <h4>Mattiz</h4>
            <p>Raza: Mestizo  | Fecha de nacimiento:  10/2016 | Tamaño: Mediano </p>
            <button>Saber más</button>
        </div>
    </section>
    <footer class="footer">
        © 2025 PetLover | Contacto: petlover@gmail.com
    </footer>
    
</body>
</html>