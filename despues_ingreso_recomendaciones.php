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
    <title>Recomendaciones</title>
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="shortcut icon" href="imágenes/loguito.png" type="image/x-icon" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link flex href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/recomendaciones.css">
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
          <div class="inicio">

          </div>
          <div class="cuadros_links">
            
            <div class="cuadritos">
        
                <i class="fa-solid fa-heart-pulse tamaño_icono"></i>
                <a href="#urgenciasGenerales">
                <h5>Urgencias Generales</h5>
                </a>
            </div>
            <div class="cuadritos">
              <i class="fa-solid fa-baby-carriage tamaño_icono"></i>
              <a href="#urgenciasPediatricas">
              <h5>Urgencias Pediátricas</h5>
              </a>
            </div>
            <div class="cuadritos">
              <i class="fa-solid fa-person-pregnant tamaño_icono"></i>
              <a href="#urgenciasObstetricia">
                <h5>Urgencias Obstetricia</h5>
              </a>
            </div>
            <div class="cuadritos">
              <i class="fa-solid fa-user-injured tamaño_icono"></i>
              <a href="#urgenciasTraumatologia">
                <h5 id="h5-traumatología">Urgencias Traumatología</h5>
              </a>
            </div>
          </div>
        
          <div id="urgenciasGenerales" class="tituloGeneral">
            <h2>Prevención de Urgencias Generales</h2>
          </div>
          <div class="contenedor-1">
            <div class="imagen">
              <img src="imágenes/deporte.jpg" alt="">
            </div>
            <div class="informacion">
        
              <div class="info-general">
                <div class="estiloVida">
                  <h5>Mantén un Estilo de Vida Activo:</h6>
                    <ul>
                      <li><b>Realiza ejercicio regularmente:</b> Se recomienda al menos 150 minutos de actividad
                        física moderada por semana.
                        Esto puede incluir caminar, nadar, andar en bicicleta o actividades aeróbicas.</li>
                      <li><b>Mantén un peso saludable:</b> El sobrepeso y la obesidad aumentan el riesgo de problemas
                        de salud
                        como enfermedades cardíacas, diabetes y presión arterial alta.
                        Mantener un peso saludable es fundamental.</li>
                    </ul>
                </div>
                <div class="estiloVida">
                  <h5>Dieta Saludable:</h5>
                  <ul>
                    <li><b>Come una variedad de alimentos:</b> Incluye frutas, verduras, granos enteros, proteínas
                      magras
                      y productos lácteos bajos en grasa en tu dieta diaria.</li>
                    <li><b>Limita la ingesta de sodio y grasas saturadas:</b> Reduce la cantidad de alimentos procesados
                      y ricos en grasas trans en tu dieta. Lee las etiquetas de los alimentos para controlar la
                      ingesta de sodio.</li>
                  </ul>
                </div>
                <div class="estiloVida">
                  <h5>Evita el Consumo Excesivo de Alcohol y Tabaco:</h5>
                  <ul>
                    <li><b>Bebe con moderación:</b> Si consumes alcohol, hazlo con moderación. El exceso de alcohol
                      puede dañar el hígado y aumentar el riesgo de accidentes.</li>
                    <li><b>Deja de fumar:</b> El tabaco aumenta el riesgo de enfermedades cardíacas, cáncer y
                      enfermedades respiratorias.
                      Busca ayuda para dejar de fumar si es necesario.</li>
                  </ul>
                </div>
        
        
              </div>
            </div>
        
          </div>
        
          <div id="urgenciasPediatricas" class="tituloGeneral">
            <h2>Prevención de Urgencias Pediátricas</h2>
          </div>
          <div class="contenedor-1">
            <div class="imagen">
              <img src="imágenes/vacunacionPediatría.jpg" alt="">
            </div>
            <div class="informacion">
        
              <div class="info-general">
                <div class="estiloVida">
                  <h5>Vacunación:</h6>
                    <ul>
                      <li><b>Mantén el calendario de vacunación actualizado:</b>Las vacunas son esenciales para prevenir
                        enfermedades graves como sarampión, paperas, rubéola, tos
                        ferina y más.</li>
                    </ul>
                </div>
                <div class="estiloVida">
                  <h5>Seguridad en el Hogar:</h5>
                  <ul>
                    <li><b>Asegura el hogar:</b>Instala cercas alrededor de piscinas, asegura muebles
                      peligrosos, guarda objetos afilados y productos químicos fuera del alcance de los niños.</li>
                    <li><b>Educación en Primeros Auxilios: </b> Aprende técnicas básicas de primeros auxilios para saber cómo
                      reaccionar
                      en caso de lesiones menores.</li>
                    <li><b>Educación Sobre el Uso de Dispositivos Electrónicos:</b> Limita el tiempo de pantalla de tus hijos y
                      enséñales
                      a usar dispositivos electrónicos de manera segura.</li>
                  </ul>
                </div>
                <div class="estiloVida">
                  <h5>Supervisión:</h5>
                  <ul>
                    <li><b>Vigila a tus hijos de cerca: </b> Supervisa a los niños en todo momento,
                      especialmente en áreas potencialmente peligrosas, como piscinas y parques.</li>
                  </ul>
                </div>
        
        
              </div>
        
            </div>
          </div>
        
        
          <div id="urgenciasObstetricia" class="tituloGeneral">
            <h2>Prevención de Urgencias de Obstetricia y Ginecología:</h2>
          </div>
          <div class="contenedor-1">
            <div class="imagen">
              <img src="imágenes/recomendacionesObstetricia.jpg" alt="">
            </div>
            <div class="informacion">
        
              <div class="info-general">
                <div class="estiloVida">
                  <h5>Control Prenatal:</h6>
                    <ul>
                      <li><b>Realiza visitas prenatales regulares:</b>El seguimiento médico durante el embarazo es esencial para
                        detectar y tratar problemas potenciales.
                        Sigue el plan de cuidado prenatal recomendado por tu médico.</li>
                    </ul>
                </div>
                <div class="estiloVida">
                  <h5>Educación Prenatal:</h5>
                  <ul>
                    <li><b>Aprende sobre los signos de alarma:</b>Conoce los síntomas que podrían indicar una emergencia
                      obstétrica,
                      como sangrado vaginal abundante, contracciones prematuras o disminución de la actividad fetal.</li>
                  </ul>
                </div>
                <div class="estiloVida">
                  <h5>Seguridad en el Parto:</h5>
                  <ul>
                    <li><b>Elige una instalación médica adecuada: </b> Asegúrate de dar a luz en un hospital o centro médico con
                      personal y equipo capacitados para atender emergencias obstétricas.</li>
                  </ul>
                </div>
        
        
              </div>
        
            </div>
          </div>
        
        
          <div id="urgenciasTraumatologia" class="tituloGeneral">
            <h2>Prevención de Urgencias de Traumatología, Rehabilitación y Quemados:</h2>
          </div>
          <div class="contenedor-1">
            <div class="imagen">
              <img src="imágenes/recomendacionesTraumatologiayQuemados.jpg" alt="">
            </div>
            <div class="informacion">
        
              <div class="info-general">
                <div class="estiloVida">
                  <h5>Seguridad en el Trabajo:</h6>
                    <ul>
                      <li><b>Sigue las normas de seguridad: </b>Cumple con las normas y prácticas
                        de seguridad en tu lugar de trabajo. Usa el equipo de protección personal proporcionado.</li>
                    </ul>
                </div>
                <div class="estiloVida">
                  <h5>Prevención de Quemaduras:</h5>
                  <ul>
                    <li><b>Mantén objetos calientes fuera del alcance de los niños: </b> Los niños pueden resultar quemados por
                      objetos calientes como planchas y sartenes. Manténlos fuera de su alcance.</li>
                    <li><b>Ten cuidado con líquidos calientes: </b> Manipula con cuidado líquidos calientes, como café y sopas,
                      para evitar quemaduras.</li>
                  </ul>
                </div>
                <div class="estiloVida">
                  <h5>Prevención de Lesiones Deportivas:</h5>
                  <ul>
                    <li><b>Practica deportes de manera segura:</b>Sigue las reglas del deporte y usa equipo
                      de protección adecuado, como cascos, protectores y rodilleras.</li>
                  </ul>
                </div>
        
        
        
              </div>
        
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
    
</body>
</html>
