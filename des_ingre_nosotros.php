<?php
include("citas-medicas/includes/db.php");
include("php/conexion_be.php");



session_start();

if(!isset($_SESSION['usuario'])){
    echo'
      <script> 
      alert("Debes iniciar sesión para acceder a esta página");
      window.location = "index.php"; 
      </script>    
    ';
    session_destroy();
    die();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/all.css" />
    <link rel="stylesheet" href="css/bootstrap.css"/>
    <link rel="preload" href="css/normalize.css" as="style"> <!--Para cargar la hoja de estilos más rápido -->
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
      integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
      crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,1,0" />
    <link rel="shortcut icon" href="imágenes/loguito.png" type="image/x-icon" />
    <title>Centro Hospitalario MontCare</title>
    <link rel="preload" href="css/estilos.css" as="style">
    <link rel="stylesheet" href="css/estilos.css" />
      <link rel="stylesheet" href="css/quienesSomos.css">
    <link flex href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/style.css">
    
</head>
<body>
    

    <div class="container-1">
        <aside class="sidebar">
          <!-- Contenido del sidebar -->
          <nav class="sidebar locked">
        <div class="logo_items flex">
          <span class="nav_image">
            <img src="imágenes/logo.png" alt="logo_img" />
          </span>
          <span class="logo_name">MontCare</span>
        </div>

        <div class="menu_container">
          <div class="menu_items">
            <ul class="menu_item">

              <li class="item">
                <a href="despues_ingreso.php" class="link flex">
                  <i class="bx bx-home-alt"></i>
                  <span>Inicio</span>
                </a>
              </li>
              <li class="item">
                <a href="des_ing_info_planes.php" class="link flex">
                  <i class="bx bx-grid-alt"></i>
                  <span>Planes</span>
                </a>
              </li>
            </ul>

            <ul class="menu_item">
              <li class="item">
                <a href="des_ingre_nosotros.php" class="link flex">
                  <i class="bx bxs-magic-wand"></i>
                  <span>¿Quiénes somos?</span>
                </a>
              </li>
              <li class="item">
                <a href="http://localhost/MontCare/reservar.php" class="link flex">
                  <i class="bx bx-folder"></i>
                  <span>Citas</span>
                </a>
              </li>
            </ul>

            <ul class="menu_item">
              <li class="item">
                <a href="despues_ingreso_recomendaciones.php" class="link flex">
                  <i class="bx bx-flag"></i>
                  <span>Recomendaciones</span>
                </a>
              </li>
              <li class="item">
                <a href="#" class="link flex">
                  <i class="bx bx-cog"></i>
                  <span>Configuraciones</span>
                </a>
              </li>
              <li class="item">
                    <a href="php/cerrar_sesion.php" class="link flex">
                      <i class="bx bx-award"></i>
                      <span>Cerrar Sesión</span>
                    </a>
                  </li>
            </ul>
            <div class="sidebar_profile flex">
                <span class="nav_image">
                    <i class="fa-solid fa-user"></i>
                </span>
                <div class="data_text">
                  <span class="name">Bienvenid@</span>
                  
                </div>
          </div>

          <div class="sidebar_profile flex">
            
        
            
            
          </div>
        </div>
      </nav>
        </aside>
        <main class="content">
          <!-- Contenido principal -->
        </header>
        <!-- Contenido de Quienes Somos -->
        <section class="quienes-somos">
            <h2 id="nosotros">Nosotros</h2>
            <p>El Hospital Privado Montelíbano es una institución médica que surge como respuesta a los desafíos en la atención médica en áreas desfavorecidas, donde los servicios de salud son ineficientes y el acceso es tardío.</p>
            <img class="img-fluid" src="imágenes/hopital.jpg" alt="">
            <h3 id="mision">Misión</h3>
            <p>Proporcionar atención médica de alta calidad, segura y accesible a las comunidades desfavorecidas de Montelíbano, Córdoba, y sus alrededores. Nos comprometemos a abordar las problemáticas de salud en estas áreas, promoviendo el bienestar y la calidad de vida de nuestros pacientes.</p>
            
            <h3 id="vision">Visión</h3>
            <p>Convertirnos en el principal centro de atención médica especializada en Montelíbano y la región circundante. Buscamos ser líderes por nuestro modelo de atención innovador y por ser generadores de experiencias positivas en nuestros pacientes, nuestros colaboradores y la comunidad en general. Queremos contribuir significativamente a mejorar la salud y la atención médica en nuestra región.</p>
    
            <h3>Propuesta de Valor</h3>
            
            <p>Nuestra propuesta de valor es la carta de presentación del Hospital Privado Montelíbano. Nos enorgullecemos de comunicar al mercado los múltiples beneficios de nuestro hospital, servicios médicos y plataforma virtual, así como su profunda importancia para nuestros valiosos pacientes y la comunidad en general.</p>
    
            <p>Entendemos que la atención médica es esencial para la calidad de vida, y por eso nos esforzamos en ofrecer lo siguiente:</p>
    
    <ul>
        <li><strong>Calidad Médica Excepcional:</strong> Nuestros equipos médicos altamente calificados y el sitio web garantizan una atención de calidad. Cada paciente recibe atención personalizada y basada en evidencia.</li>
        <li><strong>Accesibilidad:</strong> Nos preocupamos por garantizar que la atención médica sea accesible para todos, independientemente de su ubicación o recursos. Nuestra plataforma virtual permite consultas a distancia, brindando atención oportuna incluso en áreas remotas.</li>
        <li><strong>Interacción Efectiva:</strong> La plataforma virtual no solo ofrece consultas médicas a distancia, sino también una interacción efectiva con especialistas en salud. Esta tecnología facilita la comunicación continua y el seguimiento de tratamientos médicos.</li>
        <li><strong>Enfoque en el Paciente:</strong> Colocamos al paciente en el centro de todo lo que hacemos. Nuestro compromiso es comprender las necesidades y preocupaciones individuales de cada paciente para brindar una atención compasiva y centrada en ellos.</li>
        <li><strong>Referente en Innovación:</strong> Nos esforzamos por ser líderes en la adopción de las últimas tecnologías y enfoques médicos. Buscamos constantemente soluciones innovadoras que mejoren la calidad de vida de nuestros pacientes.</li>
    </ul>
    
    <p>Creemos que la atención médica de calidad es un derecho fundamental y estamos dedicados a cumplirlo. Nuestra propuesta de valor es más que palabras; es nuestro compromiso inquebrantable de brindar atención médica integral y mejorar la vida de quienes servimos.</p>
    
            <h3>Compromiso</h3>
            <p>En el Hospital Privado Montelíbano, estamos comprometidos con la salud y el bienestar de nuestra comunidad. Nos esforzamos por brindar atención médica compasiva y efectiva a todos nuestros pacientes, sin importar su condición económica o geográfica.</p>
            <img class="img-fluid" src="imágenes/compromiso.jpg" alt="">
            <h3>Valores</h3>
            
                <p><b>Honestidad:</b> Actuamos siempre con fundamento en la verdad, cumpliendo nuestros deberes con transparencia y siempre favoreciendo el interés general.</p>
                <p><b>Respeto:</b> Reconocemos, valoramos y tratamos de manera digna a todas las personas, con sus virtudes y defectos, sin importar su labor, su procedencia, títulos o cualquier otra condición.</p>
                <p><b>Compromiso:</b> Somos conscientes de la importancia de nuestro rol como servidores públicos y estamos en disposición permanente para comprender y resolver las necesidades de las personas con las que nos relacionamos en nuestras labores cotidianas, buscando siempre mejorar su bienestar.</p>
                <p><b>Diligencia:</b> Cumplimos con los deberes, funciones y responsabilidades asignadas a nuestro cargo de la mejor manera posible, con atención, prontitud, destreza y eficiencia, para optimizar el uso de los recursos del estado.</p>
                <p><b>Justicia:</b> Actuamos con imparcialidad garantizando los derechos de las personas, con equidad, igualdad y sin discriminación.</p>
                <p><b>Seguridad:</b> Mantenemos comportamientos y actitudes que contribuyen a prevenir y minimizar los riesgos para la organización y los usuarios.</p>
            
    
            <h3>Principios</h3>
            <ul>
                <li>Excelencia en la atención médica.</li>
                <li>Respeto por la dignidad de cada paciente.</li>
                <li>Ética en todas nuestras interacciones.</li>
                <li>Colaboración con la comunidad y otros proveedores de atención médica.</li>
            </ul>
    
            
            <h3>Objetivos y Funciones</h3>
            <ul>
                <li>Ofrecer servicios de salud de alta calidad.</li>
                <li>Satisfacer las necesidades médicas de la comunidad de Montelíbano y sus alrededores.</li>
                <li>Promover la salud y el bienestar de nuestros pacientes.</li>
                <li>Contribuir al desarrollo de la salud en la región de Montelíbano.</li>
            </ul>
        </section>
          <!-- mapa, contacto y comentarios-->
      <div class="container-fluid">
    
        <!-- mapa -->
        <div class="row">
          <div class="col-12 p-0 m-0">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1012038.5073239644!2d-76.87803499835161!3d7.760587790236882!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e5b1bdbcca8e949%3A0x4915ae745046fafe!2zTW9udGVsw61iYW5v!5e0!3m2!1ses-419!2sco!4v1692743172174!5m2!1ses-419!2sco"
              width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"> </iframe>
          </div>
        </div>
    
        <!-- comentarios -->
        <div class="row">
          <div class="col-md-4 text-light centrar" style="background-color: rgb(67, 101, 104);">
            <form action="#" method="post">
              <h2 class="titulo"> ¡Sección de comentarios! </h2> 
    
              <i class="fa-solid fa-user nombre"></i>
              <input type="text" id="nombre" name="nombre" placeholder="Ingrese su nombre" required> <br>
    
              <i class="fa-solid fa-envelope correo"></i>
              <input type="email" id="correo" name="correo" placeholder="Ingrese su correo" required> <br>
    
              <i class="fa-regular fa-comment comentario"></i>
              <textarea id="comentario" name="comentario" rows="5" placeholder="Comentario" required></textarea> <br> <br>
    
              <button type="submit" class="btn btn-primary"> Enviar </button>
            </form>
          </div>
    
          <div class="col-md-2 centrar" style="background-color: rgb(67, 101, 104);">
            <img src="imágenes/intento1.png" height="306vh">
          </div>
    
    
          <!-- contacto -->
          <div class="col-md-6 text-light fondoContacto" id="contact">
            <div class="row fila">
              <div class="col-md-12">
                <h2 class="titulo pt-1">Información de Contacto</h2>
                <p><strong class="letra"><i class="fa-solid fa-location-dot" style="color: #e8e8e8;"></i> Dirección:
                  </strong>
                  Barrio piñalito Calle -11 Carrera - #11-43 <br> Montelíbano-Córdoba
    
                </p>
                <p><strong class="letra"><i class="fa-solid fa-phone" style="color: #e8e8e8;"></i> Teléfono:</strong>
                  604-342-3954</p>
                <p><strong class="letra"> <i class="fa-solid fa-envelope" style="color: #e8e8e8;"></i> Email: </strong>
                  CentroHospitalario@MontCare.com</p>
              </div>
            </div>
    
            <div class="row">
              <div class="col-md-12">
                <div class="redes">
                  <a href="#" target="_blank"> <i class="fab fa-brands fa-whatsapp tamaños wpp"></i></a>
                  <a href="#" target="_blank"> <i class="fab fa-brands fa-instagram tamaños ig"></i></a>
                  <a href="#" target="_blank"> <i class="fa-brands fa-twitter tamaños tw"></i> </a>
                  <a href="#" target="_blank"> <i class="fa-brands fa-facebook-f tamaños fb"></i> </a>
                  <a href="#" target="_blank"> <i class="fa-brands fa-tiktok tamaños tk"></i> </a>
                </div>
              </div>
            </div>
          </div>
        </div>
    
      </div>
    <hr class="lineap">
        <footer>
            <p>Derechos Reservados &copy; 2023 Hospital Privado MontCare</p>
        </footer>
        </main>
      </div>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
      integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
      crossorigin="anonymous"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/all.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="js/javaScript.js"></script>
</body>
</html>