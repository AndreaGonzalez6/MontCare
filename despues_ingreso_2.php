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
<!-- Coding by CodingNepal || www.codingnepalweb.com -->
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   
    
    <link rel="stylesheet" href="css/all.css" />
    <link rel="stylesheet" href="css/bootstrap.css" />
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
    <!-- Boxicons CSS -->
    <link flex href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/style.css" />
    
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
              <a href="http://localhost/MontCare/reservas/mis_citas.php" class="link flex">
                <i class="fa-solid fa-clipboard-user"></i>
                  <span>Mis Citas</span>
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


      <!-- Circulitos -->
      <div class="container-fluid colorg">
        <div class="row forma">
          <div class="col-lg-3">
            <a href="http://localhost/MontCare/reservar.php" class="text-decoration-none">
              <div class="bolita color1">
                <i class="tamaño iconos fa-solid fa-stethoscope" style="color: #ffffff"></i>
              </div>
              <p class="citas">Citas</p>
            </a>
          </div>
          <div class="col-lg-3">
            <a href="recomendaciones.html" class="text-decoration-none">
              <div class="bolita color2">
                <i class="tamaño iconos fa-solid fa-heart-pulse" style="color: #ffffff"></i>
              </div>
              <p class="recomendaciones">Recomendaciones</p>
            </a>
          </div>
          <div class="col-lg-3">
            <a href="despues_ingreso_servicios.php" class="text-decoration-none">
              <div class="bolita color3">
                <i class="tamaño iconos fa-regular fa-clipboard" style="color: #ffffff"></i>
              </div>
              <p class="profesionales">Servicios</p>
            </a>
          </div>
          <div class="col-lg-3">
            <a href="des_ingre_profesionales.php" class="text-decoration-none">
              <div class="bolita color4">
                <i class="tamaño iconos fa-solid fa-user-doctor" style="color: #ffffff"></i>
              </div>
              <p class="profesionales">Profesionales</p>
            </a>
          </div>
        </div>
      </div>

      <!-- Profesiones -->
      <div class="container-fluid profesiones" id="profesiones1">
        <input type="radio" name="slider" class="d-none" id="s1" checked>
        <input type="radio" name="slider" class="d-none" id="s2">
        <input type="radio" name="slider" class="d-none" id="s3">
        <input type="radio" name="slider" class="d-none" id="s4">
        <input type="radio" name="slider" class="d-none" id="s5">

        <div class="cards">

          <h1 class="h1E">Especialidades</h1>
          <label for="s1" id="slide1">
            <div class="card">
              <div class="image">
                <img src="imágenes/cardiologo3.jpg" alt="">
                <div class="dots">
                  <div></div>
                  <div></div>
                  <div></div>
                </div>
              </div>
              <div class="infos">
                <span class="name">CARDIOLOGÍA</span>
                <span class="lorem">Especialista en enfermedades del corazón y los vasos sanguíneos. Diagnostican y tratan
                  afecciones como enfermedad coronaria, insuficiencia cardíaca, hipertensión y realizan procedimientos como
                  cateterismos cardíacos.</span>
              </div>
              <a href="des_ingre_profesionales.php#cardiologia" class="btn-contact">Ver Especialistas</a>
            </div>
          </label>

          <label for="s2" id="slide2">
            <div class="card">
              <div class="image">
                <img src="imágenes/radiologo.jpg" alt="">
                <div class="dots">
                  <div class="dot1"></div>
                  <div class="dot2"></div>
                  <div class="dot3"></div>
                </div>
              </div>
              <div class="infos">
                <span class="name">RADIOLOGÍA</span>
                <span class="lorem">Los radiólogos interpretan imágenes médicas para diagnosticar afecciones internas.
                  Utilizan radiografías, tomografías computarizadas, resonancias magnéticas y otras técnicas avanzadas para
                  ayudar en el diagnóstico preciso de diversas enfermedades y lesiones.</span>
              </div>
              <a href="des_ingre_profesionales.php#radiologia" class="btn-contact">Ver Especialistas</a>
            </div>
          </label>

          <label for="s3" id="slide3">
            <div class="card">
              <div class="image">
                <img src="imágenes/ginecologo.jpg" alt="">
                <div class="dots">
                  <div class="dot1"></div>
                  <div class="dot2"></div>
                  <div class="dot3"></div>
                </div>
              </div>
              <div class="infos">
                <span class="name">GINECOLOGÍA Y OBSTETRICIA</span>
                <span class="lorem"> Especialista en la salud de la mujer. Diagnostican y tratan trastornos ginecológicos,
                  brindan atención prenatal, asisten en el parto y ofrecen cuidado postparto.</span>
              </div>
              <a href="des_ingre_profesionales.php#ginecologoObstetra" class="btn-contact">Ver Especialistas</a>
            </div>
          </label>

          <label for="s4" id="slide4">
            <div class="card">
              <div class="image">
                <img src="imágenes/dermatologa.jpg" alt="">
                <div class="dots">
                  <div class="dot1"></div>
                  <div class="dot2"></div>
                  <div class="dot3"></div>
                </div>
              </div>
              <div class="infos">
                <span class="name">DERMATOLOGÍA</span>
                <span class="lorem">Especialista en el cuidado de la piel, diagnóstico y tratamiento de enfermedades
                  cutáneas. Pueden tratar afecciones como acné, dermatitis, infecciones cutáneas, alergias, así como
                  realizar detección y tratamiento temprano de cáncer de piel.</span>
              </div>
              <a href="des_ingre_profesionales.php#dermatologo" class="btn-contact">Ver Especialistas</a>
            </div>
          </label>

          <label for="s5" id="slide5">
            <div class="card">
              <div class="image">
                <img src="imágenes/pediatra.jpg" alt="">
                <div class="dots">
                  <div class="dot1"></div>
                  <div class="dot2"></div>
                  <div class="dot3"></div>
                </div>
              </div>
              <div class="infos">
                <span class="name">PEDIATRÍA</span>
                <span class="lorem">Los pediatras son médicos especializados en la atención médica de niños y adolescentes.
                  Monitorean el crecimiento y desarrollo, manejan enfermedades pediátricas comunes y brindan orientación
                  sobre la salud infantil y el bienestar.</span>
              </div>
              <a href="des_ingre_profesionales.php#pediatra" class="btn-contact">Ver Especialistas</a>
            </div>
          </label>

        </div>

        <div class="button-container">
          <a href="profesiones.html">
            <button id="mostrarEspecialidades">Mostrar todas las especialidades</button>
          </a>
        </div>

      </div>

      <!-- Urgencias y Hospitalización -->
      <div class="container1">
        <div class="left">
          <div class="row">
            <div class="col-6">
              <h1>Te guiamos durante tu visita al Hospital</h1>
              <p>Te hacemos la vida más fácil. Te ayudamos a disponer de toda la información y a saber los trámites que
                necesitas hacer durante tu estancia en el Hospital y una vez hayas vuelto a casa.</p>
            </div>
            <div class="col-6">
              <ul>
                <hr>
                <li><a href="urgencias.html">Urgencias</a></li>
                <hr>
                <li><a href="hospitalizacion.html">Hospitalización</a></li>
                <hr>
              </ul>
            </div>
          </div>
        </div>
        <div class="right">
          <img src="imágenes/urgencias.jpg" alt="urgencias">
        </div>
      </div>

      <!-- Planes-->
      <div class="contenedor_planes">
        <div class="planes planes_laterales">
          <div class="planes_header header_laterales">
            <h2 class="title">BÁSICO</h2>
          </div>
          <div class="colita_header"></div>
          <div class="contenedor_price color-blanco">
            <p class="price">110.000 COP</p>
          </div>
          <div class="parrafos-planes">
            <p class="p-planes contenedor_price cursive_font">8 Especialidades </p>
          </div>
          <div class="parrafos-planes">
            <p class="p-planes contenedor_price cursive_font">Consultas médicas</p>
          </div>
          <div class="parrafos-planes">
            <p class="p-planes contenedor_price cursive_font"><i class="fa-solid fa-x margin_X" style="color: #a82610;"></i>No incluye Chat</p>
          </div>
          <div class="parrafos-planes">
            <p class="p-planes contenedor_price cursive_font">1 persona</p>
          </div>
          <div class="contenedor_price">
            <a href="planes.html">
              <button type="button" class="btn btn-planes btn-secondary xd cursive_font">
                <i class="fa-solid fa-circle-info" style="color: #000000;"></i> Más información
              </button>
            </a>

            <button type="submit" data-bs-toggle="modal" data-bs-target="#exampleModal1" class="btn btn-light  xd cursive_font">
              <i class="fa-solid fa-cart-shopping " style="color: #000000;"></i> Comprar
            </button>

          </div>

          <!-- Modal 1-->
          <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Plan Básico</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <!-- Contenido del modal -->
                  <p>Será dirigido al portal de pagos, ¿desea continuar?</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                  <a href="http://localhost/MontCare/portaldepagos.php"> <button type="button" class="btn btn-primary">Comprar</button></a>

                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="planes">
          <div class="planes_header">
            <h2 class="title">PROFESIONAL</h2>
          </div>
          <div class="colita_header"></div>
          <div class="contenedor_price">
            <p class="price">200.000 COP</p>
          </div>
          <div class="parrafos-planes">
            <p class="p-planes contenedor_price cursive_font">15 Especialidades </p>
          </div>
          <div class="parrafos-planes">
            <p class="p-planes contenedor_price cursive_font">Consultas médicas+</p>
          </div>
          <div class="parrafos-planes">
            <p class="p-planes contenedor_price cursive_font"><i class="fa-solid fa-check margin_X" style="color: #1e7406;"></i>Incluye Chat</p>
          </div>
          <div class="parrafos-planes">
            <p class="p-planes contenedor_price cursive_font">1 persona</p>
          </div>
          <div class="contenedor_price">
            <a href="planes.html">
              <button type="button" class="btn btn-planes btn-secondary xd cursive_font">
                <i class="fa-solid fa-circle-info" style="color: #000000;"></i> Más información
              </button>
            </a>

            <button type="button" class="btn btn-light  xd cursive_font" data-bs-toggle="modal" data-bs-target="#exampleModal2">
              <i class="fa-solid fa-cart-shopping" style="color: #000000;"></i> Comprar
            </button>

          </div>

          <!-- Modal 2-->
          <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Plan Profesional</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <!-- Contenido del modal -->
                  <p>Será dirigido al portal de pagos, ¿desea continuar?</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                  <a href="http://localhost/MontCare/portaldepagos2.php"> <button type="button" class="btn btn-primary">Comprar</button></a>
                </div>
              </div>
            </div>
          </div>
        </div>


        <div class="planes planes_laterales">
          <div class="planes_header header_laterales">
            <h2 class="title">EMPRESARIAL</h2>
          </div>
          <div class="colita_header"></div>
          <div class="contenedor_price">
            <p class="price">1'500.000 COP</p>
          </div>
          <div class="parrafos-planes">
            <p class="p-planes contenedor_price cursive_font">15 Especialidades </p>
          </div>
          <div class="parrafos-planes">
            <p class="p-planes contenedor_price cursive_font">Consultas médicas++</p>
          </div>
          <div class="parrafos-planes">
            <p class="p-planes contenedor_price cursive_font"><i class="fa-solid fa-check margin_X" style="color: #1e7406;"></i>Incluye Chat</i></p>
          </div>
          <div class="parrafos-planes">
            <p class="p-planes contenedor_price cursive_font">10 personas</p>
          </div>
          <div class="contenedor_price">
            <a href="planes.html">
              <button type="button" class="btn btn-planes btn-secondary xd cursive_font">
                <i class="fa-solid fa-circle-info" style="color: #000000;"></i> Más información
              </button>
            </a>
            <button type="button" class="btn btn-light  xd cursive_font" data-bs-toggle="modal" data-bs-target="#exampleModal3">
              <i class="fa-solid fa-cart-shopping" style="color: #000000;"></i> Comprar
            </button>
          </div>

          <!-- Modal 3-->
          <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Plan Empresarial</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <!-- Contenido del modal -->
                  <p>Será dirigido al portal de pagos, ¿desea continuar?</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                  <a href="http://localhost/MontCare/portaldepagos3.php"> <button type="button" class="btn btn-primary">Comprar</button></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- mapa, contacto y comentarios-->
      <div class="container-fluid">

        <!-- mapa -->
        <div class="row">
          <div class="col-12 p-0 m-0">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1012038.5073239644!2d-76.87803499835161!3d7.760587790236882!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e5b1bdbcca8e949%3A0x4915ae745046fafe!2zTW9udGVsw61iYW5v!5e0!3m2!1ses-419!2sco!4v1692743172174!5m2!1ses-419!2sco" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"> </iframe>
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
  <!-- jQuery and Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="js/bootstrap.js"></script>
  <script src="js/all.js"></script>
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script src="js/javaScript.js"></script>
  <script src="//code.tidio.co/crd6vpdlk8pwba7wbwablevojjq3pnix.js" async></script>


</body>

</html>
