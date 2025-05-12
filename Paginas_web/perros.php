<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perros en Adopción - Petlover</title>
    <link rel="stylesheet" href="./Css_Paginas/Perros.css">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;600&display=swap" rel="stylesheet">
</head>
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
        <select id="raza" onchange="filtrarPerros()">
    <option value="">Selecciona una raza</option>
    <option value="cattle dog">Cattle dog</option>
    <option value="mestiza">Mestiza</option>
    <option value="mestizo">Mestizo</option>
    <option value="cruce mastín">Cruce mastín</option>
    <option value="pitbull">Pitbull</option>
    <option value="cruce sharpei con podenco">Cruce sharpei con podenco</option>
    <option value="podenco maneto">Podenco Maneto</option>
    <option value="podenco">Podenco</option>
    <option value="pastor aleman">Pastor aleman</option>
    <option value="pachon navarro">Pachon navarro</option>
    <option value="american staffordshire terrier">American Staffordshire Terrier</option>
    <option value="kopov eslovaco">Kopov eslovaco</option>
    <option value="fila brasileiro">Fila Brasileiro</option>
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
        <button onclick="filtrarPerros()">Buscar</button>
    </section>
    <section class="lista-perros" id="lista-perros">
        <div class="tarjeta-perro">
            <img src="./Imagenes_Animales/perros/kira.jpeg" alt="Perro en adopción">
            <h4>Kira</h4>
            <p>Raza: Cattle dog | Fecha de nacimiento: 5/2021  |  Tamaño: Mediano | Sexo: Hembra</p>
            <button>Saber más</button>
        </div>
        <div class="tarjeta-perro">
            <img src="./Imagenes_Animales/perros/greta.jpeg" alt="Perro en adopción">
            <h4>Greta</h4>
            <p>Raza: Mestiza  | Fecha de nacimiento: 01/2018 | Tamaño: Mediano | Sexo: Hembra</p>
            <button>Saber más</button>
        </div>
        <div class="tarjeta-perro">
            <img src="./Imagenes_Animales/perros/nerea.jpeg" alt="Perro en adopción">
            <h4>Nerea</h4>
            <p>Raza: Mestiza| Fecha de nacimiento: 06/2020  |  Tamaño: Mediano  | Sexo: Hembra</p>
            <button>Saber más</button>
        </div>
        <div class="tarjeta-perro">
            <img src="./Imagenes_Animales/perros/lia.jpg" alt="Perro en adopción">
            <h4>Lia</h4>
            <p>Raza:Cruce mastín  | Fecha de nacimiento: 08/2021 | Tamaño: Grado | Sexo: Hembra</p>
            <button>Saber más</button>
        </div><div class="tarjeta-perro">
            <img src="./Imagenes_Animales/perros/Blue.jpeg" alt="Perro en adopción">
            <h4>Blue</h4>
            <p>Raza Pitbull| Fecha de nacimiento: 03/2023  |  Tamaño: Mediano | Sexo: Hembra</p>
            <button>Saber más</button>
        </div>
        <div class="tarjeta-perro">
            <img src="./Imagenes_Animales/perros/pan.jpg" alt="Perro en adopción">
            <h4>Pan</h4>
            <p>Raza: Mestizo  | Fecha de nacimiento: 01/2023 | Tamaño: Mediano | Sexo: Macho</p>
            <button>Saber más</button>
        </div><div class="tarjeta-perro">
            <img src="./Imagenes_Animales/perros/dragon.jpeg" alt="Perro en adopción">
            <h4>Dragon</h4>
            <p>Raza:Mestizo | Fecha de nacimiento: 03/2021 |  Tamaño: Mediano | Sexo: Macho</p>
            <button>Saber más</button>
        </div>
        <div class="tarjeta-perro">
            <img src="./Imagenes_Animales/perros/doris.jpeg" alt="Perro en adopción">
            <h4>Doris</h4>
            <p>Raza: Mestizo  | Fecha de nacimiento:  08/2020 | Tamaño: Mediano | Sexo: Hembra</p>
            <button>Saber más</button>
        </div>
        <div class="tarjeta-perro">
            <img src="./Imagenes_Animales/perros/paulette.jpg" alt="Perro en adopción">
            <h4>Paulette</h4>
            <p>Raza: Podenco Maneto  | Fecha de nacimiento:  06/2021 | Tamaño: Mediano | Sexo: Hembra</p>
            <button>Saber más</button>
        </div>
        <div class="tarjeta-perro">
            <img src="./Imagenes_Animales/perros/bruno.jpeg" alt="Perro en adopción">
            <h4>Bruno</h4>
            <p>Raza: Mestizo  | Fecha de nacimiento:  02/2022 | Tamaño: Grande | Sexo: Macho </p>
            <button>Saber más</button>
        </div>
        <div class="tarjeta-perro">
            <img src="./Imagenes_Animales/perros/bola.jpeg" alt="Perro en adopción">
            <h4>Bola</h4>
            <p>Raza: Mestizo  | Fecha de nacimiento:  01/2023 | Tamaño: Mediano | Sexo: Macho </p>
            <button>Saber más</button>
        </div>
        <div class="tarjeta-perro">
            <img src="./Imagenes_Animales/perros/Mattiz.jpg" alt="Perro en adopción">
            <h4>Mattiz</h4>
            <p>Raza: Cruce sharpei con podenco  | Fecha de nacimiento:  10/2023 | Tamaño: Mediano | Sexo: Hembra</p>
            <button>Saber más</button>
        </div>
        <div class="tarjeta-perro">
            <img src="./Imagenes_Animales/perros/damarco.jpeg" alt="Perro en adopción">
            <h4>Damarco</h4>
            <p>Raza: Podenco  | Fecha de nacimiento:  11/2023 | Tamaño: Pequeño | Sexo: Macho </p>
            <button>Saber más</button>
        </div>
        <div class="tarjeta-perro">
            <img src="./Imagenes_Animales/perros/marcus.jpeg" alt="Perro en adopción">
            <h4>Marcus</h4>
            <p>Raza: Pastor aleman  | Fecha de nacimiento:  12/2020 | Tamaño: Grande | Sexo: Macho</p>
            <button>Saber más</button>
        </div>
        <div class="tarjeta-perro">
            <img src="./Imagenes_Animales/perros/tanque.jpeg" alt="Perro en adopción">
            <h4>Tanque</h4>
            <p>Raza: Pachon navarro  | Fecha de nacimiento:  08/2021 | Tamaño: Mediano | Sexo: Macho</p>
            <button>Saber más</button>
        </div>
        <div class="tarjeta-perro">
            <img src="./Imagenes_Animales/perros/akana.jpeg" alt="Perro en adopción">
            <h4>Akana</h4>
            <p>Raza: Mestizo  | Fecha de nacimiento:  05/2023 | Tamaño: Mediano | Sexo: Hembra </p>
            <button>Saber más</button>
        </div>
        <div class="tarjeta-perro">
            <img src="./Imagenes_Animales/perros/luar.jpeg" alt="Perro en adopción">
            <h4>Luar</h4>
            <p>Raza: Podenco  | Fecha de nacimiento:  07/2021 | Tamaño: Mediano | Sexo: Macho</p>
            <button>Saber más</button>
        </div>
        <div class="tarjeta-perro">
            <img src="./Imagenes_Animales/perros/selva.jpeg" alt="Perro en adopción">
            <h4>Selva</h4>
            <p>Raza: Mestizo  | Fecha de nacimiento:  01/2021 | Tamaño: Mediano | Sexo: Hembra</p>
            <button>Saber más</button>
        </div>
        <div class="tarjeta-perro">
            <img src="./Imagenes_Animales/perros/heros.jpeg" alt="Perro en adopción">
            <h4>Heros</h4>
            <p>Raza: Mestizo  | Fecha de nacimiento:  02/2023 | Tamaño: Mediano | Sexo: Macho </p>
            <button>Saber más</button>
        </div>
        <div class="tarjeta-perro">
            <img src="./Imagenes_Animales/perros/Sol.jpeg" alt="Perro en adopción">
            <h4>Sol</h4>
            <p>Raza: Mestizo  | Fecha de nacimiento:  04/2020 | Tamaño: Mediano | Sexo: Macho</p>
            <button>Saber más</button>
        </div>
        <div class="tarjeta-perro">
            <img src="./Imagenes_Animales/perros/serah.jpeg" alt="Perro en adopción">
            <h4>Serah</h4>
            <p>Raza: American Staffordshire Terrier  | Fecha de nacimiento:  01/2023 | Tamaño: Mediano | Sexo: Hembra</p>
            <button>Saber más</button>
        </div>
        <div class="tarjeta-perro">
            <img src="./Imagenes_Animales/perros/Bindi.jpeg" alt="Perro en adopción">
            <h4>Bindi</h4>
            <p>Raza: Mestizo | Fecha de nacimiento:  13/2016 | Tamaño: Mediano   | Sexo: Hembra</p>
            <button>Saber más</button>
        </div>
        <div class="tarjeta-perro">
            <img src="./Imagenes_Animales/perros/lola.jpg" alt="Perro en adopción">
            <h4>Lola</h4>
            <p>Raza: Mestizo  | Fecha de nacimiento:  12/2021 | Tamaño: Mediano  | Sexo: Hembra </p>
            <button>Saber más</button>
        </div>
        <div class="tarjeta-perro">
            <img src="./Imagenes_Animales/perros/thor.jpg" alt="Perro en adopción">
            <h4>Thor</h4>
            <p>Raza:Kopov eslovaco | Fecha de nacimiento:  06/2023 | Tamaño: Mediano  | Sexo: Macho</p>
            <button>Saber más</button>
        </div>
        <div class="tarjeta-perro">
            <img src="./Imagenes_Animales/perros/marina.jpeg" alt="Perro en adopción">
            <h4>Marina</h4>
            <p>Raza: Mestizo  | Fecha de nacimiento:  09/2021 | Tamaño: Mediano | Sexo: Hembra</p>
            <button>Saber más</button>
        </div>
        <div class="tarjeta-perro">
            <img src="./Imagenes_Animales/perros/goliath.jpg" alt="Perro en adopción">
            <h4>Goliath</h4>
            <p>Raza: Fila Brasileiro  | Fecha de nacimiento:  12/2020 | Tamaño: Grande  | Sexo: Macho </p>
            <button>Saber más</button>
        </div>
        <div class="tarjeta-perro">
            <img src="./Imagenes_Animales/perros/neo.jpeg" alt="Perro en adopción">
            <h4>Neo</h4>
            <p>Raza: Mestizo  | Fecha de nacimiento:  11/2023 | Tamaño: Grande | Sexo: Macho</p>
            <button>Saber más</button>
        </div>
        <div class="tarjeta-perro">
            <img src="./Imagenes_Animales/perros/duna.jpg" alt="Perro en adopción">
            <h4>Duna</h4>
            <p>Raza: Mestizo  | Fecha de nacimiento:  16/2021 | Tamaño: Mediano | Sexo: Hembra </p>
            <button>Saber más</button>
        </div>
        <div class="tarjeta-perro">
            <img src="./Imagenes_Animales/perros/tita.jpeg" alt="Perro en adopción">
            <h4>Tita</h4>
            <p>Raza: Mestizo  | Fecha de nacimiento:  10/2023| Tamaño: Mediano | Sexo: Hembra </p>
            <button>Saber más</button>
        </div>
        <div class="tarjeta-perro">
            <img src="./Imagenes_Animales/perros/nudo.jpg" alt="Perro en adopción">
            <h4>Nudo</h4>
            <p>Raza: Podenco | Fecha de nacimiento:  07/2024 | Tamaño: Pequeño | Sexo: Macho</p>
            <button>Saber más</button>
        </div>

    </section>
    <footer class="footer">
        © 2025 PetLover | Contacto: petlover@gmail.com
    </footer>
    <script>
