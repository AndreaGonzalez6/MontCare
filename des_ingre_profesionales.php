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
   <!-- Link Swiper's CSS -->
   <link rel="stylesheet" href="css/bootstrap.css">
    <!-- font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- css -->
    <link rel="stylesheet" href="css/profesionales.css">
    
    <title>Document</title>
</head>
<body>
    <!-- Cardiólogo -->
    <section>
        <h2 class="textoP" id="cardiologia">CARDIÓLOGOS</h2>
        

        <div id="carouselCardiologos" class="carousel slide container" data-bs-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-bs-target="#carouselCardiologos" data-bs-slide-to="0" class="active"></li>
                <li data-bs-target="#carouselCardiologos" data-bs-slide-to="1"></li>
                <li data-bs-target="#carouselCardiologos" data-bs-slide-to="2"></li>
                <!-- Agrega más indicadores según sea necesario -->
            </ol>
    
            <!-- Slides -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col">
                            <div class="card">
                                <div class="card-content">
                                    <div class="image">
                                        <img src="imágenes/medico4.jpg" alt="cardiologo">
                                    </div>
                                    <div class="name-profession">
                                        <span class="name">Dr. Carlos González</span>
                                        <span class="profession">Cardiólogo</span>
                                    </div>
                                    <div class="button">
                                        <!-- Button modal -->
                                        <button type="button" class="sobreMi btn" data-bs-toggle="modal" data-bs-target="#exampleModal">Sobre Mi</button>
  
                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Carlos González</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                <h5>Titulo:</h5>
                                                <p>cardiologo</p>
                                                <h5>Educación y Formación:</h5>
                                                <ul>
                                                    <li>Título de Doctor en Medicina (MD) de la Universidad Nacional de Cardiología</li>
                                                    <li>Residencia en Cardiología en el Hospital Cardiológico Central</li>
                                                    <li>Certificación de la Junta en Cardiología</li>
                                                </ul>
                                                <h5>Idiomas</h5>
                                                <ul>
                                                    <li> Español</li>
                                                    <li>Inglés</li>
                                                </ul>
                                                <h5>Información de Contacto:</h5>
                                                <ul>
                                                    <li><strong>Correo electrónico:</strong> carlos.gonzalez@email.com</li>
                                                    <li><strong>Teléfono:</strong> +123-456-7890</li>
                                                </ul>
                                                </div>
                                                <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                                <a href="http://localhost/MontCare/reservar.php"><button type="button" class="btn btn-primary">Agendar</button></a>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        <a href="http://localhost/MontCare/reservar.php"><button class="agendar">Agendar</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-content">
                                    <div class="image">
                                        <img src="imágenes/medico5.jpg" alt="cardiologo">
                                    </div>
            
                                    <div class="name-profession">
                                        <span class="name">Dra. Ana Martínez</span>
                                        <span class="profession">Cardióloga</span>
                                    </div>
            
                                    <div class="button">
                                        <!-- Button modal -->
                                        <button type="button" class="sobreMi btn" data-bs-toggle="modal" data-bs-target="#exampleModal2">Sobre Mi</button>
  
                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
                                            <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel2">Ana Martínez</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                <h5>Titulo:</h5>
                                                <p>cardiologo</p>
                                                <h5>Educación y Formación:</h5>
                                                <ul>
                                                    <li>Título de Doctor en Medicina (MD) de la Universidad de Cardiología del Este</li>
                                                    <li>Residencia en Cardiología en el Hospital Cardiovascular Regional</li>
                                                    <li>Certificación de la Junta en Cardiología</li>
                                                </ul>
                                                <h5>Idiomas</h5>
                                                <ul>
                                                    <li> Español</li>
                                                    <li>Inglés</li>
                                                </ul>
                                                <h5>Información de Contacto:</h5>
                                                <ul>
                                                    <li><strong>Correo electrónico:</strong> ana.martinez@email.com</li>
                                                    <li><strong>Teléfono:</strong> +123-456-7891</li>
                                                </ul>
                                                </div>
                                                <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                                <a href="http://localhost/MontCare/reservar.php"><button type="button" class="btn btn-primary">Agendar</button></a>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        <a href="http://localhost/MontCare/reservar.php"><button class="agendar">Agendar</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-content">
                                    <div class="image">
                                        <img src="imágenes/medico1.webp" alt="cardiologo">
                                    </div>
            
                                    <div class="name-profession">
                                        <span class="name">Dr. Javier López</span>
                                        <span class="profession">Cardiólogo</span>
                                    </div>
            
                                    <div class="button">
                                        <!-- Button modal -->
                                        <button type="button" class="sobreMi btn" data-bs-toggle="modal" data-bs-target="#exampleModal3">Sobre Mi</button>
  
                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel3" aria-hidden="true">
                                            <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel3">Javier López</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                <h5>Titulo:</h5>
                                                <p>cardiologo Intervencionista</p>
                                                <h5>Educación y Formación:</h5>
                                                <ul>
                                                    <li>Título de Doctor en Medicina (MD) de la Universidad de Cardiología del Norte</li>
                                                    <li>Residencia en Cardiología en el Hospital Cardiaco del Sur</li>
                                                    <li>Certificación de la Junta en Cardiología</li>
                                                </ul>
                                                <h5>Idiomas</h5>
                                                <ul>
                                                    <li> Español</li>
                                                    <li>Inglés</li>
                                                </ul>
                                                <h5>Información de Contacto:</h5>
                                                <ul>
                                                    <li><strong>Correo electrónico:</strong>  javier.lopez@email.com</li>
                                                    <li><strong>Teléfono:</strong> +123-456-7892</li>
                                                </ul>
                                                </div>
                                                <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                                <a href="http://localhost/MontCare/reservar.php"><button type="button" class="btn btn-primary">Agendar</button></a>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        <a href="http://localhost/MontCare/reservar.php"><button class="agendar">Agendar</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col">
                            <div class="card">
                                <div class="card-content">
                                    <div class="image">
                                        <img src="imágenes/medico2.jpg" alt="cardiologo">
                                    </div>
                                    <div class="name-profession">
                                        <span class="name">Dr. Juan Pérez</span>
                                        <span class="profession">Cardiólogo Intervencionista</span>
                                    </div>
                                    <div class="button">
                                        <!-- Button modal -->
                                        <button type="button" class="sobreMi btn" data-bs-toggle="modal" data-bs-target="#exampleModal4">Sobre Mi</button>
  
                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel4" aria-hidden="true">
                                            <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel4">Juan Pérez</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                <h5>Titulo:</h5>
                                                <p>cardiologo</p>
                                                <h5>Educación y Formación:</h5>
                                                <ul>
                                                    <li>Título de Doctor en Medicina (MD) de la Universidad de Cardiología del Sur</li>
                                                    <li>Residencia en Cardiología en el Hospital Cardiaco del Este</li>
                                                    <li>Certificación de la Junta en Cardiología de Intervención</li>
                                                </ul>
                                                <h5>Idiomas</h5>
                                                <ul>
                                                    <li> Español</li>
                                                    <li>Inglés</li>
                                                </ul>
                                                <h5>Información de Contacto:</h5>
                                                <ul>
                                                    <li><strong>Correo electrónico:</strong>  juan.perez@email.com</li>
                                                    <li><strong>Teléfono:</strong> +123-456-7898</li>
                                                </ul>
                                                </div>
                                                <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                                <a href="http://localhost/MontCare/reservar.php"><button type="button" class="btn btn-primary">Agendar</button></a>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        <a href="http://localhost/MontCare/reservar.php"><button class="agendar">Agendar</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-content">
                                    <div class="image">
                                        <img src="imágenes/medico6.jpg" alt="cardiologo">
                                    </div>
            
                                    <div class="name-profession">
                                        <span class="name">Dra. María Rodríguez</span>
                                        <span class="profession">Cardióloga</span>
                                    </div>
            
                                    <div class="button">
                                        <!-- Button modal -->
                                        <button type="button" class="sobreMi btn" data-bs-toggle="modal" data-bs-target="#exampleModal5">Sobre Mi</button>
  
                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal5" tabindex="-1" aria-labelledby="exampleModalLabel5" aria-hidden="true">
                                            <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel5">María Rodríguez</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                <h5>Titulo:</h5>
                                                <p>Cardióloga Pediátrica</p>
                                                <h5>Educación y Formación:</h5>
                                                <ul>
                                                    <li>Título de Doctor en Medicina (MD) de la Universidad de Cardiología Pediátrica</li>
                                                    <li>Residencia en Cardiología Pediátrica en el Hospital Infantil Cardiaco</li>
                                                    <li>Certificación de la Junta en Cardiología Pediátrica</li>
                                                </ul>
                                                <h5>Idiomas</h5>
                                                <ul>
                                                    <li> Español</li>
                                                    <li>Inglés</li>
                                                </ul>
                                                <h5>Información de Contacto:</h5>
                                                <ul>
                                                    <li><strong>Correo electrónico:</strong>  maria.rodriguez@email.com</li>
                                                    <li><strong>Teléfono:</strong> +123-456-7899</li>
                                                </ul>
                                                </div>
                                                <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                                <button type="button" class="btn btn-primary">Agendar</button>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        <button class="agendar">Agendar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-content">
                                    <div class="image">
                                        <img src="imágenes/medico7.jpg" alt="cardiologo">
                                    </div>
            
                                    <div class="name-profession">
                                        <span class="name">Dr. Manuel Fernández</span>
                                        <span class="profession">Cardiólogo</span>
                                    </div>
            
                                    <div class="button">
                                        <!-- Button modal -->
                                        <button type="button" class="sobreMi btn" data-bs-toggle="modal" data-bs-target="#exampleModal6">Sobre Mi</button>
  
                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal6" tabindex="-1" aria-labelledby="exampleModalLabel6" aria-hidden="true">
                                            <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel6">Manuel Fernández</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                <h5>Titulo:</h5>
                                                <p>Cardiólogo Geriátrico</p>
                                                <h5>Educación y Formación:</h5>
                                                <ul>
                                                    <li>Título de Doctor en Medicina (MD) de la Universidad de Cardiología Geriátrica</li>
                                                    <li>Residencia en Cardiología Geriátrica en el Hospital de Cuidados para Ancianos</li>
                                                    <li>Certificación de la Junta en Cardiología Geriátrica</li>
                                                </ul>
                                                <h5>Idiomas</h5>
                                                <ul>
                                                    <li> Español</li>
                                                    <li>Inglés</li>
                                                </ul>
                                                <h5>Información de Contacto:</h5>
                                                <ul>
                                                    <li><strong>Correo electrónico:</strong> manuel.fernandez@email.com</li>
                                                    <li><strong>Teléfono:</strong> +123-456-7900</li>
                                                </ul>
                                                </div>
                                                <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                                <a href="http://localhost/MontCare/reservar.php"><button type="button" class="btn btn-primary">Agendar</button></a>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        <a href="http://localhost/MontCare/reservar.php"><button class="agendar">Agendar</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col">
                            <div class="card">
                                <div class="card-content">
                                    <div class="image">
                                        <img src="imágenes/medico9.jpg" alt="cardiologo">
                                    </div>
            
                                    <div class="name-profession">
                                        <span class="name">Dr. Alejandro Silva</span>
                                        <span class="profession">Cardiólogo</span>
                                    </div>
            
                                    <div class="button">
                                        <!-- Button modal -->
                                        <button type="button" class="sobreMi btn" data-bs-toggle="modal" data-bs-target="#exampleModal7">Sobre Mi</button>
  
                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal7" tabindex="-1" aria-labelledby="exampleModalLabel7" aria-hidden="true">
                                            <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel7">Alejandro Silva</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                <h5>Titulo:</h5>
                                                <p>Cardiólogo Clínico</p>
                                                <h5>Educación y Formación:</h5>
                                                <ul>
                                                    <li>Título de Doctor en Medicina (MD) de la Universidad de Cardiología Clínica</li>
                                                    <li>Residencia en Cardiología Clínica en el Hospital Cardiológico Clínico</li>
                                                    <li>Certificación de la Junta en Cardiología Clínica</li>
                                                </ul>
                                                <h5>Idiomas</h5>
                                                <ul>
                                                    <li> Español</li>
                                                    <li>Inglés</li>
                                                </ul>
                                                <h5>Información de Contacto:</h5>
                                                <ul>
                                                    <li><strong>Correo electrónico:</strong> alejandro.silva@email.com</li>
                                                    <li><strong>Teléfono:</strong> +123-456-7901</li>
                                                </ul>
                                                </div>
                                                <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                                <a href="http://localhost/MontCare/reservar.php"><button type="button" class="btn btn-primary">Agendar</button></a>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        <a href="http://localhost/MontCare/reservar.php"><button class="agendar">Agendar</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-content">
                                    <div class="image">
                                        <img src="imágenes/medico8.jpg" alt="cardiologo">
                                    </div>
            
                                    <div class="name-profession">
                                        <span class="name">Dra. Patricia Ramos</span>
                                        <span class="profession">Cardióloga</span>
                                    </div>
            
                                    <div class="button">
                                        <!-- Button modal -->
                                        <button type="button" class="sobreMi btn" data-bs-toggle="modal" data-bs-target="#exampleModal8">Sobre Mi</button>
  
                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal8" tabindex="-1" aria-labelledby="exampleModalLabel8" aria-hidden="true">
                                            <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel8">Patricia Ramos</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                <h5>Titulo:</h5>
                                                <p>Cardióloga de Electrofisiología</p>
                                                <h5>Educación y Formación:</h5>
                                                <ul>
                                                    <li>Título de Doctor en Medicina (MD) de la Universidad de Cardiología Electrofisiológica</li>
                                                    <li>Residencia en Cardiología de Electrofisiología en el Hospital Cardiológico de Electrofisiología</li>
                                                    <li>Certificación de la Junta en Cardiología de Electrofisiología</li>
                                                </ul>
                                                <h5>Idiomas</h5>
                                                <ul>
                                                    <li> Español</li>
                                                    <li>Inglés</li>
                                                </ul>
                                                <h5>Información de Contacto:</h5>
                                                <ul>
                                                    <li><strong>Correo electrónico:</strong> patricia.ramos@email.com</li>
                                                    <li><strong>Teléfono:</strong> +123-456-7902</li>
                                                </ul>
                                                </div>
                                                <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                                <a href="http://localhost/MontCare/reservar.php"><button type="button" class="btn btn-primary">Agendar</button></a>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        <a href="http://localhost/MontCare/reservar.php"><button class="agendar">Agendar</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-content">
                                    <div class="image">
                                        <img src="imágenes/medico10.jpg" alt="cardiologo">
                                    </div>
            
                                    <div class="name-profession">
                                        <span class="name">Dr. Hector Gómez</span>
                                        <span class="profession">Cardiólogo</span>
                                    </div>
            
                                    <div class="button">
                                        <!-- Button modal -->
                                        <button type="button" class="sobreMi btn" data-bs-toggle="modal" data-bs-target="#exampleModal9">Sobre Mi</button>
  
                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal9" tabindex="-1" aria-labelledby="exampleModalLabel9" aria-hidden="true">
                                            <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel9">Hector Gómez</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                <h5>Titulo:</h5>
                                                <p>Cardiólogo Clínico</p>
                                                <h5>Educación y Formación:</h5>
                                                <ul>
                                                    <li>Título de Doctor en Medicina (MD) de la Universidad de Cardiología Clínica</li>
                                                    <li>Residencia en Cardiología Clínica en el Hospital Cardiológico Clínico</li>
                                                    <li>Certificación de la Junta en Cardiología Clínica</li>
                                                </ul>
                                                <h5>Idiomas</h5>
                                                <ul>
                                                    <li> Español</li>
                                                    <li>Inglés</li>
                                                </ul>
                                                <h5>Información de Contacto:</h5>
                                                <ul>
                                                    <li><strong>Correo electrónico:</strong> hector.gomez@email.com</li>
                                                    <li><strong>Teléfono:</strong> +123-456-7903</li>
                                                </ul>
                                                </div>
                                                <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                                <a href="http://localhost/MontCare/reservar.php"><button type="button" class="btn btn-primary">Agendar</button></a>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        <a href="http://localhost/MontCare/reservar.php"><button class="agendar">Agendar</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Agrega más slides según sea necesario -->
            </div>
    
            <!-- Controles de navegación -->
            <a class="carousel-control-prev" href="#carouselCardiologos" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselCardiologos" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </a>
        </div>
    </section>

        <!-- Radiólogo -->
        <section id="radiologia">
            <h2 class="textoP" >RADIÓLOGOS</h2>
            
            <div id="carouselRadiologo" class="carousel slide container" data-bs-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-bs-target="#carouselRadiologo" data-bs-slide-to="0" class="active"></li>
                    <li data-bs-target="#carouselRadiologo" data-bs-slide-to="1"></li>
                    <li data-bs-target="#carouselRadiologo" data-bs-slide-to="2"></li>
                    <!-- Agrega más indicadores según sea necesario -->
                </ol>
        
                <!-- Slides -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="image">
                                            <img src="radiologos/radiologo1.jpg" alt="cardiologo">
                                        </div>
                                        <div class="name-profession">
                                            <span class="name">Dr. Alejandro Pérez</span>
                                            <span class="profession">Radiólogo</span>
                                        </div>
                                        <div class="button">
                                            <!-- Button modal -->
                                            <button type="button" class="sobreMi btn" data-bs-toggle="modal" data-bs-target="#exampleModal10">Sobre Mi</button>
      
                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModal10" tabindex="-1" aria-labelledby="exampleModalLabel10" aria-hidden="true">
                                                <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="exampleModalLabel10">Alejandro Pérez</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                    <h5>Titulo:</h5>
                                                    <p>Radiólogo</p>
                                                    <h5>Educación y Formación:</h5>
                                                    <ul>
                                                        <li>Título de Doctor en Medicina (MD) de la Universidad de Radiología Avanzada</li>
                                                        <li>Residencia en Radiología en el Hospital Radiológico Central</li>
                                                        <li>Certificación de la Junta en Radiología</li>
                                                    </ul>
                                                    <h5>Idiomas</h5>
                                                    <ul>
                                                        <li> Español</li>
                                                        <li>Inglés</li>
                                                    </ul>
                                                    <h5>Información de Contacto:</h5>
                                                    <ul>
                                                        <li><strong>Correo electrónico:</strong> alejandro.perez@email.com</li>
                                                        <li><strong>Teléfono:</strong> +123-456-7904</li>
                                                    </ul>
                                                    </div>
                                                    <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                                    <a href="http://localhost/MontCare/reservar.php"><button type="button" class="btn btn-primary">Agendar</button></a>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                            <a href="http://localhost/MontCare/reservar.php"><button class="agendar">Agendar</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="image">
                                            <img src="radiologos/radiologa7.jpg" alt="cardiologo">
                                        </div>
                
                                        <div class="name-profession">
                                            <span class="name">Dra. María González</span>
                                            <span class="profession">Radióloga</span>
                                        </div>
                
                                        <div class="button">
                                            <!-- Button modal -->
                                            <button type="button" class="sobreMi btn" data-bs-toggle="modal" data-bs-target="#exampleModal11">Sobre Mi</button>
      
                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModal11" tabindex="-1" aria-labelledby="exampleModalLabel11" aria-hidden="true">
                                                <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="exampleModalLabel11">María González</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                    <h5>Titulo:</h5>
                                                    <p>Radióloga</p>
                                                    <h5>Educación y Formación:</h5>
                                                    <ul>
                                                        <li>Título de Doctor en Medicina (MD) de la Universidad de Radiología del Este</li>
                                                        <li>Residencia en Radiología en el Hospital Radiológico Regional</li>
                                                        <li>Certificación de la Junta en Radiología</li>
                                                    </ul>
                                                    <h5>Idiomas</h5>
                                                    <ul>
                                                        <li> Español</li>
                                                        <li>Inglés</li>
                                                    </ul>
                                                    <h5>Información de Contacto:</h5>
                                                    <ul>
                                                        <li><strong>Correo electrónico:</strong> maria.gonzalez@email.com</li>
                                                        <li><strong>Teléfono:</strong> +123-456-7905</li>
                                                    </ul>
                                                    </div>
                                                    <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                                    <a href="http://localhost/MontCare/reservar.php"><button type="button" class="btn btn-primary">Agendar</button></a>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                            <a href="http://localhost/MontCare/reservar.php"><button class="agendar">Agendar</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="image">
                                            <img src="radiologos/radiologo3H.jpg" alt="cardiologo">
                                        </div>
                
                                        <div class="name-profession">
                                            <span class="name">Dr. David Rodríguez</span>
                                            <span class="profession">Radiólogo</span>
                                        </div>
                
                                        <div class="button">
                                            <!-- Button modal -->
                                            <button type="button" class="sobreMi btn" data-bs-toggle="modal" data-bs-target="#exampleModal12">Sobre Mi</button>
      
                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModal12" tabindex="-1" aria-labelledby="exampleModalLabel12" aria-hidden="true">
                                                <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="exampleModalLabel12">David Rodríguez</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                    <h5>Titulo:</h5>
                                                    <p>Radiólogo de Intervención</p>
                                                    <h5>Educación y Formación:</h5>
                                                    <ul>
                                                        <li>Título de Doctor en Medicina (MD) de la Universidad de Radiología del Norte</li>
                                                        <li>Residencia en Radiología de Intervención en el Hospital Radiológico del Sur</li>
                                                        <li>Certificación de la Junta en Radiología de Intervención</li>
                                                    </ul>
                                                    <h5>Idiomas</h5>
                                                    <ul>
                                                        <li> Español</li>
                                                        <li>Inglés</li>
                                                    </ul>
                                                    <h5>Información de Contacto:</h5>
                                                    <ul>
                                                        <li><strong>Correo electrónico:</strong> david.rodriguez@email.com</li>
                                                        <li><strong>Teléfono:</strong> +123-456-7906</li>
                                                    </ul>
                                                    </div>
                                                    <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                                    <a href="http://localhost/MontCare/reservar.php"><button type="button" class="btn btn-primary">Agendar</button></a>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                            <a href="http://localhost/MontCare/reservar.php"><button class="agendar">Agendar</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="image">
                                            <img src="radiologos/radiologo2.jpg" alt="cardiologo">
                                        </div>
                                        <div class="name-profession">
                                            <span class="name">Dr. Carlos Ramírez</span>
                                            <span class="profession">Radiólogo</span>
                                        </div>
                                        <div class="button">
                                            <!-- Button modal -->
                                            <button type="button" class="sobreMi btn" data-bs-toggle="modal" data-bs-target="#exampleModal13">Sobre Mi</button>
      
                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModal13" tabindex="-1" aria-labelledby="exampleModalLabel13" aria-hidden="true">
                                                <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="exampleModalLabel13">Carlos Ramírez</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                    <h5>Titulo:</h5>
                                                    <p>Radiólogo Pediátrico</p>
                                                    <h5>Educación y Formación:</h5>
                                                    <ul>
                                                        <li>Título de Doctor en Medicina (MD) de la Universidad de Radiología Pediátrica</li>
                                                        <li>Residencia en Radiología Pediátrica en el Hospital Radiológico Infantil</li>
                                                        <li>Certificación de la Junta en Radiología Pediátrica</li>
                                                    </ul>
                                                    <h5>Idiomas</h5>
                                                    <ul>
                                                        <li> Español</li>
                                                        <li>Inglés</li>
                                                    </ul>
                                                    <h5>Información de Contacto:</h5>
                                                    <ul>
                                                        <li><strong>Correo electrónico:</strong> carlos.ramirez@email.com</li>
                                                        <li><strong>Teléfono:</strong> +123-456-7907</li>
                                                    </ul>
                                                    </div>
                                                    <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                                    <a href="http://localhost/MontCare/reservar.php"><button type="button" class="btn btn-primary">Agendar</button></a>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                            <a href="http://localhost/MontCare/reservar.php"><button class="agendar">Agendar</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="image">
                                            <img src="radiologos/radiologa8.jpg" alt="cardiologo">
                                        </div>
                
                                        <div class="name-profession">
                                            <span class="name">Dra. Laura Martínez</span>
                                            <span class="profession">Radióloga</span>
                                        </div>
                
                                        <div class="button">
                                            <!-- Button modal -->
                                            <button type="button" class="sobreMi btn" data-bs-toggle="modal" data-bs-target="#exampleModal14">Sobre Mi</button>
      
                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModal14" tabindex="-1" aria-labelledby="exampleModalLabel14" aria-hidden="true">
                                                <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="exampleModalLabel14">Laura Martínez</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                    <h5>Titulo:</h5>
                                                    <p>Radióloga Musculoesquelética</p>
                                                    <h5>Educación y Formación:</h5>
                                                    <ul>
                                                        <li>Título de Doctor en Medicina (MD) de la Universidad de Radiología Musculoesquelética</li>
                                                        <li>Residencia en Radiología Musculoesquelética en el Hospital Radiológico Musculoesquelético</li>
                                                        <li>Certificación de la Junta en Radiología Musculoesquelética</li>
                                                    </ul>
                                                    <h5>Idiomas</h5>
                                                    <ul>
                                                        <li> Español</li>
                                                        <li>Inglés</li>
                                                    </ul>
                                                    <h5>Información de Contacto:</h5>
                                                    <ul>
                                                        <li><strong>Correo electrónico:</strong> laura.martinez@email.com</li>
                                                        <li><strong>Teléfono:</strong> +123-456-7908</li>
                                                    </ul>
                                                    </div>
                                                    <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                                    <a href="http://localhost/MontCare/reservar.php"><button type="button" class="btn btn-primary">Agendar</button></a>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                            <a href="http://localhost/MontCare/reservar.php"><button class="agendar">Agendar</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="image">
                                            <img src="radiologos/radiologo4H.jpg" alt="cardiologo">
                                        </div>
                
                                        <div class="name-profession">
                                            <span class="name">Dr. Sergio Morales</span>
                                            <span class="profession">Radiólogo</span>
                                        </div>
                
                                        <div class="button">
                                            <!-- Button modal -->
                                            <button type="button" class="sobreMi btn" data-bs-toggle="modal" data-bs-target="#exampleModal15">Sobre Mi</button>
      
                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModal15" tabindex="-1" aria-labelledby="exampleModalLabel15" aria-hidden="true">
                                                <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="exampleModalLabel15">Sergio Morales</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                    <h5>Titulo:</h5>
                                                    <p>Radiólogo de Neuroimagen</p>
                                                    <h5>Educación y Formación:</h5>
                                                    <ul>
                                                        <li>Título de Doctor en Medicina (MD) de la Universidad de Radiología Neurológica</li>
                                                        <li>Residencia en Radiología de Neuroimagen en el Hospital Radiológico Neurológico</li>
                                                        <li>Certificación de la Junta en Radiología de Neuroimagen</li>
                                                    </ul>
                                                    <h5>Idiomas</h5>
                                                    <ul>
                                                        <li> Español</li>
                                                        <li>Inglés</li>
                                                    </ul>
                                                    <h5>Información de Contacto:</h5>
                                                    <ul>
                                                        <li><strong>Correo electrónico:</strong> sergio.morales@email.com</li>
                                                        <li><strong>Teléfono:</strong> +123-456-7909</li>
                                                    </ul>
                                                    </div>
                                                    <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                                    <a href="http://localhost/MontCare/reservar.php"><button type="button" class="btn btn-primary">Agendar</button></a>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                            <a href="http://localhost/MontCare/reservar.php"><button class="agendar">Agendar</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="image">
                                            <img src="radiologos/radiologo5H.jpg" alt="cardiologo">
                                        </div>
                
                                        <div class="name-profession">
                                            <span class="name">Dr. Manuel Jiménez</span>
                                            <span class="profession">Radiólogo</span>
                                        </div>
                
                                        <div class="button">
                                            <!-- Button modal -->
                                            <button type="button" class="sobreMi btn" data-bs-toggle="modal" data-bs-target="#exampleModal15">Sobre Mi</button>
      
                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModal15" tabindex="-1" aria-labelledby="exampleModalLabel15" aria-hidden="true">
                                                <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="exampleModalLabel15">Manuel Jiménez</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                    <h5>Titulo:</h5>
                                                    <p>Radiólogo de Mama</p>
                                                    <h5>Educación y Formación:</h5>
                                                    <ul>
                                                        <li>Título de Doctor en Medicina (MD) de la Universidad de Radiología Mamaria</li>
                                                        <li>Residencia en Radiología de Mama en el Hospital Radiológico Mamario</li>
                                                        <li>Certificación de la Junta en Radiología de Mama</li>
                                                    </ul>
                                                    <h5>Idiomas</h5>
                                                    <ul>
                                                        <li> Español</li>
                                                        <li>Inglés</li>
                                                    </ul>
                                                    <h5>Información de Contacto:</h5>
                                                    <ul>
                                                        <li><strong>Correo electrónico:</strong> manuel.jimenez@email.com</li>
                                                        <li><strong>Teléfono:</strong> +123-456-7909</li>
                                                    </ul>
                                                    </div>
                                                    <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                                    <a href="http://localhost/MontCare/reservar.php"><button type="button" class="btn btn-primary">Agendar</button></a>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                            <a href="http://localhost/MontCare/reservar.php"><button class="agendar">Agendar</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="image">
                                            <img src="radiologos/radiologa9.jpg" alt="cardiologo">
                                        </div>
                
                                        <div class="name-profession">
                                            <span class="name">Dra.  Ana Fernández</span>
                                            <span class="profession">Radióloga</span>
                                        </div>
                
                                        <div class="button">
                                            <!-- Button modal -->
                                            <button type="button" class="sobreMi btn" data-bs-toggle="modal" data-bs-target="#exampleModal16">Sobre Mi</button>
      
                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModal16" tabindex="-1" aria-labelledby="exampleModalLabel16" aria-hidden="true">
                                                <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="exampleModalLabel16">Ana Fernández</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                    <h5>Titulo:</h5>
                                                    <p>Radióloga Cardiovascular</p>
                                                    <h5>Educación y Formación:</h5>
                                                    <ul>
                                                        <li>Título de Doctor en Medicina (MD) de la Universidad de Radiología Cardiovascular</li>
                                                        <li>Residencia en Radiología Cardiovascular en el Hospital Radiológico Cardiovascular</li>
                                                        <li>Certificación de la Junta en Radiología Cardiovascular</li>
                                                    </ul>
                                                    <h5>Idiomas</h5>
                                                    <ul>
                                                        <li> Español</li>
                                                        <li>Inglés</li>
                                                    </ul>
                                                    <h5>Información de Contacto:</h5>
                                                    <ul>
                                                        <li><strong>Correo electrónico:</strong> ana.fernandez@email.com</li>
                                                        <li><strong>Teléfono:</strong> +123-456-7909</li>
                                                    </ul>
                                                    </div>
                                                    <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                                    <a href="http://localhost/MontCare/reservar.php"><button type="button" class="btn btn-primary">Agendar</button></a>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                            <a href="http://localhost/MontCare/reservar.php"><button class="agendar">Agendar</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="image">
                                            <img src="radiologos/radiologo6H.jpg" alt="cardiologo">
                                        </div>
                
                                        <div class="name-profession">
                                            <span class="name">Dr.  Luis Castro</span>
                                            <span class="profession">Radiólogo</span>
                                        </div>
                
                                        <div class="button">
                                            <!-- Button modal -->
                                            <button type="button" class="sobreMi btn" data-bs-toggle="modal" data-bs-target="#exampleModal17">Sobre Mi</button>
      
                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModal17" tabindex="-1" aria-labelledby="exampleModalLabel17" aria-hidden="true">
                                                <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="exampleModalLabel17">Luis Castro</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                    <h5>Titulo:</h5>
                                                    <p>Radiólogo Musculoesquelético</p>
                                                    <h5>Educación y Formación:</h5>
                                                    <ul>
                                                        <li>Título de Doctor en Medicina (MD) de la Universidad de Radiología Musculoesquelética</li>
                                                        <li>Residencia en Radiología Musculoesquelética en el Hospital Radiológico Musculoesquelético</li>
                                                        <li>Certificación de la Junta en Radiología Musculoesquelética</li>
                                                    </ul>
                                                    <h5>Idiomas</h5>
                                                    <ul>
                                                        <li> Español</li>
                                                        <li>Inglés</li>
                                                    </ul>
                                                    <h5>Información de Contacto:</h5>
                                                    <ul>
                                                        <li><strong>Correo electrónico:</strong> luis.castro@email.com</li>
                                                        <li><strong>Teléfono:</strong> +123-456-7909</li>
                                                    </ul>
                                                    </div>
                                                    <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                                    <a href="http://localhost/MontCare/reservar.php"><button type="button" class="btn btn-primary">Agendar</button></a>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                            <a href="http://localhost/MontCare/reservar.php"><button class="agendar">Agendar</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
        
                <!-- prev y next -->
                <a class="carousel-control-prev" href="#carouselRadiologo" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselRadiologo" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </a>
            </div>
        </section>

        <!-- ginecologo  y obstetra -->
        <section id="ginecologoObstetra">
            <h2 class="textoP" >GINECÓLOGOS Y OBSTETRAS</h2>
            
            <div id="carouselGinecologoObtetra" class="carousel slide container" data-bs-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-bs-target="#carouselGinecologoObtetra" data-bs-slide-to="0" class="active"></li>
                    <li data-bs-target="#carouselGinecologoObtetra" data-bs-slide-to="1"></li>
                    <li data-bs-target="#carouselGinecologoObtetra" data-bs-slide-to="2"></li>
                    <!-- Agrega más indicadores según sea necesario -->
                </ol>
        
                <!-- Slides -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="image">
                                            <img src="imágenes/medico4.jpg" alt="cardiologo">
                                        </div>
                                        <div class="name-profession">
                                            <span class="name">Dr. Carlos González</span>
                                            <span class="profession">Ginecólogo y Obstetra</span>
                                        </div>
                                        <div class="button">
                                            <!-- Button modal -->
                                            <button type="button" class="sobreMi btn" data-bs-toggle="modal" data-bs-target="#exampleModal18">Sobre Mi</button>
                                        
                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModal18" tabindex="-1" aria-labelledby="exampleModalLabel18" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h1 class="modal-title fs-5" id="exampleModalLabel18">Carlos González</h1>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <h5>Título:</h5>
                                                            <p>Ginecólogo y Obstetra</p>
                                                            <h5>Educación y Formación:</h5>
                                                            <ul>
                                                                <li>Título de Doctor en Medicina (MD) de la Universidad de Ginecología y Obstetricia</li>
                                                                <li>Residencia en Ginecología y Obstetricia en el Hospital Materno-Infantil</li>
                                                                <li>Certificación de la Junta en Ginecología y Obstetricia</li>
                                                            </ul>
                                                            <h5>Idiomas</h5>
                                                            <ul>
                                                                <li>Español</li>
                                                                <li>Inglés</li>
                                                            </ul>
                                                            <h5>Información de Contacto:</h5>
                                                            <ul>
                                                                <li><strong>Correo electrónico:</strong> carlos.gonzalez@email.com</li>
                                                                <li><strong>Teléfono:</strong> +123-456-7913</li>
                                                            </ul>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                                            <a href="http://localhost/MontCare/reservar.php"><button type="button" class="btn btn-primary">Agendar</button></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="http://localhost/MontCare/reservar.php"><button class="agendar">Agendar</button></a>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="image">
                                            <img src="imágenes/medico5.jpg" alt="cardiologo">
                                        </div>
                
                                        <div class="name-profession">
                                            <span class="name">Dra. Marta Sánchez</span>
                                            <span class="profession">Ginecóloga y Obstetra</span>
                                        </div>
                
                                        <div class="button">
                                            <!-- Button modal -->
                                            <button type="button" class="sobreMi btn" data-bs-toggle="modal" data-bs-target="#exampleModal19">Sobre Mi</button>
                                        
                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModal19" tabindex="-1" aria-labelledby="exampleModalLabel19" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h1 class="modal-title fs-5" id="exampleModalLabel19">Marta Sánchez</h1>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <h5>Título:</h5>
                                                            <p>Ginecóloga y Obstetra</p>
                                                            <h5>Educación y Formación:</h5>
                                                            <ul>
                                                                <li>Título de Doctor en Medicina (MD) de la Universidad de Ginecología y Obstetricia</li>
                                                                <li>Residencia en Ginecología y Obstetricia en el Hospital de la Mujer</li>
                                                                <li>Certificación de la Junta en Ginecología y Obstetricia</li>
                                                            </ul>
                                                            <h5>Idiomas</h5>
                                                            <ul>
                                                                <li>Español</li>
                                                                <li>Inglés</li>
                                                            </ul>
                                                            <h5>Información de Contacto:</h5>
                                                            <ul>
                                                                <li><strong>Correo electrónico:</strong> marta.sanchez@email.com</li>
                                                                <li><strong>Teléfono:</strong> +123-456-7914</li>
                                                            </ul>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                                            <a href="http://localhost/MontCare/reservar.php"><button type="button" class="btn btn-primary">Agendar</button></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="http://localhost/MontCare/reservar.php"><button class="agendar">Agendar</button></a>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="image">
                                            <img src="imágenes/medico1.webp" alt="cardiologo">
                                        </div>
                
                                        <div class="name-profession">
                                            <span class="name">Dr. Gabriel López</span>
                                            <span class="profession">Ginecólogo y Obstetra</span>
                                        </div>
                
                                        <div class="button">
                                            <!-- Button modal -->
                                            <button type="button" class="sobreMi btn" data-bs-toggle="modal" data-bs-target="#exampleModal20">Sobre Mi</button>
                                        
                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModal20" tabindex="-1" aria-labelledby="exampleModalLabel20" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h1 class="modal-title fs-5" id="exampleModalLabel20">Gabriel López</h1>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <h5>Título:</h5>
                                                            <p>Ginecólogo y Obstetra</p>
                                                            <h5>Educación y Formación:</h5>
                                                            <ul>
                                                                <li>Título de Doctor en Medicina (MD) de la Universidad de Ginecología y Obstetricia</li>
                                                                <li>Residencia en Ginecología y Obstetricia en el Hospital de la Madre y el Bebé</li>
                                                                <li>Certificación de la Junta en Ginecología y Obstetricia</li>
                                                            </ul>
                                                            <h5>Idiomas</h5>
                                                            <ul>
                                                                <li>Español</li>
                                                                <li>Inglés</li>
                                                            </ul>
                                                            <h5>Información de Contacto:</h5>
                                                            <ul>
                                                                <li><strong>Correo electrónico:</strong> gabriel.lopez@email.com</li>
                                                                <li><strong>Teléfono:</strong> +123-456-7915</li>
                                                            </ul>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                                            <a href="http://localhost/MontCare/reservar.php"><button type="button" class="btn btn-primary">Agendar</button></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="http://localhost/MontCare/reservar.php"><button class="agendar">Agendar</button></a>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="image">
                                            <img src="imágenes/medico2.jpg" alt="cardiologo">
                                        </div>
                                        <div class="name-profession">
                                            <span class="name">Dr. Luis Sánchez</span>
                                            <span class="profession">Ginecólogo y Obstetra</span>
                                        </div>
                                        <div class="button">
                                            <!-- Button modal -->
                                            <button type="button" class="sobreMi btn" data-bs-toggle="modal" data-bs-target="#exampleModal21">Sobre Mi</button>
                                        
                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModal21" tabindex="-1" aria-labelledby="exampleModalLabel21" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h1 class="modal-title fs-5" id="exampleModalLabel21">Luis Sánchez</h1>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <h5>Título:</h5>
                                                            <p>Ginecólogo y Obstetra</p>
                                                            <h5>Educación y Formación:</h5>
                                                            <ul>
                                                                <li>Título de Doctor en Medicina (MD) de la Universidad de Ginecología y Obstetricia</li>
                                                                <li>Residencia en Ginecología y Obstetricia en el Hospital de la Maternidad</li>
                                                                <li>Certificación de la Junta en Ginecología y Obstetricia</li>
                                                            </ul>
                                                            <h5>Idiomas</h5>
                                                            <ul>
                                                                <li>Español</li>
                                                                <li>Inglés</li>
                                                            </ul>
                                                            <h5>Información de Contacto:</h5>
                                                            <ul>
                                                                <li><strong>Correo electrónico:</strong> luis.sanchez@email.com</li>
                                                                <li><strong>Teléfono:</strong> +123-456-7916</li>
                                                            </ul>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                                            <a href="http://localhost/MontCare/reservar.php"><button type="button" class="btn btn-primary">Agendar</button></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="http://localhost/MontCare/reservar.php"><button class="agendar">Agendar</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="image">
                                            <img src="imágenes/medico6.jpg" alt="cardiologo">
                                        </div>
                
                                        <div class="name-profession">
                                            <span class="name">Dra.  Ana Torres</span>
                                            <span class="profession">Ginecóloga y Obstetra</span>
                                        </div>
                
                                        <div class="button">
                                            <!-- Button modal -->
                                            <button type="button" class="sobreMi btn" data-bs-toggle="modal" data-bs-target="#exampleModal22">Sobre Mi</button>
                                        
                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModal22" tabindex="-1" aria-labelledby="exampleModalLabel22" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h1 class="modal-title fs-5" id="exampleModalLabel22">Ana Torres</h1>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <h5>Título:</h5>
                                                            <p>Ginecóloga y Obstetra</p>
                                                            <h5>Educación y Formación:</h5>
                                                            <ul>
                                                                <li>Título de Doctor en Medicina (MD) de la Universidad de Ginecología y Obstetricia</li>
                                                                <li>Residencia en Ginecología y Obstetricia en el Hospital de la Mujer y el Bebé</li>
                                                                <li>Certificación de la Junta en Ginecología y Obstetricia</li>
                                                            </ul>
                                                            <h5>Idiomas</h5>
                                                            <ul>
                                                                <li>Español</li>
                                                                <li>Inglés</li>
                                                            </ul>
                                                            <h5>Información de Contacto:</h5>
                                                            <ul>
                                                                <li><strong>Correo electrónico:</strong> ana.torres@email.com</li>
                                                                <li><strong>Teléfono:</strong> +123-456-7916</li>
                                                            </ul>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                                            <a href="http://localhost/MontCare/reservar.php"><button type="button" class="btn btn-primary">Agendar</button></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="http://localhost/MontCare/reservar.php"><button class="agendar">Agendar</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="image">
                                            <img src="imágenes/medico7.jpg" alt="cardiologo">
                                        </div>
                
                                        <div class="name-profession">
                                            <span class="name">Dr. Daniel González</span>
                                            <span class="profession">Ginecólogo y Obstetra</span>
                                        </div>
                
                                        <div class="button">
                                            <!-- Button modal -->
                                            <button type="button" class="sobreMi btn" data-bs-toggle="modal" data-bs-target="#exampleModal23">Sobre Mi</button>
                                        
                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModal23" tabindex="-1" aria-labelledby="exampleModalLabel23" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h1 class="modal-title fs-5" id="exampleModalLabel23">Daniel González</h1>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <h5>Título:</h5>
                                                            <p>Ginecólogo y Obstetra</p>
                                                            <h5>Educación y Formación:</h5>
                                                            <ul>
                                                                <li>Título de Doctor en Medicina (MD) de la Universidad de Ginecología y Obstetricia</li>
                                                                <li>Residencia en Ginecología y Obstetricia en el Hospital de la Madre</li>
                                                                <li>Certificación de la Junta en Ginecología y Obstetricia</li>
                                                            </ul>
                                                            <h5>Idiomas</h5>
                                                            <ul>
                                                                <li>Español</li>
                                                                <li>Inglés</li>
                                                            </ul>
                                                            <h5>Información de Contacto:</h5>
                                                            <ul>
                                                                <li><strong>Correo electrónico:</strong> daniel.gonzalez@email.com</li>
                                                                <li><strong>Teléfono:</strong> +123-456-7917</li>
                                                            </ul>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                                            <a href="http://localhost/MontCare/reservar.php"><button type="button" class="btn btn-primary">Agendar</button></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="http://localhost/MontCare/reservar.php"><button class="agendar">Agendar</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="image">
                                            <img src="imágenes/medico9.jpg" alt="cardiologo">
                                        </div>
                
                                        <div class="name-profession">
                                            <span class="name">Dr. Andrés Martínez</span>
                                            <span class="profession">Ginecólogo y Obstetra</span>
                                        </div>
                
                                        <div class="button">
                                            <!-- Button modal -->
                                            <button type="button" class="sobreMi btn" data-bs-toggle="modal" data-bs-target="#exampleModal24">Sobre Mi</button>
                                        
                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModal24" tabindex="-1" aria-labelledby="exampleModalLabel24" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h1 class="modal-title fs-5" id="exampleModalLabel24">Andrés Martínez</h1>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <h5>Título:</h5>
                                                            <p>Ginecólogo y Obstetra</p>
                                                            <h5>Educación y Formación:</h5>
                                                            <ul>
                                                                <li>Título de Doctor en Medicina (MD) de la Universidad de Ginecología y Obstetricia</li>
                                                                <li>Residencia en Ginecología y Obstetricia en el Hospital Materno</li>
                                                                <li>Certificación de la Junta en Ginecología y Obstetricia</li>
                                                            </ul>
                                                            <h5>Idiomas</h5>
                                                            <ul>
                                                                <li>Español</li>
                                                                <li>Inglés</li>
                                                            </ul>
                                                            <h5>Información de Contacto:</h5>
                                                            <ul>
                                                                <li><strong>Correo electrónico:</strong> andres.martinez@email.com</li>
                                                                <li><strong>Teléfono:</strong> +123-456-7918</li>
                                                            </ul>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                                            <a href="http://localhost/MontCare/reservar.php"><button type="button" class="btn btn-primary">Agendar</button></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="http://localhost/MontCare/reservar.php"><button class="agendar">Agendar</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="image">
                                            <img src="imágenes/medico8.jpg" alt="cardiologo">
                                        </div>
                
                                        <div class="name-profession">
                                            <span class="name">Dra.  Laura Vargas</span>
                                            <span class="profession">Ginecóloga y Obstetra</span>
                                        </div>
                
                                        <div class="button">
                                            <!-- Button modal -->
                                            <button type="button" class="sobreMi btn" data-bs-toggle="modal" data-bs-target="#exampleModal25">Sobre Mi</button>
                                        
                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModal25" tabindex="-1" aria-labelledby="exampleModalLabel25" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h1 class="modal-title fs-5" id="exampleModalLabel25">Laura Vargas</h1>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <h5>Título:</h5>
                                                            <p>Ginecóloga y Obstetra</p>
                                                            <h5>Educación y Formación:</h5>
                                                            <ul>
                                                                <li>Título de Doctor en Medicina (MD) de la Universidad de Ginecología y Obstetricia</li>
                                                                <li>Residencia en Ginecología y Obstetricia en el Hospital Maternidad</li>
                                                                <li>Certificación de la Junta en Ginecología y Obstetricia</li>
                                                            </ul>
                                                            <h5>Idiomas</h5>
                                                            <ul>
                                                                <li>Español</li>
                                                                <li>Inglés</li>
                                                            </ul>
                                                            <h5>Información de Contacto:</h5>
                                                            <ul>
                                                                <li><strong>Correo electrónico:</strong> laura.vargas@email.com</li>
                                                                <li><strong>Teléfono:</strong> +123-456-7919</li>
                                                            </ul>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                                            <a href="http://localhost/MontCare/reservar.php"><button type="button" class="btn btn-primary">Agendar</button></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="http://localhost/MontCare/reservar.php"><button class="agendar">Agendar</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="image">
                                            <img src="imágenes/medico10.jpg" alt="cardiologo">
                                        </div>
                
                                        <div class="name-profession">
                                            <span class="name">Dr. Sergio Castro</span>
                                            <span class="profession">Ginecólogo y Obstetra</span>
                                        </div>
                
                                        <div class="button">
                                            <!-- Button modal -->
                                            <button type="button" class="sobreMi btn" data-bs-toggle="modal" data-bs-target="#exampleModal26">Sobre Mi</button>
                                        
                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModal26" tabindex="-1" aria-labelledby="exampleModalLabel26" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h1 class="modal-title fs-5" id="exampleModalLabel26">Sergio Castro</h1>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <h5>Título:</h5>
                                                            <p>Ginecólogo y Obstetra</p>
                                                            <h5>Educación y Formación:</h5>
                                                            <ul>
                                                                <li>Título de Doctor en Medicina (MD) de la Universidad de Ginecología y Obstetricia</li>
                                                                <li>Residencia en Ginecología y Obstetricia en el Hospital Maternidad y la Mujer</li>
                                                                <li>Certificación de la Junta en Ginecología y Obstetricia</li>
                                                            </ul>
                                                            <h5>Idiomas</h5>
                                                            <ul>
                                                                <li>Español</li>
                                                                <li>Inglés</li>
                                                            </ul>
                                                            <h5>Información de Contacto:</h5>
                                                            <ul>
                                                                <li><strong>Correo electrónico:</strong> sergio.castro@email.com</li>
                                                                <li><strong>Teléfono:</strong> +123-456-7902</li>
                                                            </ul>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                                            <a href="http://localhost/MontCare/reservar.php"><button type="button" class="btn btn-primary">Agendar</button></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="http://localhost/MontCare/reservar.php"><button class="agendar">Agendar</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
        
                <!-- prev y next -->
                <a class="carousel-control-prev" href="#carouselGinecologoObtetra" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselGinecologoObtetra" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </a>
            </div>
        </section>

        <!-- Dermatologos -->
        <section id="dermatologo">
            <h2 class="textoP" >DERMATÓLOGOS</h2>
            
            <div id="carouselDermatologo" class="carousel slide container" data-bs-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-bs-target="#carouselDermatologo" data-bs-slide-to="0" class="active"></li>
                    <li data-bs-target="#carouselDermatologo" data-bs-slide-to="1"></li>
                    <li data-bs-target="#carouselDermatologo" data-bs-slide-to="2"></li>
                    <!-- Agrega más indicadores según sea necesario -->
                </ol>
        
                <!-- Slides -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="image">
                                            <img src="imágenes/medico4.jpg" alt="cardiologo">
                                        </div>
                                        <div class="name-profession">
                                            <span class="name">Dr. Manuel Jiménez</span>
                                            <span class="profession">Dermatólogo</span>
                                        </div>
                                        <div class="button">
                                            <!-- Button modal -->
                                            <button type="button" class="sobreMi btn" data-bs-toggle="modal" data-bs-target="#exampleModal27">Sobre Mi</button>
                                        
                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModal27" tabindex="-1" aria-labelledby="exampleModalLabel27" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h1 class="modal-title fs-5" id="exampleModalLabel27">Manuel Jiménez</h1>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <h5>Título:</h5>
                                                            <p>Dermatólogo</p>
                                                            <h5>Educación y Formación:</h5>
                                                            <ul>
                                                                <li>Título de Doctor en Medicina (MD) de la Universidad de Dermatología</li>
                                                                <li>Residencia en Dermatología en el Hospital de Dermatología</li>
                                                                <li>Certificación de la Junta en Dermatología</li>
                                                            </ul>
                                                            <h5>Idiomas</h5>
                                                            <ul>
                                                                <li>Español</li>
                                                                <li>Inglés</li>
                                                            </ul>
                                                            <h5>Información de Contacto:</h5>
                                                            <ul>
                                                                <li><strong>Correo electrónico:</strong> manuel.jimenez@email.com</li>
                                                                <li><strong>Teléfono:</strong> +123-456-7928</li>
                                                            </ul>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                                            <a href="http://localhost/MontCare/reservar.php"><button type="button" class="btn btn-primary">Agendar</button></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="http://localhost/MontCare/reservar.php"><button class="agendar">Agendar</button></a>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="image">
                                            <img src="imágenes/medico5.jpg" alt="cardiologo">
                                        </div>
                
                                        <div class="name-profession">
                                            <span class="name">Dra. Isabel Vargas</span>
                                            <span class="profession">Dermatóloga</span>
                                        </div>
                
                                        <div class="button">
                                            <!-- Button modal -->
                                            <button type="button" class="sobreMi btn" data-bs-toggle="modal" data-bs-target="#exampleModal28">Sobre Mi</button>
                                        
                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModal28" tabindex="-1" aria-labelledby="exampleModalLabel28" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h1 class="modal-title fs-5" id="exampleModalLabel28">Isabel Vargas</h1>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <h5>Título:</h5>
                                                            <p>Dermatóloga</p>
                                                            <h5>Educación y Formación:</h5>
                                                            <ul>
                                                                <li>Título de Doctor en Medicina (MD) de la Universidad de Dermatología</li>
                                                                <li>Residencia en Dermatología en el Hospital de Dermatología Clínica</li>
                                                                <li>Certificación de la Junta en Dermatología</li>
                                                            </ul>
                                                            <h5>Idiomas</h5>
                                                            <ul>
                                                                <li>Español</li>
                                                                <li>Inglés</li>
                                                            </ul>
                                                            <h5>Información de Contacto:</h5>
                                                            <ul>
                                                                <li><strong>Correo electrónico:</strong> isabel.vargas@email.com</li>
                                                                <li><strong>Teléfono:</strong> +123-456-7929</li>
                                                            </ul>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                                            <a href="http://localhost/MontCare/reservar.php"><button type="button" class="btn btn-primary">Agendar</button></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="http://localhost/MontCare/reservar.php"><button class="agendar">Agendar</button></a>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="image">
                                            <img src="imágenes/medico1.webp" alt="cardiologo">
                                        </div>
                
                                        <div class="name-profession">
                                            <span class="name">Dr. Eduardo Silva</span>
                                            <span class="profession">Dermatólogo</span>
                                        </div>
                
                                        <div class="button">
                                            <!-- Button modal -->
                                            <button type="button" class="sobreMi btn" data-bs-toggle="modal" data-bs-target="#exampleModal29">Sobre Mi</button>
                                        
                                              <!-- Modal -->
                                            <div class="modal fade" id="exampleModal29" tabindex="-1" aria-labelledby="exampleModalLabel29" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h1 class="modal-title fs-5" id="exampleModalLabel29">Eduardo Silva</h1>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <h5>Título:</h5>
                                                            <p>Dermatólogo</p>
                                                            <h5>Educación y Formación:</h5>
                                                            <ul>
                                                                <li>Título de Doctor en Medicina (MD) de la Universidad de Dermatología</li>
                                                                <li>Residencia en Dermatología en el Hospital de Dermatología Estética</li>
                                                                <li>Certificación de la Junta en Dermatología</li>
                                                            </ul>
                                                            <h5>Idiomas</h5>
                                                            <ul>
                                                                <li>Español</li>
                                                                <li>Inglés</li>
                                                            </ul>
                                                            <h5>Información de Contacto:</h5>
                                                            <ul>
                                                                <li><strong>Correo electrónico:</strong> eduardo.silva@email.com</li>
                                                                <li><strong>Teléfono:</strong> +123-456-7930</li>
                                                            </ul>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                                            <a href="http://localhost/MontCare/reservar.php"><button type="button" class="btn btn-primary">Agendar</button></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="http://localhost/MontCare/reservar.php"><button class="agendar">Agendar</button></a>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="image">
                                            <img src="imágenes/medico2.jpg" alt="cardiologo">
                                        </div>
                                        <div class="name-profession">
                                            <span class="name">Dr. Daniel Molina</span>
                                            <span class="profession">Dermatólogo</span>
                                        </div>
                                        <div class="button">
                                            <!-- Button modal -->
                                            <button type="button" class="sobreMi btn" data-bs-toggle="modal" data-bs-target="#exampleModal30">Sobre Mi</button>
                                        
                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModal30" tabindex="-1" aria-labelledby="exampleModalLabel30" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h1 class="modal-title fs-5" id="exampleModalLabel30">Daniel Molina</h1>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <h5>Título:</h5>
                                                            <p>Dermatólogo</p>
                                                            <h5>Educación y Formación:</h5>
                                                            <ul>
                                                                <li>Título de Doctor en Medicina (MD) de la Universidad de Dermatología</li>
                                                                <li>Residencia en Dermatología en el Hospital de Dermatología Pediátrica</li>
                                                                <li>Certificación de la Junta en Dermatología</li>
                                                            </ul>
                                                            <h5>Idiomas</h5>
                                                            <ul>
                                                                <li>Español</li>
                                                                <li>Inglés</li>
                                                            </ul>
                                                            <h5>Información de Contacto:</h5>
                                                            <ul>
                                                                <li><strong>Correo electrónico:</strong> daniel.molina@email.com</li>
                                                                <li><strong>Teléfono:</strong> +123-456-7931</li>
                                                            </ul>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                                            <a href="http://localhost/MontCare/reservar.php"><button type="button" class="btn btn-primary">Agendar</button></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="http://localhost/MontCare/reservar.php"><button class="agendar">Agendar</button></a>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="image">
                                            <img src="imágenes/medico6.jpg" alt="cardiologo">
                                        </div>
                
                                        <div class="name-profession">
                                            <span class="name">Dra. Carmen Pérez</span>
                                            <span class="profession">Dermatóloga</span>
                                        </div>
                
                                        <div class="button">
                                            <!-- Button modal -->
                                            <button type="button" class="sobreMi btn" data-bs-toggle="modal" data-bs-target="#exampleModal31">Sobre Mi</button>
                                        
                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModal31" tabindex="-1" aria-labelledby="exampleModalLabel31" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h1 class="modal-title fs-5" id="exampleModalLabel31">Carmen Pérez</h1>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <h5>Título:</h5>
                                                            <p>Dermatóloga</p>
                                                            <h5>Educación y Formación:</h5>
                                                            <ul>
                                                                <li>Título de Doctor en Medicina (MD) de la Universidad de Dermatología</li>
                                                                <li>Residencia en Dermatología en el Hospital de Dermatología Avanzada</li>
                                                                <li>Certificación de la Junta en Dermatología</li>
                                                            </ul>
                                                            <h5>Idiomas</h5>
                                                            <ul>
                                                                <li>Español</li>
                                                                <li>Inglés</li>
                                                            </ul>
                                                            <h5>Información de Contacto:</h5>
                                                            <ul>
                                                                <li><strong>Correo electrónico:</strong> carmen.perez@email.com</li>
                                                                <li><strong>Teléfono:</strong> +123-456-7932</li>
                                                            </ul>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                                            <a href="http://localhost/MontCare/reservar.php"><button type="button" class="btn btn-primary">Agendar</button></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="http://localhost/MontCare/reservar.php"><button class="agendar">Agendar</button></a>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="image">
                                            <img src="imágenes/medico7.jpg" alt="cardiologo">
                                        </div>
                
                                        <div class="name-profession">
                                            <span class="name">Dr. Rafael Torres</span>
                                            <span class="profession">Dermatólogo</span>
                                        </div>
                
                                        <div class="button">
                                            <!-- Button modal -->
                                            <button type="button" class="sobreMi btn" data-bs-toggle="modal" data-bs-target="#exampleModal32">Sobre Mi</button>
                                        
                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModal32" tabindex="-1" aria-labelledby="exampleModalLabel32" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h1 class="modal-title fs-5" id="exampleModalLabel32">Rafael Torres</h1>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <h5>Título:</h5>
                                                            <p>Dermatólogo</p>
                                                            <h5>Educación y Formación:</h5>
                                                            <ul>
                                                                <li>Título de Doctor en Medicina (MD) de la Universidad de Dermatología</li>
                                                                <li>Residencia en Dermatología en el Hospital de Dermatología Clínica</li>
                                                                <li>Certificación de la Junta en Dermatología</li>
                                                            </ul>
                                                            <h5>Idiomas</h5>
                                                            <ul>
                                                                <li>Español</li>
                                                                <li>Inglés</li>
                                                            </ul>
                                                            <h5>Información de Contacto:</h5>
                                                            <ul>
                                                                <li><strong>Correo electrónico:</strong> rafael.torres@email.com</li>
                                                                <li><strong>Teléfono:</strong> +123-456-7933</li>
                                                            </ul>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                                            <a href="http://localhost/MontCare/reservar.php"><button type="button" class="btn btn-primary">Agendar</button></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="http://localhost/MontCare/reservar.php"><button class="agendar">Agendar</button></a>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="image">
                                            <img src="imágenes/medico9.jpg" alt="cardiologo">
                                        </div>
                
                                        <div class="name-profession">
                                            <span class="name">Dr. Raúl Sánchez</span>
                                            <span class="profession">Dermatólogo</span>
                                        </div>
                
                                        <div class="button">
                                            <!-- Button modal -->
                                            <button type="button" class="sobreMi btn" data-bs-toggle="modal" data-bs-target="#exampleModal33">Sobre Mi</button>
                                        
                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModal33" tabindex="-1" aria-labelledby="exampleModalLabel33" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h1 class="modal-title fs-5" id="exampleModalLabel33">Raúl Sánchez</h1>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <h5>Título:</h5>
                                                            <p>Dermatólogo</p>
                                                            <h5>Educación y Formación:</h5>
                                                            <ul>
                                                                <li>Título de Doctor en Medicina (MD) de la Universidad de Dermatología</li>
                                                                <li>Residencia en Dermatología en el Hospital de Dermatología General</li>
                                                                <li>Certificación de la Junta en Dermatología</li>
                                                            </ul>
                                                            <h5>Idiomas</h5>
                                                            <ul>
                                                                <li>Español</li>
                                                                <li>Inglés</li>
                                                            </ul>
                                                            <h5>Información de Contacto:</h5>
                                                            <ul>
                                                                <li><strong>Correo electrónico:</strong> raul.sanchez@email.com</li>
                                                                <li><strong>Teléfono:</strong> +123-456-7934</li>
                                                            </ul>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                                            <a href="http://localhost/MontCare/reservar.php"><button type="button" class="btn btn-primary">Agendar</button></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="http://localhost/MontCare/reservar.php"><button class="agendar">Agendar</button></a>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="image">
                                            <img src="imágenes/medico8.jpg" alt="cardiologo">
                                        </div>
                
                                        <div class="name-profession">
                                            <span class="name">Dra. Carla Rodríguez</span>
                                            <span class="profession">Dermatóloga</span>
                                        </div>
                
                                        <div class="button">
                                            <!-- Button modal -->
                                            <button type="button" class="sobreMi btn" data-bs-toggle="modal" data-bs-target="#exampleModal34">Sobre Mi</button>
                                        
                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModal34" tabindex="-1" aria-labelledby="exampleModalLabel34" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h1 class="modal-title fs-5" id="exampleModalLabel34">Carla Rodríguez</h1>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <h5>Título:</h5>
                                                            <p>Dermatóloga</p>
                                                            <h5>Educación y Formación:</h5>
                                                            <ul>
                                                                <li>Título de Doctor en Medicina (MD) de la Universidad de Dermatología</li>
                                                                <li>Residencia en Dermatología en el Hospital de Dermatología Pediátrica</li>
                                                                <li>Certificación de la Junta en Dermatología</li>
                                                            </ul>
                                                            <h5>Idiomas</h5>
                                                            <ul>
                                                                <li>Español</li>
                                                                <li>Inglés</li>
                                                            </ul>
                                                            <h5>Información de Contacto:</h5>
                                                            <ul>
                                                                <li><strong>Correo electrónico:</strong> carla.rodriguez@email.com</li>
                                                                <li><strong>Teléfono:</strong> +123-456-7935</li>
                                                            </ul>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                                            <a href="http://localhost/MontCare/reservar.php"><button type="button" class="btn btn-primary">Agendar</button></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="http://localhost/MontCare/reservar.php"><button class="agendar">Agendar</button></a>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="image">
                                            <img src="imágenes/medico10.jpg" alt="cardiologo">
                                        </div>
                
                                        <div class="name-profession">
                                            <span class="name">Dr. Pedro Navarro</span>
                                            <span class="profession">Dermatólogo</span>
                                        </div>
                
                                        <div class="button">
                                            <!-- Button modal -->
                                            <button type="button" class="sobreMi btn" data-bs-toggle="modal" data-bs-target="#exampleModal35">Sobre Mi</button>
                                        
                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModal35" tabindex="-1" aria-labelledby="exampleModalLabel35" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h1 class="modal-title fs-5" id="exampleModalLabel35">Pedro Navarro</h1>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <h5>Título:</h5>
                                                            <p>Dermatólogo</p>
                                                            <h5>Educación y Formación:</h5>
                                                            <ul>
                                                                <li>Título de Doctor en Medicina (MD) de la Universidad de Dermatología</li>
                                                                <li>Residencia en Dermatología en el Hospital de Dermatología Avanzada</li>
                                                                <li>Certificación de la Junta en Dermatología</li>
                                                            </ul>
                                                            <h5>Idiomas</h5>
                                                            <ul>
                                                                <li>Español</li>
                                                                <li>Inglés</li>
                                                            </ul>
                                                            <h5>Información de Contacto:</h5>
                                                            <ul>
                                                                <li><strong>Correo electrónico:</strong> pedro.navarro@email.com</li>
                                                                <li><strong>Teléfono:</strong> +123-456-7936</li>
                                                            </ul>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                                            <a href="http://localhost/MontCare/reservar.php"><button type="button" class="btn btn-primary">Agendar</button></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="http://localhost/MontCare/reservar.php"><button class="agendar">Agendar</button></a>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
        
                <!-- prev y next -->
                <a class="carousel-control-prev" href="#carouselDermatologo" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselDermatologo" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </a>
            </div>
        </section>

        <!-- Pediatra -->
        <section id="pediatra">
            <h2 class="textoP" >PEDIATRAS</h2>
            
            <div id="carouselPediatra" class="carousel slide container" data-bs-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-bs-target="#carouselPediatra" data-bs-slide-to="0" class="active"></li>
                    <li data-bs-target="#carouselPediatra" data-bs-slide-to="1"></li>
                    <li data-bs-target="#carouselPediatra" data-bs-slide-to="2"></li>
                    <!-- Agrega más indicadores según sea necesario -->
                </ol>
        
                <!-- Slides -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="image">
                                            <img src="imágenes/medico4.jpg" alt="cardiologo">
                                        </div>
                                        <div class="name-profession">
                                            <span class="name">Dr. Andrés Castro</span>
                                            <span class="profession">Pediatra</span>
                                        </div>
                                        <div class="button">
                                            <!-- Button modal -->
                                            <button type="button" class="sobreMi btn" data-bs-toggle="modal" data-bs-target="#exampleModal36">Sobre Mi</button>
                                        
                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModal36" tabindex="-1" aria-labelledby="exampleModalLabel36" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h1 class="modal-title fs-5" id="exampleModalLabel36">Andrés Castro</h1>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <h5>Título:</h5>
                                                            <p>Pediatra</p>
                                                            <h5>Educación y Formación:</h5>
                                                            <ul>
                                                                <li>Título de Doctor en Medicina (MD) de la Universidad de Pediatría</li>
                                                                <li>Residencia en Pediatría en el Hospital Infantil</li>
                                                                <li>Certificación de la Junta en Pediatría</li>
                                                            </ul>
                                                            <h5>Idiomas</h5>
                                                            <ul>
                                                                <li>Español</li>
                                                                <li>Inglés</li>
                                                            </ul>
                                                            <h5>Información de Contacto:</h5>
                                                            <ul>
                                                                <li><strong>Correo electrónico:</strong> andres.castro@email.com</li>
                                                                <li><strong>Teléfono:</strong> +123-456-7910</li>
                                                            </ul>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                                            <a href="http://localhost/MontCare/reservar.php"><button type="button" class="btn btn-primary">Agendar</button></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="http://localhost/MontCare/reservar.php"><button class="agendar">Agendar</button></a>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="image">
                                            <img src="imágenes/medico5.jpg" alt="cardiologo">
                                        </div>
                
                                        <div class="name-profession">
                                            <span class="name">Dra. Patricia Jiménez</span>
                                            <span class="profession">Pediatra</span>
                                        </div>
                
                                        <div class="button">
                                            <!-- Button modal -->
                                            <button type="button" class="sobreMi btn" data-bs-toggle="modal" data-bs-target="#exampleModal37">Sobre Mi</button>
                                        
                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModal37" tabindex="-1" aria-labelledby="exampleModalLabel37" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h1 class="modal-title fs-5" id="exampleModalLabel37">Patricia Jiménez</h1>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <h5>Título:</h5>
                                                            <p>Pediatra</p>
                                                            <h5>Educación y Formación:</h5>
                                                            <ul>
                                                                <li>Título de Doctor en Medicina (MD) de la Universidad de Pediatría</li>
                                                                <li>Residencia en Pediatría en el Hospital Pediátrico</li>
                                                                <li>Certificación de la Junta en Pediatría</li>
                                                            </ul>
                                                            <h5>Idiomas</h5>
                                                            <ul>
                                                                <li>Español</li>
                                                                <li>Inglés</li>
                                                            </ul>
                                                            <h5>Información de Contacto:</h5>
                                                            <ul>
                                                                <li><strong>Correo electrónico:</strong> patricia.jimenez@email.com</li>
                                                                <li><strong>Teléfono:</strong> +123-456-7911</li>
                                                            </ul>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                                            <a href="http://localhost/MontCare/reservar.php"><button type="button" class="btn btn-primary">Agendar</button></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="http://localhost/MontCare/reservar.php"><button class="agendar">Agendar</button></a>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="image">
                                            <img src="imágenes/medico1.webp" alt="cardiologo">
                                        </div>
                
                                        <div class="name-profession">
                                            <span class="name">Dr. Juan García</span>
                                            <span class="profession">Pediatra</span>
                                        </div>
                
                                        <div class="button">
                                            <!-- Button modal -->
                                            <button type="button" class="sobreMi btn" data-bs-toggle="modal" data-bs-target="#exampleModal38">Sobre Mi</button>
                                        
                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModal38" tabindex="-1" aria-labelledby="exampleModalLabel38" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h1 class="modal-title fs-5" id="exampleModalLabel38">Juan García</h1>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <h5>Título:</h5>
                                                            <p>Pediatra</p>
                                                            <h5>Educación y Formación:</h5>
                                                            <ul>
                                                                <li>Título de Doctor en Medicina (MD) de la Universidad de Pediatría</li>
                                                                <li>Residencia en Pediatría en el Hospital de Niños</li>
                                                                <li>Certificación de la Junta en Pediatría</li>
                                                            </ul>
                                                            <h5>Idiomas</h5>
                                                            <ul>
                                                                <li>Español</li>
                                                                <li>Inglés</li>
                                                            </ul>
                                                            <h5>Información de Contacto:</h5>
                                                            <ul>
                                                                <li><strong>Correo electrónico:</strong> juan.garcia@email.com</li>
                                                                <li><strong>Teléfono:</strong> +123-456-7912</li>
                                                            </ul>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                                            <a href="http://localhost/MontCare/reservar.php"><button type="button" class="btn btn-primary">Agendar</button></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="http://localhost/MontCare/reservar.php"><button class="agendar">Agendar</button></a>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="image">
                                            <img src="imágenes/medico2.jpg" alt="cardiologo">
                                        </div>
                                        <div class="name-profession">
                                            <span class="name">Dr. Francisco Vargas</span>
                                            <span class="profession">Pediatra</span>
                                        </div>
                                        <div class="button">
                                            <!-- Button modal -->
                                            <button type="button" class="sobreMi btn" data-bs-toggle="modal" data-bs-target="#exampleModal39">Sobre Mi</button>
                                        
                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModal39" tabindex="-1" aria-labelledby="exampleModalLabel39" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h1 class="modal-title fs-5" id="exampleModalLabel39">Francisco Vargas</h1>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <h5>Título:</h5>
                                                            <p>Pediatra</p>
                                                            <h5>Educación y Formación:</h5>
                                                            <ul>
                                                                <li>Título de Doctor en Medicina (MD) de la Universidad de Pediatría</li>
                                                                <li>Residencia en Pediatría en el Hospital de Pediatría General</li>
                                                                <li>Certificación de la Junta en Pediatría</li>
                                                            </ul>
                                                            <h5>Idiomas</h5>
                                                            <ul>
                                                                <li>Español</li>
                                                                <li>Inglés</li>
                                                            </ul>
                                                            <h5>Información de Contacto:</h5>
                                                            <ul>
                                                                <li><strong>Correo electrónico:</strong> francisco.vargas@email.com</li>
                                                                <li><strong>Teléfono:</strong> +123-456-7913</li>
                                                            </ul>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                                            <a href="http://localhost/MontCare/reservar.php"><button type="button" class="btn btn-primary">Agendar</button></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="http://localhost/MontCare/reservar.php"><button class="agendar">Agendar</button></a>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="image">
                                            <img src="imágenes/medico6.jpg" alt="cardiologo">
                                        </div>
                
                                        <div class="name-profession">
                                            <span class="name">Dra. Rosa Navarro</span>
                                            <span class="profession">Pediatra</span>
                                        </div>
                
                                        <div class="button">
                                            <!-- Button modal -->
                                            <button type="button" class "sobreMi btn" data-bs-toggle="modal" data-bs-target="#exampleModal40">Sobre Mi</button>
                                        
                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModal40" tabindex="-1" aria-labelledby="exampleModalLabel40" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h1 class="modal-title fs-5" id="exampleModalLabel40">Rosa Navarro</h1>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <h5>Título:</h5>
                                                            <p>Pediatra</p>
                                                            <h5>Educación y Formación:</h5>
                                                            <ul>
                                                                <li>Título de Doctor en Medicina (MD) de la Universidad de Pediatría</li>
                                                                <li>Residencia en Pediatría en el Hospital Infantil de Niños</li>
                                                                <li>Certificación de la Junta en Pediatría</li>
                                                            </ul>
                                                            <h5>Idiomas</h5>
                                                            <ul>
                                                                <li>Español</li>
                                                                <li>Inglés</li>
                                                            </ul>
                                                            <h5>Información de Contacto:</h5>
                                                            <ul>
                                                                <li><strong>Correo electrónico:</strong> rosa.navarro@email.com</li>
                                                                <li><strong>Teléfono:</strong> +123-456-7914</li>
                                                            </ul>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                                            <a href="http://localhost/MontCare/reservar.php"><button type="button" class="btn btn-primary">Agendar</button></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="http://localhost/MontCare/reservar.php"><button class="agendar">Agendar</button></a>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="image">
                                            <img src="imágenes/medico7.jpg" alt="cardiologo">
                                        </div>
                
                                        <div class="name-profession">
                                            <span class="name">Dr. Miguel Sánchez</span>
                                            <span class="profession">Pediatra</span>
                                        </div>
                
                                        <div class="button">
                                            <!-- Button modal -->
                                            <button type="button" class="sobreMi btn" data-bs-toggle="modal" data-bs-target="#exampleModal41">Sobre Mi</button>
                                        
                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModal41" tabindex="-1" aria-labelledby="exampleModalLabel41" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h1 class="modal-title fs-5" id="exampleModalLabel41">Miguel Sánchez</h1>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <h5>Título:</h5>
                                                            <p>Pediatra</p>
                                                            <h5>Educación y Formación:</h5>
                                                            <ul>
                                                                <li>Título de Doctor en Medicina (MD) de la Universidad de Pediatría</li>
                                                                <li>Residencia en Pediatría en el Hospital Pediátrico General</li>
                                                                <li>Certificación de la Junta en Pediatría</li>
                                                            </ul>
                                                            <h5>Idiomas</h5>
                                                            <ul>
                                                                <li>Español</li>
                                                                <li>Inglés</li>
                                                            </ul>
                                                            <h5>Información de Contacto:</h5>
                                                            <ul>
                                                                <li><strong>Correo electrónico:</strong> miguel.sanchez@email.com</li>
                                                                <li><strong>Teléfono:</strong> +123-456-7915</li>
                                                            </ul>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                                            <a href="http://localhost/MontCare/reservar.php"><button type="button" class="btn btn-primary">Agendar</button></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="http://localhost/MontCare/reservar.php"><button class="agendar">Agendar</button></a>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="image">
                                            <img src="imágenes/medico9.jpg" alt="cardiologo">
                                        </div>
                
                                        <div class="name-profession">
                                            <span class="name">Dr. Ángel González</span>
                                            <span class="profession">Pediatra</span>
                                        </div>
                
                                        <div class="button">
                                            <!-- Button modal -->
                                            <button type="button" class="sobreMi btn" data-bs-toggle="modal" data-bs-target="#exampleModal42">Sobre Mi</button>
                                        
                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModal42" tabindex="-1" aria-labelledby="exampleModalLabel42" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h1 class="modal-title fs-5" id="exampleModalLabel42">Ángel González</h1>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <h5>Título:</h5>
                                                            <p>Pediatra</p>
                                                            <h5>Educación y Formación:</h5>
                                                            <ul>
                                                                <li>Título de Doctor en Medicina (MD) de la Universidad de Pediatría</li>
                                                                <li>Residencia en Pediatría en el Hospital Infantil de Niños</li>
                                                                <li>Certificación de la Junta en Pediatría</li>
                                                            </ul>
                                                            <h5>Idiomas</h5>
                                                            <ul>
                                                                <li>Español</li>
                                                                <li>Inglés</li>
                                                            </ul>
                                                            <h5>Información de Contacto:</h5>
                                                            <ul>
                                                                <li><strong>Correo electrónico:</strong> angel.gonzalez@email.com</li>
                                                                <li><strong>Teléfono:</strong> +123-456-7916</li>
                                                            </ul>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                                            <a href="http://localhost/MontCare/reservar.php"><button type="button" class="btn btn-primary">Agendar</button></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="http://localhost/MontCare/reservar.php"><button class="agendar">Agendar</button></a>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="image">
                                            <img src="imágenes/medico8.jpg" alt="cardiologo">
                                        </div>
                
                                        <div class="name-profession">
                                            <span class="name">Dra. Susana Fernández</span>
                                            <span class="profession">Pediatra</span>
                                        </div>
                
                                        <div class="button">
                                            <!-- Button modal -->
                                            <button type="button" class="sobreMi btn" data-bs-toggle="modal" data-bs-target="#exampleModal43">Sobre Mi</button>
                                        
                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModal43" tabindex="-1" aria-labelledby="exampleModalLabel43" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h1 class="modal-title fs-5" id="exampleModalLabel43">Susana Fernández</h1>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <h5>Título:</h5>
                                                            <p>Pediatra</p>
                                                            <h5>Educación y Formación:</h5>
                                                            <ul>
                                                                <li>Título de Doctor en Medicina (MD) de la Universidad de Pediatría</li>
                                                                <li>Residencia en Pediatría en el Hospital Infantil de Niños</li>
                                                                <li>Certificación de la Junta en Pediatría</li>
                                                            </ul>
                                                            <h5>Idiomas</h5>
                                                            <ul>
                                                                <li>Español</li>
                                                                <li>Inglés</li>
                                                            </ul>
                                                            <h5>Información de Contacto:</h5>
                                                            <ul>
                                                                <li><strong>Correo electrónico:</strong> susana.fernandez@email.com</li>
                                                                <li><strong>Teléfono:</strong> +123-456-7917</li>
                                                            </ul>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                                            <a href="http://localhost/MontCare/reservar.php"><button type="button" class="btn btn-primary">Agendar</button></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="http://localhost/MontCare/reservar.php"><button class="agendar">Agendar</button></a>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="image">
                                            <img src="imágenes/medico10.jpg" alt="cardiologo">
                                        </div>
                
                                        <div class="name-profession">
                                            <span class="name">Dr. Daniel Ramírez</span>
                                            <span class="profession">Pediatra</span>
                                        </div>
                
                                        <div class="button">
                                            <!-- Button modal -->
                                            <button type="button" class="sobreMi btn" data-bs-toggle="modal" data-bs-target="#exampleModal44">Sobre Mi</button>
                                        
                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModal44" tabindex="-1" aria-labelledby="exampleModalLabel44" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h1 class="modal-title fs-5" id="exampleModalLabel44">Daniel Ramírez</h1>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <h5>Título:</h5>
                                                            <p>Pediatra</p>
                                                            <h5>Educación y Formación:</h5>
                                                            <ul>
                                                                <li>Título de Doctor en Medicina (MD) de la Universidad de Pediatría</li>
                                                                <li>Residencia en Pediatría en el Hospital Infantil de Niños</li>
                                                                <li>Certificación de la Junta en Pediatría</li>
                                                            </ul>
                                                            <h5>Idiomas</h5>
                                                            <ul>
                                                                <li>Español</li>
                                                                <li>Inglés</li>
                                                            </ul>
                                                            <h5>Información de Contacto:</h5>
                                                            <ul>
                                                                <li><strong>Correo electrónico:</strong> daniel.ramirez@email.com</li>
                                                                <li><strong>Teléfono:</strong> +123-456-7918</li>
                                                            </ul>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                                            <a href="http://localhost/MontCare/reservar.php"><button type="button" class="btn btn-primary">Agendar</button></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="http://localhost/MontCare/reservar.php"><button class="agendar">Agendar</button></a>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
        
                <!-- prev y next -->
                <a class="carousel-control-prev" href="#carouselPediatra" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselPediatra" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </a>
            </div>
        </section>

        <!-- Nefrólogo -->
        <section id="nefrologo">
            <h2 class="textoP" >NEFRÓLOGO</h2>
            
            <div id="carouselNefrologo" class="carousel slide container" data-bs-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-bs-target="#carouselNefrologo" data-bs-slide-to="0" class="active"></li>
                    <li data-bs-target="#carouselNefrologo" data-bs-slide-to="1"></li>
                    <li data-bs-target="#carouselNefrologo" data-bs-slide-to="2"></li>
                    <!-- Agrega más indicadores según sea necesario -->
                </ol>
        
                <!-- Slides -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="image">
                                            <img src="imágenes/medico4.jpg" alt="cardiologo">
                                        </div>
                                        <div class="name-profession">
                                            <span class="name">Dr. Alejandro Pérez</span>
                                            <span class="profession">Radiólogo</span>
                                        </div>
                                        <div class="button">
                                            <button class="sobreMi">Sobre Mi</button>
                                            <button class="agendar">Agendar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="image">
                                            <img src="imágenes/medico5.jpg" alt="cardiologo">
                                        </div>
                
                                        <div class="name-profession">
                                            <span class="name">Dra. María González</span>
                                            <span class="profession">Radióloga</span>
                                        </div>
                
                                        <div class="button">
                                            <button class="sobreMi">Sobre Mi</button>
                                            <button class="agendar">Agendar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="image">
                                            <img src="imágenes/medico1.webp" alt="cardiologo">
                                        </div>
                
                                        <div class="name-profession">
                                            <span class="name">Dr. David Rodríguez</span>
                                            <span class="profession">Radiólogo</span>
                                        </div>
                
                                        <div class="button">
                                            <button class="sobreMi">Sobre Mi</button>
                                            <button class="agendar">Agendar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="image">
                                            <img src="imágenes/medico2.jpg" alt="cardiologo">
                                        </div>
                                        <div class="name-profession">
                                            <span class="name">Dr. Carlos Ramírez</span>
                                            <span class="profession">Radiólogo</span>
                                        </div>
                                        <div class="button">
                                            <button class="sobreMi">Sobre Mi</button>
                                            <button class="agendar">Agendar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="image">
                                            <img src="imágenes/medico6.jpg" alt="cardiologo">
                                        </div>
                
                                        <div class="name-profession">
                                            <span class="name">Dra. María Rodríguez</span>
                                            <span class="profession">Radióloga</span>
                                        </div>
                
                                        <div class="button">
                                            <button class="sobreMi">Sobre Mi</button>
                                            <button class="agendar">Agendar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="image">
                                            <img src="imágenes/medico7.jpg" alt="cardiologo">
                                        </div>
                
                                        <div class="name-profession">
                                            <span class="name">Dr. Manuel Fernández</span>
                                            <span class="profession">Radiólogo</span>
                                        </div>
                
                                        <div class="button">
                                            <button class="sobreMi">Sobre Mi</button>
                                            <button class="agendar">Agendar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="image">
                                            <img src="imágenes/medico9.jpg" alt="cardiologo">
                                        </div>
                
                                        <div class="name-profession">
                                            <span class="name">Dr. Alejandro Silva</span>
                                            <span class="profession">Radiólogo</span>
                                        </div>
                
                                        <div class="button">
                                            <button class="sobreMi">Sobre Mi</button>
                                            <button class="agendar">Agendar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="image">
                                            <img src="imágenes/medico8.jpg" alt="cardiologo">
                                        </div>
                
                                        <div class="name-profession">
                                            <span class="name">Dra. Patricia Ramos</span>
                                            <span class="profession">Radióloga</span>
                                        </div>
                
                                        <div class="button">
                                            <button class="sobreMi">Sobre Mi</button>
                                            <button class="agendar">Agendar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="image">
                                            <img src="imágenes/medico10.jpg" alt="cardiologo">
                                        </div>
                
                                        <div class="name-profession">
                                            <span class="name">Dr. Hector Gómez</span>
                                            <span class="profession">Radiólogo</span>
                                        </div>
                
                                        <div class="button">
                                            <button class="sobreMi">Sobre Mi</button>
                                            <button class="agendar">Agendar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
        
                <!-- prev y next -->
                <a class="carousel-control-prev" href="#carouselNefrologo" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselNefrologo" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </a>
            </div>
        </section>

        <!-- Neumólogo -->
        <section id="neumologo">
            <h2 class="textoP" >NEUMÓLOGO</h2>
            
            <div id="carouselNeumologo" class="carousel slide container" data-bs-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-bs-target="#carouselNeumologo" data-bs-slide-to="0" class="active"></li>
                    <li data-bs-target="#carouselNeumologo" data-bs-slide-to="1"></li>
                    <li data-bs-target="#carouselNeumologo" data-bs-slide-to="2"></li>
                    <!-- Agrega más indicadores según sea necesario -->
                </ol>
        
                <!-- Slides -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="image">
                                            <img src="imágenes/medico4.jpg" alt="cardiologo">
                                        </div>
                                        <div class="name-profession">
                                            <span class="name">Dr. Alejandro Pérez</span>
                                            <span class="profession">Radiólogo</span>
                                        </div>
                                        <div class="button">
                                            <button class="sobreMi">Sobre Mi</button>
                                            <button class="agendar">Agendar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="image">
                                            <img src="imágenes/medico5.jpg" alt="cardiologo">
                                        </div>
                
                                        <div class="name-profession">
                                            <span class="name">Dra. María González</span>
                                            <span class="profession">Radióloga</span>
                                        </div>
                
                                        <div class="button">
                                            <button class="sobreMi">Sobre Mi</button>
                                            <button class="agendar">Agendar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="image">
                                            <img src="imágenes/medico1.webp" alt="cardiologo">
                                        </div>
                
                                        <div class="name-profession">
                                            <span class="name">Dr. David Rodríguez</span>
                                            <span class="profession">Radiólogo</span>
                                        </div>
                
                                        <div class="button">
                                            <button class="sobreMi">Sobre Mi</button>
                                            <button class="agendar">Agendar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="image">
                                            <img src="imágenes/medico2.jpg" alt="cardiologo">
                                        </div>
                                        <div class="name-profession">
                                            <span class="name">Dr. Carlos Ramírez</span>
                                            <span class="profession">Radiólogo</span>
                                        </div>
                                        <div class="button">
                                            <button class="sobreMi">Sobre Mi</button>
                                            <button class="agendar">Agendar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="image">
                                            <img src="imágenes/medico6.jpg" alt="cardiologo">
                                        </div>
                
                                        <div class="name-profession">
                                            <span class="name">Dra. María Rodríguez</span>
                                            <span class="profession">Radióloga</span>
                                        </div>
                
                                        <div class="button">
                                            <button class="sobreMi">Sobre Mi</button>
                                            <button class="agendar">Agendar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="image">
                                            <img src="imágenes/medico7.jpg" alt="cardiologo">
                                        </div>
                
                                        <div class="name-profession">
                                            <span class="name">Dr. Manuel Fernández</span>
                                            <span class="profession">Radiólogo</span>
                                        </div>
                
                                        <div class="button">
                                            <button class="sobreMi">Sobre Mi</button>
                                            <button class="agendar">Agendar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="image">
                                            <img src="imágenes/medico9.jpg" alt="cardiologo">
                                        </div>
                
                                        <div class="name-profession">
                                            <span class="name">Dr. Alejandro Silva</span>
                                            <span class="profession">Radiólogo</span>
                                        </div>
                
                                        <div class="button">
                                            <button class="sobreMi">Sobre Mi</button>
                                            <button class="agendar">Agendar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="image">
                                            <img src="imágenes/medico8.jpg" alt="cardiologo">
                                        </div>
                
                                        <div class="name-profession">
                                            <span class="name">Dra. Patricia Ramos</span>
                                            <span class="profession">Radióloga</span>
                                        </div>
                
                                        <div class="button">
                                            <button class="sobreMi">Sobre Mi</button>
                                            <button class="agendar">Agendar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="image">
                                            <img src="imágenes/medico10.jpg" alt="cardiologo">
                                        </div>
                
                                        <div class="name-profession">
                                            <span class="name">Dr. Hector Gómez</span>
                                            <span class="profession">Radiólogo</span>
                                        </div>
                
                                        <div class="button">
                                            <button class="sobreMi">Sobre Mi</button>
                                            <button class="agendar">Agendar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
        
                <!-- prev y next -->
                <a class="carousel-control-prev" href="#carouselNeumologo" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselNeumologo" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </a>
            </div>
        </section>

        <!-- Oncólogo -->
        <section id="oncologo">
            <h2 class="textoP" >ONCÓLOGO</h2>
            
            <div id="carouselOncologo" class="carousel slide container" data-bs-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-bs-target="#carouselOncologo" data-bs-slide-to="0" class="active"></li>
                    <li data-bs-target="#carouselOncologo" data-bs-slide-to="1"></li>
                    <li data-bs-target="#carouselOncologo" data-bs-slide-to="2"></li>
                    <!-- Agrega más indicadores según sea necesario -->
                </ol>
        
                <!-- Slides -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="image">
                                            <img src="imágenes/medico4.jpg" alt="cardiologo">
                                        </div>
                                        <div class="name-profession">
                                            <span class="name">Dr. Alejandro Pérez</span>
                                            <span class="profession">Radiólogo</span>
                                        </div>
                                        <div class="button">
                                            <button class="sobreMi">Sobre Mi</button>
                                            <button class="agendar">Agendar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="image">
                                            <img src="imágenes/medico5.jpg" alt="cardiologo">
                                        </div>
                
                                        <div class="name-profession">
                                            <span class="name">Dra. María González</span>
                                            <span class="profession">Radióloga</span>
                                        </div>
                
                                        <div class="button">
                                            <button class="sobreMi">Sobre Mi</button>
                                            <button class="agendar">Agendar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="image">
                                            <img src="imágenes/medico1.webp" alt="cardiologo">
                                        </div>
                
                                        <div class="name-profession">
                                            <span class="name">Dr. David Rodríguez</span>
                                            <span class="profession">Radiólogo</span>
                                        </div>
                
                                        <div class="button">
                                            <button class="sobreMi">Sobre Mi</button>
                                            <button class="agendar">Agendar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="image">
                                            <img src="imágenes/medico2.jpg" alt="cardiologo">
                                        </div>
                                        <div class="name-profession">
                                            <span class="name">Dr. Carlos Ramírez</span>
                                            <span class="profession">Radiólogo</span>
                                        </div>
                                        <div class="button">
                                            <button class="sobreMi">Sobre Mi</button>
                                            <button class="agendar">Agendar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="image">
                                            <img src="imágenes/medico6.jpg" alt="cardiologo">
                                        </div>
                
                                        <div class="name-profession">
                                            <span class="name">Dra. María Rodríguez</span>
                                            <span class="profession">Radióloga</span>
                                        </div>
                
                                        <div class="button">
                                            <button class="sobreMi">Sobre Mi</button>
                                            <button class="agendar">Agendar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="image">
                                            <img src="imágenes/medico7.jpg" alt="cardiologo">
                                        </div>
                
                                        <div class="name-profession">
                                            <span class="name">Dr. Manuel Fernández</span>
                                            <span class="profession">Radiólogo</span>
                                        </div>
                
                                        <div class="button">
                                            <button class="sobreMi">Sobre Mi</button>
                                            <button class="agendar">Agendar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="image">
                                            <img src="imágenes/medico9.jpg" alt="cardiologo">
                                        </div>
                
                                        <div class="name-profession">
                                            <span class="name">Dr. Alejandro Silva</span>
                                            <span class="profession">Radiólogo</span>
                                        </div>
                
                                        <div class="button">
                                            <button class="sobreMi">Sobre Mi</button>
                                            <button class="agendar">Agendar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="image">
                                            <img src="imágenes/medico8.jpg" alt="cardiologo">
                                        </div>
                
                                        <div class="name-profession">
                                            <span class="name">Dra. Patricia Ramos</span>
                                            <span class="profession">Radióloga</span>
                                        </div>
                
                                        <div class="button">
                                            <button class="sobreMi">Sobre Mi</button>
                                            <button class="agendar">Agendar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="image">
                                            <img src="imágenes/medico10.jpg" alt="cardiologo">
                                        </div>
                
                                        <div class="name-profession">
                                            <span class="name">Dr. Hector Gómez</span>
                                            <span class="profession">Radiólogo</span>
                                        </div>
                
                                        <div class="button">
                                            <button class="sobreMi">Sobre Mi</button>
                                            <button class="agendar">Agendar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
        
                <!-- prev y next -->
                <a class="carousel-control-prev" href="#carouselOncologo" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselOncologo" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </a>
            </div>
        </section>

        <!-- Otorrinolaringólogos -->
        <section id="otorrinolaringologos">
            <h2 class="textoP" >OTORRINOLARINGÓLOGOS</h2>
            
            <div id="carouselOtorrinolaringologos" class="carousel slide container" data-bs-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-bs-target="#carouselOtorrinolaringologos" data-bs-slide-to="0" class="active"></li>
                    <li data-bs-target="#carouselOtorrinolaringologos" data-bs-slide-to="1"></li>
                    <li data-bs-target="#carouselOtorrinolaringologos" data-bs-slide-to="2"></li>
                    
                </ol>
        
                <!-- Slides -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="image">
                                            <img src="imágenes/medico4.jpg" alt="cardiologo">
                                        </div>
                                        <div class="name-profession">
                                            <span class="name">Dr. Alejandro Pérez</span>
                                            <span class="profession">Radiólogo</span>
                                        </div>
                                        <div class="button">
                                            <button class="sobreMi">Sobre Mi</button>
                                            <button class="agendar">Agendar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="image">
                                            <img src="imágenes/medico5.jpg" alt="cardiologo">
                                        </div>
                
                                        <div class="name-profession">
                                            <span class="name">Dra. María González</span>
                                            <span class="profession">Radióloga</span>
                                        </div>
                
                                        <div class="button">
                                            <button class="sobreMi">Sobre Mi</button>
                                            <button class="agendar">Agendar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="image">
                                            <img src="imágenes/medico1.webp" alt="cardiologo">
                                        </div>
                
                                        <div class="name-profession">
                                            <span class="name">Dr. David Rodríguez</span>
                                            <span class="profession">Radiólogo</span>
                                        </div>
                
                                        <div class="button">
                                            <button class="sobreMi">Sobre Mi</button>
                                            <button class="agendar">Agendar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="image">
                                            <img src="imágenes/medico2.jpg" alt="cardiologo">
                                        </div>
                                        <div class="name-profession">
                                            <span class="name">Dr. Carlos Ramírez</span>
                                            <span class="profession">Radiólogo</span>
                                        </div>
                                        <div class="button">
                                            <button class="sobreMi">Sobre Mi</button>
                                            <button class="agendar">Agendar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="image">
                                            <img src="imágenes/medico6.jpg" alt="cardiologo">
                                        </div>
                
                                        <div class="name-profession">
                                            <span class="name">Dra. María Rodríguez</span>
                                            <span class="profession">Radióloga</span>
                                        </div>
                
                                        <div class="button">
                                            <button class="sobreMi">Sobre Mi</button>
                                            <button class="agendar">Agendar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="image">
                                            <img src="imágenes/medico7.jpg" alt="cardiologo">
                                        </div>
                
                                        <div class="name-profession">
                                            <span class="name">Dr. Manuel Fernández</span>
                                            <span class="profession">Radiólogo</span>
                                        </div>
                
                                        <div class="button">
                                            <button class="sobreMi">Sobre Mi</button>
                                            <button class="agendar">Agendar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="image">
                                            <img src="imágenes/medico9.jpg" alt="cardiologo">
                                        </div>
                
                                        <div class="name-profession">
                                            <span class="name">Dr. Alejandro Silva</span>
                                            <span class="profession">Radiólogo</span>
                                        </div>
                
                                        <div class="button">
                                            <button class="sobreMi">Sobre Mi</button>
                                            <button class="agendar">Agendar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="image">
                                            <img src="imágenes/medico8.jpg" alt="cardiologo">
                                        </div>
                
                                        <div class="name-profession">
                                            <span class="name">Dra. Patricia Ramos</span>
                                            <span class="profession">Radióloga</span>
                                        </div>
                
                                        <div class="button">
                                            <button class="sobreMi">Sobre Mi</button>
                                            <button class="agendar">Agendar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="image">
                                            <img src="imágenes/medico10.jpg" alt="cardiologo">
                                        </div>
                
                                        <div class="name-profession">
                                            <span class="name">Dr. Hector Gómez</span>
                                            <span class="profession">Radiólogo</span>
                                        </div>
                
                                        <div class="button">
                                            <button class="sobreMi">Sobre Mi</button>
                                            <button class="agendar">Agendar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
        
                <!-- prev y next -->
                <a class="carousel-control-prev" href="#carouselOtorrinolaringologos" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselOtorrinolaringologos" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </a>
            </div>
        </section>

        <!-- TraumatologoOrtopedista -->
        <section id="traumatologoOrtopedista">
            <h2 class="textoP">TRAUMATÓLOGOS Y ORTOPEDISTAS</h2>
            
            <div id="carouselTraumatologoOrtopedista" class="carousel slide container" data-bs-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-bs-target="#carouselTraumatologoOrtopedista" data-bs-slide-to="0" class="active"></li>
                    <li data-bs-target="#carouselTraumatologoOrtopedista" data-bs-slide-to="1"></li>
                    <li data-bs-target="#carouselTraumatologoOrtopedista" data-bs-slide-to="2"></li>
                    <!-- Agrega más indicadores según sea necesario -->
                </ol>
        
                <!-- Slides -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="image">
                                            <img src="imágenes/medico4.jpg" alt="cardiologo">
                                        </div>
                                        <div class="name-profession">
                                            <span class="name">Dr. Alejandro Pérez</span>
                                            <span class="profession">Radiólogo</span>
                                        </div>
                                        <div class="button">
                                            <button class="sobreMi">Sobre Mi</button>
                                            <button class="agendar">Agendar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="image">
                                            <img src="imágenes/medico5.jpg" alt="cardiologo">
                                        </div>
                
                                        <div class="name-profession">
                                            <span class="name">Dra. María González</span>
                                            <span class="profession">Radióloga</span>
                                        </div>
                
                                        <div class="button">
                                            <button class="sobreMi">Sobre Mi</button>
                                            <button class="agendar">Agendar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="image">
                                            <img src="imágenes/medico1.webp" alt="cardiologo">
                                        </div>
                
                                        <div class="name-profession">
                                            <span class="name">Dr. David Rodríguez</span>
                                            <span class="profession">Radiólogo</span>
                                        </div>
                
                                        <div class="button">
                                            <button class="sobreMi">Sobre Mi</button>
                                            <button class="agendar">Agendar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="image">
                                            <img src="imágenes/medico2.jpg" alt="cardiologo">
                                        </div>
                                        <div class="name-profession">
                                            <span class="name">Dr. Carlos Ramírez</span>
                                            <span class="profession">Radiólogo</span>
                                        </div>
                                        <div class="button">
                                            <button class="sobreMi">Sobre Mi</button>
                                            <button class="agendar">Agendar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="image">
                                            <img src="imágenes/medico6.jpg" alt="cardiologo">
                                        </div>
                
                                        <div class="name-profession">
                                            <span class="name">Dra. María Rodríguez</span>
                                            <span class="profession">Radióloga</span>
                                        </div>
                
                                        <div class="button">
                                            <button class="sobreMi">Sobre Mi</button>
                                            <button class="agendar">Agendar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="image">
                                            <img src="imágenes/medico7.jpg" alt="cardiologo">
                                        </div>
                
                                        <div class="name-profession">
                                            <span class="name">Dr. Manuel Fernández</span>
                                            <span class="profession">Radiólogo</span>
                                        </div>
                
                                        <div class="button">
                                            <button class="sobreMi">Sobre Mi</button>
                                            <button class="agendar">Agendar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="image">
                                            <img src="imágenes/medico9.jpg" alt="cardiologo">
                                        </div>
                
                                        <div class="name-profession">
                                            <span class="name">Dr. Alejandro Silva</span>
                                            <span class="profession">Radiólogo</span>
                                        </div>
                
                                        <div class="button">
                                            <button class="sobreMi">Sobre Mi</button>
                                            <button class="agendar">Agendar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="image">
                                            <img src="imágenes/medico8.jpg" alt="cardiologo">
                                        </div>
                
                                        <div class="name-profession">
                                            <span class="name">Dra. Patricia Ramos</span>
                                            <span class="profession">Radióloga</span>
                                        </div>
                
                                        <div class="button">
                                            <button class="sobreMi">Sobre Mi</button>
                                            <button class="agendar">Agendar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="image">
                                            <img src="imágenes/medico10.jpg" alt="cardiologo">
                                        </div>
                
                                        <div class="name-profession">
                                            <span class="name">Dr. Hector Gómez</span>
                                            <span class="profession">Radiólogo</span>
                                        </div>
                
                                        <div class="button">
                                            <button class="sobreMi">Sobre Mi</button>
                                            <button class="agendar">Agendar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
        
                <!-- prev y next -->
                <a class="carousel-control-prev" href="#carouselTraumatologoOrtopedista" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselTraumatologoOrtopedista" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </a>
            </div>
        </section>

        <!-- Nutricionistas -->
        <section id="nutricionistas">
            <h2 class="textoP" >NUTRICIONISTAS</h2>
            
            <div id="carouselNutricionistas" class="carousel slide container" data-bs-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-bs-target="#carouselNutricionistas" data-bs-slide-to="0" class="active"></li>
                    <li data-bs-target="#carouselNutricionistas" data-bs-slide-to="1"></li>
                    <li data-bs-target="#carouselNutricionistas" data-bs-slide-to="2"></li>
                    <!-- Agrega más indicadores según sea necesario -->
                </ol>
        
                <!-- Slides -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="image">
                                            <img src="imágenes/medico4.jpg" alt="cardiologo">
                                        </div>
                                        <div class="name-profession">
                                            <span class="name">Dr. Alejandro Pérez</span>
                                            <span class="profession">Radiólogo</span>
                                        </div>
                                        <div class="button">
                                            <button class="sobreMi">Sobre Mi</button>
                                            <button class="agendar">Agendar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="image">
                                            <img src="imágenes/medico5.jpg" alt="cardiologo">
                                        </div>
                
                                        <div class="name-profession">
                                            <span class="name">Dra. María González</span>
                                            <span class="profession">Radióloga</span>
                                        </div>
                
                                        <div class="button">
                                            <button class="sobreMi">Sobre Mi</button>
                                            <button class="agendar">Agendar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="image">
                                            <img src="imágenes/medico1.webp" alt="cardiologo">
                                        </div>
                
                                        <div class="name-profession">
                                            <span class="name">Dr. David Rodríguez</span>
                                            <span class="profession">Radiólogo</span>
                                        </div>
                
                                        <div class="button">
                                            <button class="sobreMi">Sobre Mi</button>
                                            <button class="agendar">Agendar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="image">
                                            <img src="imágenes/medico2.jpg" alt="cardiologo">
                                        </div>
                                        <div class="name-profession">
                                            <span class="name">Dr. Carlos Ramírez</span>
                                            <span class="profession">Radiólogo</span>
                                        </div>
                                        <div class="button">
                                            <button class="sobreMi">Sobre Mi</button>
                                            <button class="agendar">Agendar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="image">
                                            <img src="imágenes/medico6.jpg" alt="cardiologo">
                                        </div>
                
                                        <div class="name-profession">
                                            <span class="name">Dra. María Rodríguez</span>
                                            <span class="profession">Radióloga</span>
                                        </div>
                
                                        <div class="button">
                                            <button class="sobreMi">Sobre Mi</button>
                                            <button class="agendar">Agendar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="image">
                                            <img src="imágenes/medico7.jpg" alt="cardiologo">
                                        </div>
                
                                        <div class="name-profession">
                                            <span class="name">Dr. Manuel Fernández</span>
                                            <span class="profession">Radiólogo</span>
                                        </div>
                
                                        <div class="button">
                                            <button class="sobreMi">Sobre Mi</button>
                                            <button class="agendar">Agendar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="image">
                                            <img src="imágenes/medico9.jpg" alt="cardiologo">
                                        </div>
                
                                        <div class="name-profession">
                                            <span class="name">Dr. Alejandro Silva</span>
                                            <span class="profession">Radiólogo</span>
                                        </div>
                
                                        <div class="button">
                                            <button class="sobreMi">Sobre Mi</button>
                                            <button class="agendar">Agendar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="image">
                                            <img src="imágenes/medico8.jpg" alt="cardiologo">
                                        </div>
                
                                        <div class="name-profession">
                                            <span class="name">Dra. Patricia Ramos</span>
                                            <span class="profession">Radióloga</span>
                                        </div>
                
                                        <div class="button">
                                            <button class="sobreMi">Sobre Mi</button>
                                            <button class="agendar">Agendar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="image">
                                            <img src="imágenes/medico10.jpg" alt="cardiologo">
                                        </div>
                
                                        <div class="name-profession">
                                            <span class="name">Dr. Hector Gómez</span>
                                            <span class="profession">Radiólogo</span>
                                        </div>
                
                                        <div class="button">
                                            <button class="sobreMi">Sobre Mi</button>
                                            <button class="agendar">Agendar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
        
                <!-- prev y next -->
                <a class="carousel-control-prev" href="#carouselNutricionistas" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselNutricionistas" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </a>
            </div>
        </section>

    <script src="js/bootstrap.js"></script>
    <script src="js/profesionales.js"></script>
</body>
</html>