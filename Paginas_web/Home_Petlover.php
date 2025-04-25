<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PetLover home - Adopción de Mascotas </title>
    <link rel="stylesheet" href="/Paginas_web/Css_Paginas/Home_Petlover.css">
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
            <a href="Perros.html" class="tarjeta-categoria">🐶 <h3>Perros</h3></a>
            <a href="gatos.html" class="tarjeta-categoria">🐱 <h3>Gatos</h3></a>
        </div>
    </section>
<!-- 🐾 Sección de Perros y Gatos Destacados con grandes necesidades! -->
<!-- 🐾 Sección de Perros -->
    <section class="seccion-destacados">
        <h2 class="titulo-destacados">🐶🐱 Mascotas Destacadas</h2>
        <div class="contenedor-destacados">
        </section>
        <section class="seccion-destacados">
            <div class="tarjeta-mascota">
                <h4>Max</h4>
                <img src="./Imagenes_Animales/nerea.png" alt="Perro en adopción">
                <p>Raza: Pastor Belga Malioisse | Fecha de nacimiento: 22/02/2020</p>
                <button> Conoceme! </button>
            </div>
<!-- 🐾 Sección de Gatos -->
            <div class="tarjeta-mascota">
                <h4>Isis</h4>
                <img src="./Imagenes_Animales/isis.png" alt="Gato en adopción">
                <p> Raza: Europea | Fecha de nacimiento: 01/06/2019</p>
                <button>Conoceme! </button>
            </div>
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