function filtrarPerros() {
    const razaSeleccionada = document.getElementById('raza').value.toLowerCase();
    const tarjetas = document.querySelectorAll('.tarjeta-perro');

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
const historiasPerros = {
  "Kira": "Kira fue encontrada cuidando a otros perros abandonados. Su instinto protector la hace ideal para una familia con niños.",
  "Greta": "Greta pasó sus primeros años en una granja, siempre fiel a su dueño. Ahora busca un nuevo hogar donde entregar ese mismo amor.",
  "Nerea": "Nerea fue rescatada de una zona rural y ha demostrado ser una perrita dulce, sociable y muy lista.",
  "Lia": "Lia es fuerte y valiente, pero muy cariñosa. Fue hallada vagando por la montaña cuidando a sus cachorros.",
  "Blue": "Blue fue encontrada con una pata lastimada, pero nunca dejó de mover la cola. Es un torbellino de amor.",
  "Pan": "Pan nació en un refugio y creció viendo adoptar a sus hermanos. ¡Ahora es su turno!",
  "Dragon": "Dragon es tranquilo y leal. Le encanta estar a tu lado y protegerte mientras lees o ves la tele.",
  "Doris": "Doris fue salvada de una fábrica abandonada. Desde entonces, solo quiere caricias y compañía.",
  "Paulette": "Paulette es pequeña y muy ágil. Ideal para personas activas o amantes del senderismo.",
  "Bruno": "Bruno impresiona con su tamaño, pero es un peluche por dentro. Su ternura conquista a todos.",
  "Bola": "Bola es juguetón e inquieto. Adora correr por el jardín y dormir junto a ti en el sofá.",
  "Mattiz": "Mattiz fue rescatada con sus hermanos. Es sociable, juguetona y se lleva bien con todos.",
  "Damarco": "Damarco es un podenco curioso y valiente. Ama explorar y oler todo a su paso.",
  "Marcus": "Marcus es un perro noble que obedecerá cada orden si le ofreces una caricia a cambio.",
  "Tanque": "Tanque parece serio, pero adora las pelotas y se transforma en un cachorro cuando juega.",
  "Akana": "Akana fue la más valiente de su camada. Siempre protegía a sus hermanitos en el refugio.",
  "Luar": "Luar tiene una mirada sabia. Es tranquilo, atento y disfruta de los paseos en silencio.",
  "Selva": "Selva es una líder nata. Ayuda a otros perros tímidos a confiar en los humanos.",
  "Heros": "Heros fue encontrado rescatando a otro perrito atrapado. ¡Un verdadero héroe!",
  "Sol": "Sol es energía pura. Te llenará de alegría desde el amanecer hasta el anochecer.",
  "Serah": "Serah es fuerte y dulce. Fue entrenada para obediencia básica y ama aprender trucos nuevos.",
  "Bindi": "Bindi es la abuela del refugio. Calmada, sabia y lista para una familia serena.",
  "Lola": "Lola es elegante y tranquila. Le gusta observar desde su rincón y recibir caricias suaves.",
  "Thor": "Thor tiene nombre de dios y corazón de oro. Es un compañero fiel y valiente.",
  "Marina": "Marina ama el agua. ¡No puedes sacarla del charco cuando hay lluvia!",
  "Goliath": "Goliath es un gigante noble. Imponente pero extremadamente gentil con los niños.",
  "Neo": "Neo llegó en silencio y enamoró a todos con sus ojos grandes y su paciencia infinita.",
  "Duna": "Duna es ágil y veloz. Es perfecta para quienes aman correr o practicar canicross.",
  "Tita": "Tita es una bolita de ternura. Adora las mantas suaves y los abrazos largos.",
  "Nudo": "Nudo fue encontrado enredado entre ramas. Desde entonces, adora la libertad y los abrazos."
};

function mostrarFicha(nombre, imagen, info) {
  document.getElementById("fichaNombre").innerText = nombre;
  document.getElementById("fichaImagen").src = imagen;
  document.getElementById("fichaInfo").innerText = info;
  document.getElementById("fichaHistoria").innerText = historiasPerros[nombre] || "Este animal tiene mucho amor que dar. Ven a conocerlo.";
  document.getElementById("fichaAnimal").style.display = "block";
}

function cerrarFicha() {
  document.getElementById("fichaAnimal").style.display = "none";
}

document.querySelectorAll('.tarjeta-perro').forEach(card => {
  card.querySelector('button').addEventListener('click', () => {
    const nombre = card.querySelector('h4').innerText;
    const imagen = card.querySelector('img').src;
    const info = card.querySelector('p').innerText;
    mostrarFicha(nombre, imagen, info);
  });
});
</script>

</body>
</html>