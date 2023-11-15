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
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/servicios2.css">
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
        <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <div class="wrapper">
                    <div class="single-card">
                        <div class="front front1">
                            <p> Cardiología </p>
                        </div>
                        <div class="back">
                            <div class="content1">
                                <h2> Cardiología </h2>
                                <p> <img src="imágenes/intento2.png" alt="intento" height="21px" width="21px">
                                    Evaluación de riesgos cardiovasculares. </p>
                                <p> <img src="imágenes/intento2.png" alt="intento" height="21px" width="21px">
                                    Electrocardiograma. </p>
                                <p> <img src="imágenes/intento2.png" alt="intento" height="21px" width="21px">
                                    Ecocardiograma. </p>
                                <p> <img src="imágenes/intento2.png" alt="intento" height="21px" width="21px"> Pruebas
                                    de esfuerzo. </p>
                                <p> <img src="imágenes/intento2.png" alt="intento" height="21px" width="21px">
                                    Cateterismo cardíaco. </p>
                                <p> <img src="imágenes/intento2.png" alt="intento" height="21px" width="21px">
                                    Angioplatia y colocación de stent. </p>
                                <p> <img src="imágenes/intento2.png" alt="intento" height="21px" width="21px">
                                    Diagnóstico y tratamiento de enfermedades del corazón. </p>
                                <p> <img src="imágenes/intento2.png" alt="intento" height="21px" width="21px"> Manejo de
                                    hipertensión arterial. </p>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="wrapper">
                    <div class="single-card">
                        <div class="front front2">
                            <p> Radiología </p>
                        </div>
                        <div class="back">
                            <div class="content1">
                                <h2> Radiología </h2>
                                <p> <img src="imágenes/intento2.png" alt="intento" height="21px" width="21px">
                                    Radiografías convencionales para diagnóstico de fracturas y problemas óseos. </p>
                                <p> <img src="imágenes/intento2.png" alt="intento" height="21px" width="21px">
                                    Tomografías computarizadas (TC) para imágenes detalladas de tejidos y órganos. </p>
                                <p> <img src="imágenes/intento2.png" alt="intento" height="21px" width="21px">
                                    Resonancias magnéticas (RM) para diagnóstico de problemas neurológicos, articulares,
                                    entre otros. </p>
                                <p> <img src="imágenes/intento2.png" alt="intento" height="21px" width="21px">
                                    Ecografías para visualizar órganos internos y tejidos blandos. </p>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="wrapper">
                    <div class="single-card">
                        <div class="front front3">
                            <p> Ginecología y Obstetricia </p>
                        </div>
                        <div class="back">
                            <div class="content1">
                                <h2> Ginecología y Obstetricia </h2>
                                <p> <img src="imágenes/intento2.png" alt="intento" height="21px" width="21px">
                                    Exámenes de rutina y chequeos ginecológicos. </p>
                                <p> <img src="imágenes/intento2.png" alt="intento" height="21px" width="21px">
                                    Asesoramiento anticonceptivo. </p>
                                <p> <img src="imágenes/intento2.png" alt="intento" height="21px" width="21px">
                                    Atención prenatal. </p>
                                <p> <img src="imágenes/intento2.png" alt="intento" height="21px" width="21px">
                                    Atención obstétrica. </p>
                                <p> <img src="imágenes/intento2.png" alt="intento" height="21px" width="21px">
                                    Cirugía ginecológica. </p>
                                <p> <img src="imágenes/intento2.png" alt="intento" height="21px" width="21px">
                                    Menopausia y salud hormonal. </p>
                                <p> <img src="imágenes/intento2.png" alt="intento" height="21px" width="21px">
                                    Prevención y detección de cáncer ginecológico. </p>
                                <p> <img src="imágenes/intento2.png" alt="intento" height="21px" width="21px">
                                    Asesoramiento sobre fertilidad. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="wrapper">
                    <div class="single-card">
                        <div class="front front4">
                            <p> Dermatología </p>
                        </div>
                        <div class="back">
                            <div class="content1">
                                <h2> Dermatología </h2>
                                <p> <img src="imágenes/intento2.png" alt="intento" height="21px" width="21px">
                                    Diagnóstico y tratamiento de enfermedades de la piel. </p>
                                <p> <img src="imágenes/intento2.png" alt="intento" height="21px" width="21px">
                                    Tratamientos cosméticos. </p>
                                <p> <img src="imágenes/intento2.png" alt="intento" height="21px" width="21px">
                                    Manejo de condiciones de cabello y uñas. </p>
                                <p> <img src="imágenes/intento2.png" alt="intento" height="21px" width="21px">
                                    Tratamiento de infecciones cutáneas. </p>
                                <p> <img src="imágenes/intento2.png" alt="intento" height="21px" width="21px">
                                    Manejo de enfermedades autoinmunes y sistémicas. </p>
                                <p> <img src="imágenes/intento2.png" alt="intento" height="21px" width="21px">
                                    Tratamiento de enfermedades de transmisión sexual. </p>
                                <p> <img src="imágenes/intento2.png" alt="intento" height="21px" width="21px">
                                    Terapia fotodinámica. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="wrapper">
                    <div class="single-card">
                        <div class="front front5">
                            <p> Pediatría </p>
                        </div>
                        <div class="back">
                            <div class="content1">
                                <h2> Pediatría </h2>
                                <p> <img src="imágenes/intento2.png" alt="intento" height="21px" width="21px">
                                    Atención preventiva y exámenes regulares. </p>
                                <p> <img src="imágenes/intento2.png" alt="intento" height="21px" width="21px">
                                    Vacunación. </p>
                                <p> <img src="imágenes/intento2.png" alt="intento" height="21px" width="21px">
                                    Manejo de enfermedades infantiles comunes. </p>
                                <p> <img src="imágenes/intento2.png" alt="intento" height="21px" width="21px">
                                    Atención afecciones crónicas y enfermedades crónicas. </p>
                                <p> <img src="imágenes/intento2.png" alt="intento" height="21px" width="21px">
                                    Asesoramiento sobre lactancia materna y alimentación infantil. </p>
                                <p> <img src="imágenes/intento2.png" alt="intento" height="21px" width="21px">
                                    Manejo de trastornos del sueño y comportamiento. </p>
                                <p> <img src="imágenes/intento2.png" alt="intento" height="21px" width="21px">
                                    Atención de emergencia. </p>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="wrapper">
                    <div class="single-card">
                        <div class="front front6">
                            <p> Nefrología </p>
                        </div>
                        <div class="back">
                            <div class="content1">
                                <h2> Nefrología </h2>
                                <p> <img src="imágenes/intento2.png" alt="intento" height="21px" width="21px">
                                    Evaluación y tratamiento de enfermedades renales. </p>
                                <p> <img src="imágenes/intento2.png" alt="intento" height="21px" width="21px">
                                    Diálisis y trasplante renal. </p>
                                <p> <img src="imágenes/intento2.png" alt="intento" height="21px" width="21px">
                                    Manejo de hipertensión y enfermedades del tracto urinario. </p>
                                <p> <img src="imágenes/intento2.png" alt="intento" height="21px" width="21px">
                                   Control de enfermedad renal crónica. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="wrapper">
                    <div class="single-card">
                        <div class="front front7">
                            <p> Neumología </p>
                        </div>
                        <div class="back">
                            <div class="content1">
                                <h2> Neumología </h2>
                                <p> <img src="imágenes/intento2.png" alt="intento" height="21px" width="21px">
                                    Diagnóstico y tratamiento de enfermedades respiratorias. </p>
                                <p> <img src="imágenes/intento2.png" alt="intento" height="21px" width="21px">
                                    Asma, EPOC, neumonía, cáncer de pulmón. </p>
                                <p> <img src="imágenes/intento2.png" alt="intento" height="21px" width="21px">
                                  Pruebas de función pulmonar. </p>
                                <p> <img src="imágenes/intento2.png" alt="intento" height="21px" width="21px">
                                  Receta medicamentos y terapias inhaladas. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="wrapper">
                    <div class="single-card">
                        <div class="front front8">
                            <p> Oncología </p>
                        </div>
                        <div class="back">
                            <div class="content1">
                                <h2> Oncología </h2>
                                <p> <img src="imágenes/intento2.png" alt="intento" height="21px" width="21px">
                                    Radioterapia. </p>
                                <p> <img src="imágenes/intento2.png" alt="intento" height="21px" width="21px">
                                    Quimioterapia. </p>
                                <p> <img src="imágenes/intento2.png" alt="intento" height="21px" width="21px">
                                    Inmunoterapia. </p>
                                <p> <img src="imágenes/intento2.png" alt="intento" height="21px" width="21px">
                                    Terapias dirigidas. </p>
                                <p> <img src="imágenes/intento2.png" alt="intento" height="21px" width="21px">
                                    Cuidados paliativos. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="wrapper">
                    <div class="single-card">
                        <div class="front front9">
                            <p> Otorrinolaringología </p>
                        </div>
                        <div class="back">
                            <div class="content1">
                                <h2> Otorrinolaringología </h2>
                                <p> <img src="imágenes/intento2.png" alt="intento" height="21px" width="21px">
                                    Tratamiento de infecciones del oído. </p>
                                <p> <img src="imágenes/intento2.png" alt="intento" height="21px" width="21px">
                                    Cirugía de oído. </p>
                                <p> <img src="imágenes/intento2.png" alt="intento" height="21px" width="21px">
                                    Cirugía nasal y sinusual. </p>
                                <p> <img src="imágenes/intento2.png" alt="intento" height="21px" width="21px">
                                    Cirugía de garganta y laringe. </p>
                                <p> <img src="imágenes/intento2.png" alt="intento" height="21px" width="21px">
                                    Tratamiento de trastornos de la voz. </p>
                                <p> <img src="imágenes/intento2.png" alt="intento" height="21px" width="21px">
                                    Tratamiento de alergias. </p>
                                <p> <img src="imágenes/intento2.png" alt="intento" height="21px" width="21px">
                                    Tratamiento de trastornos del sueño. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="wrapper">
                    <div class="single-card">
                        <div class="front front10">
                            <p> Traumatología y Ortopedia </p>
                        </div>
                        <div class="back">
                            <div class="content1">
                                <h2> Traumatología y Ortopedia </h2>
                                <p> <img src="imágenes/intento2.png" alt="intento" height="21px" width="21px">
                                    Consulta de diagnóstico y evaluación de lesiones óseas y articulares. </p>
                                <p> <img src="imágenes/intento2.png" alt="intento" height="21px" width="21px">
                                    Tratamiento de fracturas esguinces. </p>
                                <p> <img src="imágenes/intento2.png" alt="intento" height="21px" width="21px">
                                    Cirugía ortopédica reconstructiva. </p>
                                <p> <img src="imágenes/intento2.png" alt="intento" height="21px" width="21px">
                                    Terapia física y rehabilitación. </p>
                                <p> <img src="imágenes/intento2.png" alt="intento" height="21px" width="21px">
                                    Asesoramiento sobre prevención de lesiones. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="wrapper">
                    <div class="single-card">
                        <div class="front front11">
                            <p> Neurología </p>
                        </div>
                        <div class="back">
                            <div class="content1">
                                <h2> Neurología </h2>
                                <p> <img src="imágenes/intento2.png" alt="intento" height="21px" width="21px">
                                    Evaluación y diagnóstico de trastornos neurológicos como migrañas y epilepsia. </p>
                                <p> <img src="imágenes/intento2.png" alt="intento" height="21px" width="21px">
                                    Tratamiento de enfermedades neuromusculares y trastornos del movimiento. </p>
                                <p> <img src="imágenes/intento2.png" alt="intento" height="21px" width="21px">
                                    Estudio de transtornos cognitivos y demencias. </p>
                                <p> <img src="imágenes/intento2.png" alt="intento" height="21px" width="21px">
                                    Electroencefalografía (EEG) para el diagnóstico de actividad cerebral anormal. </p>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="wrapper">
                    <div class="single-card">
                        <div class="front front12">
                            <p> Neurocirugía </p>
                        </div>
                        <div class="back">
                            <div class="content1">
                                <h2> Neurocirugía </h2>
                                <p> <img src="imágenes/intento2.png" alt="intento" height="21px" width="21px">
                                    Cirugía de tumores cerebrales y espinales. </p>
                                <p> <img src="imágenes/intento2.png" alt="intento" height="21px" width="21px">
                                    Cirugía de malformaciones vasculares. </p>
                                <p> <img src="imágenes/intento2.png" alt="intento" height="21px" width="21px">
                                    Cirugía de columna. </p>
                                <p> <img src="imágenes/intento2.png" alt="intento" height="21px" width="21px">
                                    Cirugía de epilepsia. </p>
                                <p> <img src="imágenes/intento2.png" alt="intento" height="21px" width="21px">
                                    Cirugía para el tratamiento de la enfermedad de Parkinson y otros trastornos del
                                    movimiento. </p>
                                <p> <img src="imágenes/intento2.png" alt="intento" height="21px" width="21px">
                                    Cirugía de hernias craneales. </p>
                                <p> <img src="imágenes/intento2.png" alt="intento" height="21px" width="21px">
                                    Cirugía de lesiones traumáticas del cerebro y la columna. </p>
                               
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="wrapper">
                    <div class="single-card">
                        <div class="front front13">
                            <p> Cirugía </p>
                        </div>
                        <div class="back">
                            <div class="content1">
                                <h2> Cirugía </h2>
                                <p> <img src="imágenes/intento2.png" alt="intento" height="21px" width="21px">
                                    Cirugía abdominal (apendicectomía, colecistectomía). </p>
                                <p> <img src="imágenes/intento2.png" alt="intento" height="21px" width="21px">
                                    Tratamientos de hernias y lesiones traumáticas. </p>
                                <p> <img src="imágenes/intento2.png" alt="intento" height="21px" width="21px">
                                    Cirugía de colon y evaluación de tumores. </p>
                                <p> <img src="imágenes/intento2.png" alt="intento" height="21px" width="21px">
                                    Atención pre y postoperatoria. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="wrapper">
                    <div class="single-card">
                        <div class="front front14">
                            <p> Fisioterapia </p>
                        </div>
                        <div class="back">
                            <div class="content1">
                                <h2> Fisioterapia </h2>
                                <p> <img src="imágenes/intento2.png" alt="intento" height="21px" width="21px">
                                    Terapia de ejercicios. </p>
                                <p> <img src="imágenes/intento2.png" alt="intento" height="21px" width="21px">
                                    Terapia manual. </p>
                                <p> <img src="imágenes/intento2.png" alt="intento" height="21px" width="21px">
                                    Modalidades físicas. </p>
                                <p> <img src="imágenes/intento2.png" alt="intento" height="21px" width="21px">
                                    Rehabilitación postoperatoria. </p>
                                <p> <img src="imágenes/intento2.png" alt="intento" height="21px" width="21px">
                                    Rehabilitación neurológica. </p>
                                <p> <img src="imágenes/intento2.png" alt="intento" height="21px" width="21px">
                                    Prevención de lesiones. </p>
                                <p> <img src="imágenes/intento2.png" alt="intento" height="21px" width="21px">
                                    Educación y consejería. </p>
                                <p> <img src="imágenes/intento2.png" alt="intento" height="21px" width="21px">
                                    Control del dolor. </p>
                                <p> <img src="imágenes/intento2.png" alt="intento" height="21px" width="21px">
                                    Entrenamiento de equilibrio y coordinación. </p>
                                <p> <img src="imágenes/intento2.png" alt="intento" height="21px" width="21px">
                                    Terapia respiratoria. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="wrapper">
                    <div class="single-card">
                        <div class="front front15">
                            <p> Urología </p>
                        </div>
                        <div class="back">
                            <div class="content1">

                                <h2> Urología </h2>
                                <p> <img src="imágenes/intento2.png" alt="intento" height="21px" width="21px">
                                    Diagnóstico y tratamiento de infecciones urinarias. </p>
                                <p> <img src="imágenes/intento2.png" alt="intento" height="21px" width="21px">
                                    Diagnóstico y tratamiento de cálculos renales. </p>
                                <p> <img src="imágenes/intento2.png" alt="intento" height="21px" width="21px">
                                    Manejo de trastornos de la próstata. </p>
                                <p> <img src="imágenes/intento2.png" alt="intento" height="21px" width="21px">
                                    Tratamiento de la disfunción eréctil. </p>
                                <p> <img src="imágenes/intento2.png" alt="intento" height="21px" width="21px">
                                    Diagnóstico y tratamiento de enfermedades de transmisión sexual (ETS). </p>
                                <p> <img src="imágenes/intento2.png" alt="intento" height="21px" width="21px">
                                    Cirugía urológica. </p>
                                
                            </div>
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
    
</body>
</html>
