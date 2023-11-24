<?php

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
      <link rel="stylesheet" href="css/quienessomos2.css">
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
              <a href="http://localhost/MontCare/reservas/mis_citas.php" class="link flex">
                <i class="fa-solid fa-clipboard-user user"></i>
                <style>
                    .user{
                      font-size: 22px;
                      margin-left: 6px;
                      padding: 15px;
                    }
                  </style>
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
          <div class="container-fluid ">
        <div class="imagen2">
            <div class="ps text-black">
                <div class="1"> <a href="#nosotros">
                        <p class="imagen-texto text-black">Nosotros</p>
                    </a></div>
                <div class="1"> <a href="#mision">
                        <p class="imagen-texto text-black">Misión</p>
                    </a></div>
                <div class="1"> <a href="#vision">
                        <p class="imagen-texto text-black">Visión</p>
                    </a></div>
                <div class="1"> <a href="#propuesta">
                        <p class="imagen-texto text-black">Propuesta de valor</p>
                    </a></div>
                <div class="1"> <a href="#compromiso">
                        <p class="imagen-texto text-black">Compromiso</p>
                    </a></div>
                <div class="1"> <a href="#principios">
                        <p class="imagen-texto text-black">Principios</p>
                    </a></div>
                <div class="1"> <a href="#objetivos">
                        <p class="imagen-texto text-black">Objetivos</p>
                    </a></div>
            </div>
            <div class="intentando">
                <img src="imágenes/intentootravez.jpg" class="imagenHospital" alt="hospital">
            </div>
        </div>
        <hr class="linea">

          <div class="container" id="nosotros">
            <div class="row nosotros" id="mision">
                <div class="col-md-6">
                    <h2 class="tit1"> Nosotros </h2>
                    <p class="p1"> Somos Montcare Hospital, dedicados a mejorar la atención médica en áreas
                        desfavorecidas.
                        Nuestro compromiso es garantizar un acceso local a servicios médicos de calidad,
                        lo que tiene un impacto significativo en la calidad de vida de las comunidades que servimos.
                        En Montcare, nos dedicamos a marcar una diferencia positiva en la atención médica y
                        el bienestar de nuestros pacientes. </p>
                </div>
                <div class="col-md-6">
                    <img src="imágenes/nosotros.jpg" class="img1">
                </div>
            </div>
            <div class="row mision" id="vision">
                <div class="col-md-6 centrar_imagen">
                    <img src="imágenes/mision.jpg" class="img2">
                </div>
                <div class="col-md-6">
                    <h2 class="tit2"> Misión </h2>
                    <p class="p1"> Nuestra misión se basa en brindar atención médica de calidad a comunidades desfavorecidas
                        mediante
                        la creación de un centro médico especializado y una plataforma virtual de apoyo.
                        Nos comprometemos a ampliar el acceso a servicios médicos esenciales, lo que,
                        en última instancia, contribuye a mejorar la calidad de vida y el bienestar de los residentes en
                        estas comunidades.
                        Trabajamos incansablemente para garantizar que cada individuo reciba el cuidado médico
                        necesario,
                        promoviendo la salud y apoyando a estas poblaciones.
                    </p>
                </div>
            </div>
            <div class="row vision" id="propuesta">
                <div class="col-md-6">
                    <h2 class="tit3"> Visión </h2>
                    <p class="p1"> Visualizamos un futuro en el que nuestra plataforma virtual y nuestro centro médico
                        especializado
                        se conviertan en modelos ejemplares de atención médica, mejorando la vida de miles de personas
                        en toda Colombia. Nuestra visión es crear un ecosistema de atención médica inclusivo y
                        sostenible
                        que empodere a las comunidades y promueva la salud y el bienestar a largo plazo.
                    </p>
                </div>

                <div class="col-md-6 centrar_imagen">
                    <img src="imágenes/vision.jpg" class="img3">
                </div>
            </div>
            <div class="row propuesta" id="compromiso">
                <div class="col-md-6 centrar_imagen">
                    <img src="imágenes/propuesta.jpeg" class="img4">
                </div>
                <div class="col-md-6">
                    <h2 class="tit4"> Propuesta de valor </h2>
                    <p class="p1">Nuestra propuesta de valor es la carta de presentación del Hospital Privado Montelíbano. Nos
                        enorgullecemos de comunicar al mercado los múltiples beneficios de nuestro hospital, servicios
                        médicos y plataforma virtual, así como su profunda importancia para nuestros valiosos pacientes
                        y la comunidad en general.</p>

                    <p class="p1">Entendemos que la atención médica es esencial para la calidad de vida, y por eso nos esforzamos
                        en ofrecer lo siguiente:</p>

                    <ul>
                        <li class="p1"><strong class="p1">Calidad Médica Excepcional:</strong> Nuestros equipos médicos altamente calificados
                            y el sitio web garantizan una atención de calidad. Cada paciente recibe atención
                            personalizada y basada en evidencia.</li>
                        <li class="p1"><strong class="p1">Accesibilidad:</strong> Nos preocupamos por garantizar que la atención médica sea
                            accesible para todos, independientemente de su ubicación o recursos. Nuestra plataforma
                            virtual permite consultas a distancia, brindando atención oportuna incluso en áreas remotas.
                        </li>
                        <li class="p1"><strong class="p1">Interacción Efectiva:</strong> La plataforma virtual no solo ofrece consultas
                            médicas a distancia, sino también una interacción efectiva con especialistas en salud. Esta
                            tecnología facilita la comunicación continua y el seguimiento de tratamientos médicos.</li>
                        <li class="p1"><strong class="p1">Enfoque en el Paciente:</strong> Colocamos al paciente en el centro de todo lo que
                            hacemos. Nuestro compromiso es comprender las necesidades y preocupaciones individuales de
                            cada paciente para brindar una atención compasiva y centrada en ellos.</li>
                        <li class="p1"><strong class="p1">Referente en Innovación:</strong> Nos esforzamos por ser líderes en la adopción de
                            las últimas tecnologías y enfoques médicos. Buscamos constantemente soluciones innovadoras
                            que mejoren la calidad de vida de nuestros pacientes.</li>
                    </ul>

                    <p class="p1">Creemos que la atención médica de calidad es un derecho fundamental y estamos dedicados a
                        cumplirlo. Nuestra propuesta de valor es más que palabras; es nuestro compromiso inquebrantable
                        de brindar atención médica integral y mejorar la vida de quienes servimos.</p>

                </div>
            </div>
            <div class="row compromiso" id="valores">
                <div class="col-md-6">
                    <h2 class="tit5"> Compromiso </h2>
                    <p class="p1">En el Hospital Privado Montelíbano, estamos comprometidos con la salud y el bienestar
                        de nuestra comunidad. Nos esforzamos por brindar atención médica compasiva y
                        efectiva a todos nuestros pacientes, sin importar su condición económica o geográfica.</p>
                </div>
                <div class="col-md-6 ">
                    <img src="imágenes/compromiso2.jpg" class="img5">
                </div>
            </div>
            <div class="row valores" id="principios">
                <div class="col-md-6 centrar_imagen">
                    <img src="imágenes/principios.jpg" class="img6" alt="">
                </div>
                <div class="col-md-6">
                    <h2 class="tit6"> Valores </h2>
                    <p class="p1"><b class="p1">Honestidad:</b> Actuamos siempre con fundamento en la verdad, cumpliendo nuestros deberes con
                        transparencia y siempre favoreciendo el interés general.</p>
                    <p class="p1"><b class="p1">Respeto:</b> Reconocemos, valoramos y tratamos de manera digna a todas las personas, con sus
                        virtudes y defectos, sin importar su labor, su procedencia, títulos o cualquier otra condición.
                    </p>
                    <p class="p1"><b class="p1">Compromiso:</b> Somos conscientes de la importancia de nuestro rol como servidores públicos y
                        estamos en disposición permanente para comprender y resolver las necesidades de las personas con
                        las que nos relacionamos en nuestras labores cotidianas, buscando siempre mejorar su bienestar.
                    </p>
                    <p class="p1"><b class="p1">Diligencia:</b> Cumplimos con los deberes, funciones y responsabilidades asignadas a nuestro
                        cargo de la mejor manera posible, con atención, prontitud, destreza y eficiencia, para optimizar
                        el uso de los recursos del estado.</p>
                    <p class="p1"><b class="p1">Justicia:</b> Actuamos con imparcialidad garantizando los derechos de las personas, con
                        equidad, igualdad y sin discriminación.</p>
                    <p class="p1"><b class="p1">Seguridad:</b> Mantenemos comportamientos y actitudes que contribuyen a prevenir y minimizar
                        los riesgos para la organización y los usuarios.</p>
                </div>
            </div>
            <div class="row principios" id="objetivos">
                <div class="col-md-6">
                    <h2 class="tit7"> Principios </h2>
                    <ul class="p2">
                        <li>Excelencia en la atención médica.</li>
                        <li>Respeto por la dignidad de cada paciente.</li>
                        <li>Ética en todas nuestras interacciones.</li>
                        <li>Colaboración con la comunidad y otros proveedores de atención médica.</li>
                    </ul>
                </div>
                <div class="col-md-6 centrar_imagen">
                    <img src="imágenes/valores.jpg" class="img7" alt="">
                </div>
            </div>
            <div class="row objetivos">
                <div class="col-md-6 centrar_imagen">
                    <img src="imágenes/objetivos.jpeg" class="img8" alt="">
                </div>
                <div class="col-md-6">
                    <h2 class="tit8"> Objetivos y Funciones </h2>
                    <ul class="p3">
                        <li>Ofrecer servicios de salud de alta calidad.</li>
                        <li>Satisfacer las necesidades médicas de la comunidad de Montelíbano y sus alrededores.</li>
                        <li>Promover la salud y el bienestar de nuestros pacientes.</li>
                        <li>Contribuir al desarrollo de la salud en la región de Montelíbano.</li>
                    </ul>
                </div>
            </div>

        </div> <!-- Contenedor información -->
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
                    <form action="https://formsubmit.co/alexabedoyarojas123@gmail.com" method="POST" id="miFormulario"
                        onsubmit="return mostrarConfirmacion()">
                        <h2 class="titulo"> ¡Sección de comentarios! </h2>

                        <i class="fa-solid fa-user nombre"></i>
                        <input type="text" id="nombre" name="nombre" placeholder="Ingrese su nombre" required> <br>

                        <i class="fa-solid fa-envelope correo"></i>
                        <input type="email" id="correo" name="correo" placeholder="Ingrese su correo" required> <br>

                        <i class="fa-solid fa-bullhorn megafono"></i>
                        <select name="format" id="miSelect" onchange="cambiarPlaceholder()" required>
                            <option selected disabled>P-Q-R-S
                            <option class="peticion" value="peticion">Petición</option>
                            <option class="queja" value="queja">Queja</option>
                            <option class="reclamo" value="reclamo">Reclamo</option>
                            <option class="solicitud" value="solicitud">Solicitud</option>
                        </select> <br>

                        <i class="fa-regular fa-comment comentario"></i>
                        <textarea id="comentario" name="comentario" rows="5" placeholder="Comentario"
                            required></textarea> <br> <br>

                        <script>
                            function cambiarPlaceholder() {
                                var select = document.getElementById("miSelect");
                                var textarea = document.getElementById("comentario");
                                var selectedOption = select.options[select.selectedIndex];

                                if (selectedOption.value === "peticion") {
                                    textarea.placeholder = "Escriba aquí su petición";
                                }
                                else if (selectedOption.value === "reclamo") {
                                    textarea.placeholder = "Escriba aquí su reclamo";
                                } else if (selectedOption.value === "queja") {
                                    textarea.placeholder = "Escriba aquí su queja";
                                } else if (selectedOption.value === "solicitud") {
                                    textarea.placeholder = "Escriba aquí su solicitud";
                                } else {
                                    textarea.placeholder = "Comentario";
                                }
                            }

                            function mostrarConfirmacion() {
                                alert("¡El formulario se envió correctamente!");
                                return true;
                            }
                        </script>
                        <button type="submit" class="btn btn-primary mandar"> Enviar </button>
                        <input type="hidden" name="_next" value="http://127.0.0.1:5502/index.html">
                        <input type="hidden" name="_captcha" value="false">
                    </form>
                </div>

                <div class="col-md-2 centrar" style="background-color: rgb(67, 101, 104);">
                    <img src="imágenes/intento1.png" height="345vh">
                </div>


                <!-- contacto -->
                <div class="col-md-6 text-light fondoContacto" id="contact">
                    <div class="row fila">
                        <div class="col-md-12">
                            <h2 class="titulo pt-1">Información de Contacto</h2>
                            <p><strong class="letra"><i class="fa-solid fa-location-dot" style="color: #e8e8e8;"></i>
                                    Dirección:
                                </strong>
                                Barrio piñalito Calle -11 Carrera - #11-43 <br> Montelíbano-Córdoba

                            </p>
                            <p><strong class="letra"><i class="fa-solid fa-phone" style="color: #e8e8e8;"></i>
                                    Teléfono:</strong>
                                604-342-3954</p>
                            <p><strong class="letra"> <i class="fa-solid fa-envelope" style="color: #e8e8e8;"></i>
                                    Email: </strong>
                                CentroHospitalario@MontCare.com</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="redes">
                                <a href="https://api.whatsapp.com/send?phone=3052781531" target="_blank"> <i
                                        class="fab fa-brands fa-whatsapp tamaños wpp"></i></a>
                                <a href="https://instagram.com/ice.cream_draws?igshid=MTRjd3RlbmNtMHYybQ=="
                                    target="_blank"> <i class="fab fa-brands fa-instagram tamaños ig"></i></a>
                                <a href="https://x.com/ice_cream2903?t=XOiJhroPm4P0Hyo2vaBxrg&s=09" target="_blank"> <i
                                        class="fa-brands fa-twitter tamaños tw"></i> </a>
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
