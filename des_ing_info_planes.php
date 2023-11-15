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
    <title>Planes</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
    integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/planes.css">
    <link rel="shortcut icon" href="imágenes/loguito.png" type="image/x-icon" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
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
          <!-- Introducción -->
  <div class="contenedorImagen">
    <div class="mid-1">
      <div class="tituloplanes">
        <h1 class="tamañoTitulos">Con el plan complementario MontCare</h1>
      </div>
      <div class="parrafoPlanes">
        <h4>queremos que te sientas así de consentido
        </h4>
      </div>
     
    </div>
    <div class="mid-2">
      <div class="imagenPlanes">
      </div>
    </div>

  </div>
  <!-- fin Introducción -->
  <!-- tabla -->
  <div class="tabla">
  <table>
    <tr>
      <td colspan="6" class="fondoAzul-morado"><b>Plan Empresarial (Hasta 10 Personas):</b> Diseñado para grupos de hasta 10 personas, el plan empresarial
         ofrece una amplia cobertura que incluye acceso a 15 especialistas médicos. Es ideal para empresas y organizaciones que desean proporcionar
          una atención de primer nivel a su equipo.</th>
    </tr>
    <tr>
      <td colspan="6" class="fondoVerde" style="color: white;">
        <b>Plan Profesional (1 Persona):</b> Al igual que el plan empresarial, el plan profesional ofrece una cobertura completa para una sola persona,
         y brinda acceso a un equipo de 15 especialistas médicos de renombre para garantizar una atención de alta calidad.
      </th>
    </tr>
    <tr>
      <td colspan="6" class="fondoMarino" ><b>Plan Básico (1 Persona):</b> Este plan ofrece cobertura para una sola persona y proporciona acceso
         a 8 especialistas médicos altamente calificados para atender tus necesidades de salud.</th>
    </tr>
    
    <tr>
      <th colspan="3" class="fondoAzul-morado">Coberturas plan complementario hospital MontCare</th>
      <td class="fondoMarino" style="color: white;"><p class="centrar-texto">Básico</p></td>
      <td class="fondoVerde" style="color: white;"><p class="centrar-texto">Profesional</p></td>
      <td class="fondoAzul-morado"><p class="centrar-texto">Empresarial</p></td>
    </tr>
    <tr>
      <td colspan="6" rowspan="1" class="fondoEncabezado">No requiere remisión de médico general, ni autorización del PBS. 
        Cuentas con un directorio exclusivo de médicos especialistas que hacen parte de la red de atención del plan complementario</td>
    </tr>
    <tr>
      <td colspan="3">Cirujano general</td>
      <td class="fondoMarino"><div class="centrarIcono" style="display: flex; justify-content: center;"><i class="fas fa-check" style="color: #fcfcfc;"></i></div></td>
      <td class="fondoVerde"><div class="centrarIcono" style="display: flex; justify-content: center;"><i class="fas fa-check" style="color: #fcfcfc;"></i></div></td>
      <td class="fondoAzul-morado"><div class="centrarIcono" style="display: flex; justify-content: center;"><i class="fas fa-check" style="color: #fcfcfc;"></i></div></td>
    </tr>
    <tr>
      <td colspan="3">Pediatra</td>
      <td class="fondoMarino"><div class="centrarIcono" style="display: flex; justify-content: center;"><i class="fas fa-check" style="color: #fcfcfc;"></i></div></td>
      <td class="fondoVerde"><div class="centrarIcono" style="display: flex; justify-content: center;"><i class="fas fa-check" style="color: #fcfcfc;"></i></div></td>
      <td class="fondoAzul-morado"><div class="centrarIcono" style="display: flex; justify-content: center;"><i class="fas fa-check" style="color: #fcfcfc;"></i></div></td>
    </tr>
    <tr>
      <td colspan="3">Ginecólogo</td>
      <td class="fondoMarino"><div class="centrarIcono" style="display: flex; justify-content: center;"><i class="fas fa-check" style="color: #fcfcfc;"></i></div></td>
      <td class="fondoVerde"><div class="centrarIcono" style="display: flex; justify-content: center;"><i class="fas fa-check" style="color: #fcfcfc;"></i></div></td>
      <td class="fondoAzul-morado"><div class="centrarIcono" style="display: flex; justify-content: center;"><i class="fas fa-check" style="color: #fcfcfc;"></i></div></td>
    </tr>
    
    <tr>
      <td colspan="3">Cardiólogo</td>
      <td class="fondoMarino"><div class="centrarIcono" style="display: flex; justify-content: center;"><i class="fas fa-check" style="color: #fcfcfc;"></i></div></td>
      <td class="fondoVerde"><div class="centrarIcono" style="display: flex; justify-content: center;"><i class="fas fa-check" style="color: #fcfcfc;"></i></div></td>
      <td class="fondoAzul-morado"><div class="centrarIcono" style="display: flex; justify-content: center;"><i class="fas fa-check" style="color: #fcfcfc;"></i></div></td>
    </tr>
    <tr>
      <td colspan="3">Radiólogo</td>
      <td class="fondoMarino"><div class="centrarIcono" style="display: flex; justify-content: center;"><i class="fas fa-check" style="color: #fcfcfc;"></i></div></td>
      <td class="fondoVerde"><div class="centrarIcono" style="display: flex; justify-content: center;"><i class="fas fa-check" style="color: #fcfcfc;"></i></div></td>
      <td class="fondoAzul-morado"><div class="centrarIcono" style="display: flex; justify-content: center;"><i class="fas fa-check" style="color: #fcfcfc;"></i></div></td>
    </tr>
    <tr>
      <td colspan="3">Dermatólogo</td>
      <td class="fondoMarino"></td>
      <td class="fondoVerde"><div class="centrarIcono" style="display: flex; justify-content: center;"><i class="fas fa-check" style="color: #fcfcfc;"></i></div></td>
      <td class="fondoAzul-morado"><div class="centrarIcono" style="display: flex; justify-content: center;"><i class="fas fa-check" style="color: #fcfcfc;"></i></div></td>
    </tr>
    <tr>
      <td colspan="3">Neufrólogo</td>
      <td class="fondoMarino"><div class="centrarIcono" style="display: flex; justify-content: center;"><i class="fas fa-check" style="color: #fcfcfc;"></i></div></td>
      <td class="fondoVerde"><div class="centrarIcono" style="display: flex; justify-content: center;"><i class="fas fa-check" style="color: #fcfcfc;"></i></div></td>
      <td class="fondoAzul-morado"><div class="centrarIcono" style="display: flex; justify-content: center;"><i class="fas fa-check" style="color: #fcfcfc;"></i></div></td>
    </tr>
    <tr>
      <td colspan="3">Neumólogo</td>
      <td class="fondoMarino"><div class="centrarIcono" style="display: flex; justify-content: center;"><i class="fas fa-check" style="color: #fcfcfc;"></i></div></td>
      <td class="fondoVerde"><div class="centrarIcono" style="display: flex; justify-content: center;"><i class="fas fa-check" style="color: #fcfcfc;"></i></div></td>
      <td class="fondoAzul-morado"><div class="centrarIcono" style="display: flex; justify-content: center;"><i class="fas fa-check" style="color: #fcfcfc;"></i></div></td>
    </tr>
    <tr>
      <td colspan="3">Oncólogo</td>
      <td class="fondoMarino"></td>
      <td class="fondoVerde"><div class="centrarIcono" style="display: flex; justify-content: center;"><i class="fas fa-check" style="color: #fcfcfc;"></i></div></td>
      <td class="fondoAzul-morado"><div class="centrarIcono" style="display: flex; justify-content: center;"><i class="fas fa-check" style="color: #fcfcfc;"></i></div></td>
    </tr>
    <tr>
      <td colspan="3">Otorrinolaringólogo</td>
      <td class="fondoMarino"></td>
      <td class="fondoVerde"><div class="centrarIcono" style="display: flex; justify-content: center;"><i class="fas fa-check" style="color: #fcfcfc;"></i></div></td>
      <td class="fondoAzul-morado"><div class="centrarIcono" style="display: flex; justify-content: center;"><i class="fas fa-check" style="color: #fcfcfc;"></i></div></td>
    </tr>
    <tr>
      <td colspan="3">Traumatólogo y Ortopedista</td>
      <td class="fondoMarino"><div class="centrarIcono" style="display: flex; justify-content: center;"><i class="fas fa-check" style="color: #fcfcfc;"></i></div></td>
      <td class="fondoVerde"><div class="centrarIcono" style="display: flex; justify-content: center;"><i class="fas fa-check" style="color: #fcfcfc;"></i></div></td>
      <td class="fondoAzul-morado"><div class="centrarIcono" style="display: flex; justify-content: center;"><i class="fas fa-check" style="color: #fcfcfc;"></i></div></td>
    </tr>
    <tr>
      <td colspan="3">Neurologo</td>
      <td class="fondoMarino"></td>
      <td class="fondoVerde"><div class="centrarIcono" style="display: flex; justify-content: center;"><i class="fas fa-check" style="color: #fcfcfc;"></i></div></td>
      <td class="fondoAzul-morado"><div class="centrarIcono" style="display: flex; justify-content: center;"><i class="fas fa-check" style="color: #fcfcfc;"></i></div></td>
    </tr>
    <tr>
      <td colspan="3">Neurocirujano</td>
      <td class="fondoMarino"></td>
      <td class="fondoVerde"><div class="centrarIcono" style="display: flex; justify-content: center;"><i class="fas fa-check" style="color: #fcfcfc;"></i></div></td>
      <td class="fondoAzul-morado"><div class="centrarIcono" style="display: flex; justify-content: center;"><i class="fas fa-check" style="color: #fcfcfc;"></i></div></td>
    </tr>
    <tr>
      <td colspan="3">Fisioterapeuta</td>
      <td class="fondoMarino"></td>
      <td class="fondoVerde"><div class="centrarIcono" style="display: flex; justify-content: center;"><i class="fas fa-check" style="color: #fcfcfc;"></i></div></td>
      <td class="fondoAzul-morado"><div class="centrarIcono" style="display: flex; justify-content: center;"><i class="fas fa-check" style="color: #fcfcfc;"></i></div></td>
    </tr>
    <tr>
      <td colspan="3">Urólogo</td>
      <td class="fondoMarino"></td>
      <td class="fondoVerde"><div class="centrarIcono" style="display: flex; justify-content: center;"><i class="fas fa-check" style="color: #fcfcfc;"></i></div></td>
      <td class="fondoAzul-morado"><div class="centrarIcono" style="display: flex; justify-content: center;"><i class="fas fa-check" style="color: #fcfcfc;"></i></div></td>
    </tr>
    
    <tr>
      <td colspan="3" rowspan="1" class="fondoEncabezado">Habitación individual en hospitalización</td>
      <td class="fondoMarino"><div class="centrarIcono" style="display: flex; justify-content: center;"><i class="fas fa-check" style="color: #fcfcfc;"></i></div></td>
      <td class="fondoVerde"><div class="centrarIcono" style="display: flex; justify-content: center;"><i class="fas fa-check" style="color: #fcfcfc;"></i></div></td>
      <td class="fondoAzul-morado"><div class="centrarIcono" style="display: flex; justify-content: center;"><i class="fas fa-check" style="color: #fcfcfc;"></i></div></td>
    </tr>
    <tr>
      <td colspan="3" rowspan="1" class="fondoEncabezado">No cobros de copagos del PBS</td>
      <td class="fondoMarino"><div class="centrarIcono" style="display: flex; justify-content: center;"><i class="fas fa-check" style="color: #fcfcfc;"></i></div></td>
      <td class="fondoVerde"><div class="centrarIcono" style="display: flex; justify-content: center;"><i class="fas fa-check" style="color: #fcfcfc;"></i></div></td>
      <td class="fondoAzul-morado"><div class="centrarIcono" style="display: flex; justify-content: center;"><i class="fas fa-check" style="color: #fcfcfc;"></i></div></td>
    </tr>
    <tr>
      <td colspan="3" rowspan="1" class="fondoEncabezado">Coberturas congénitas al recién nacido</td>
      <td class="fondoMarino"><div class="centrarIcono" style="display: flex; justify-content: center;"><i class="fas fa-check" style="color: #fcfcfc;"></i></div></td>
      <td class="fondoVerde"><div class="centrarIcono" style="display: flex; justify-content: center;"><i class="fas fa-check" style="color: #fcfcfc;"></i></div></td>
      <td class="fondoAzul-morado"><div class="centrarIcono" style="display: flex; justify-content: center;"><i class="fas fa-check" style="color: #fcfcfc;"></i></div></td>
    </tr>
    <tr>
      <td colspan="3" rowspan="1" class="fondoEncabezado">Continuidad en la atención del parto</td>
      <td class="fondoMarino"><div class="centrarIcono" style="display: flex; justify-content: center;"><i class="fas fa-check" style="color: #fcfcfc;"></i></div></td>
      <td class="fondoVerde"><div class="centrarIcono" style="display: flex; justify-content: center;"><i class="fas fa-check" style="color: #fcfcfc;"></i></div></td>
      <td class="fondoAzul-morado"><div class="centrarIcono" style="display: flex; justify-content: center;"><i class="fas fa-check" style="color: #fcfcfc;"></i></div></td>
    </tr>
    <tr>
      <td colspan="3" rowspan="1" class="fondoEncabezado">Traslado en ambulancia</td>
      <td class="fondoMarino"><div class="centrarIcono" style="display: flex; justify-content: center;"><i class="fas fa-check" style="color: #fcfcfc;"></i></div></td>
      <td class="fondoVerde"><div class="centrarIcono" style="display: flex; justify-content: center;"><i class="fas fa-check" style="color: #fcfcfc;"></i></div></td>
      <td class="fondoAzul-morado"><div class="centrarIcono" style="display: flex; justify-content: center;"><i class="fas fa-check" style="color: #fcfcfc;"></i></div></td>
    </tr>
    <tr>
      <td colspan="3" rowspan="1" class="fondoEncabezado">Línea exclusiva de atención al cliente</td>
      <td class="fondoMarino"><div class="centrarIcono" style="display: flex; justify-content: center;"><i class="fas fa-check" style="color: #fcfcfc;"></i></div></td>
      <td class="fondoVerde"><div class="centrarIcono" style="display: flex; justify-content: center;"><i class="fas fa-check" style="color: #fcfcfc;"></i></div></td>
      <td class="fondoAzul-morado"><div class="centrarIcono" style="display: flex; justify-content: center;"><i class="fas fa-check" style="color: #fcfcfc;"></i></div></td>
    </tr>
    <tr>
      <td colspan="3" rowspan="1" class="fondoEncabezado">Línea exclusiva  de atención a través de Whatsapp</td>
      <td class="fondoMarino"><div class="centrarIcono" style="display: flex; justify-content: center;"><i class="fas fa-check" style="color: #fcfcfc;"></i></div></td>
      <td class="fondoVerde"><div class="centrarIcono" style="display: flex; justify-content: center;"><i class="fas fa-check" style="color: #fcfcfc;"></i></div></td>
      <td class="fondoAzul-morado"><div class="centrarIcono" style="display: flex; justify-content: center;"><i class="fas fa-check" style="color: #fcfcfc;"></i></div></td>
    </tr>
  </table>
</div>

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
      <textarea id="comentario" name="comentario" rows="5" placeholder="Comentario" required></textarea> <br> <br>

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
          <a href="https://api.whatsapp.com/send?phone=3052781531" target="_blank"> <i
              class="fab fa-brands fa-whatsapp tamaños wpp"></i></a>
          <a href="https://instagram.com/ice.cream_draws?igshid=MTRjd3RlbmNtMHYybQ==" target="_blank"> <i class="fab fa-brands fa-instagram tamaños ig"></i></a>
          <a href="https://x.com/ice_cream2903?t=XOiJhroPm4P0Hyo2vaBxrg&s=09" target="_blank"> <i class="fa-brands fa-twitter tamaños tw"></i> </a>
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
</body>
</html>
