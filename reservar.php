<?php
include('reservas/parte.php');
include('reservas/mensaje.php');
include("php/conexion_be.php");
?>


<!-- Puedes mostrar más información del usuario aquí -->

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />


  <link rel="stylesheet" href="css/all.css" />
  <link rel="stylesheet" href="css/bootstrap.css" />
  <link rel="preload" href="css/normalize.css" as="style"> <!--Para cargar la hoja de estilos más rápido -->
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,1,0" />
  <link rel="shortcut icon" href="imágenes/loguito.png" type="image/x-icon" />
  <title>Centro Hospitalario MontCare</title>
  <link rel="preload" href="css/estilos.css" as="style">
  <link rel="stylesheet" href="css/estilos.css" />
  <!-- Boxicons CSS -->
  <link flex href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="css/style.css" />

</head>
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
              <a href="#" class="link flex">
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
        </div>

        <div class="sidebar_profile flex">
          <?php
          if ($usuario_sesion == "") {
            //echo "sin";
          ?>
            <div class="data_text">
              <a href="http://localhost/MontCare/" class="ms-lg-3">
                <p style="color: #000000"><i class="fa-solid fa-user" style="color: #000000"></i>ingresar </p>
              </a>
            </div>
          <?php
          } else {
            //echo "Ya";
          }
          ?>
          <div class="data_text">
            <a href="http://localhost/MontCare/" class="ms-lg-3">
              <p style="color: #000000"><i class="fa-solid fa-user" style="color: #000000"></i>Bienvenid@ <?php echo $usuario_sesion; ?> </p>
            </a>
          </div>

        </div>
      </div>
    </nav>
  </aside>
  <main class="content">
    <!-- Contenido principal -->
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.9/index.global.min.js'></script>
    <script>
      var a;
      document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
          initialView: 'multiMonthYear',
          locale: 'es',
          editable: true,
          selectable: true,
          allDaySlot: false,
          events: 'reservas/cargar_reservas.php',
          dateClick: function(info) {
            a = info.dateStr;
            const fechaComoCadena = a;
            var numeroDia = new Date(fechaComoCadena).getDay();
            var dias = ['LUNES', 'MARTES', 'MIÉRCOLES', 'JUEVES', 'VIERNES'];
            if ((numeroDia == "6")) {
              alert("No hay atención el día domingo");
            } else {
              var anio = new Date().getFullYear();
              var mes = new Date().getMonth() + 1;
              var dia = new Date().getDate();
              var hoy = anio + "-" + mes + "-" + dia;

              if (hoy <= a) {
                $('#modal_reservas').modal("show");
                $('#dia_de_la_semana').html(dias[numeroDia] + " " + a);

                var fecha = info.dateStr;
                var res = "";
                var url = "reservas/verificar_horario.php";
                $.get(url, {
                  fecha: fecha
                }, function(datos) {
                  //alert("entro");
                  res = datos;
                  $('#respuesta_horario').html(res);
                });
              } else {
                alert("No se pueden reservar días pasados")
              }

            }
          },
        });
        calendar.render();
      });
    </script>
  </main>
</div>


<style>
  .fc .fc-col-header-cell-cushion {
    text-decoration: none;
  }

  .fc .fc-daygrid-day-number {

    color: black;
    text-decoration: none;
  }

  .fc .fc-view-harness-active>.fc-view {
    inset: 0px;
    position: absolute;
    margin-left: 200px;
  }

  .fc .fc-multimonth-title {
    font-size: 1.2em;
    font-weight: 700;
    padding: 1em 0px;
    text-align: center;
    background-color: rgb(206, 206, 206);
    margin-top: 30px;
  }

  #calendar {
    margin: 60px;
  }
</style>
<div id='calendar'></div>







<!-- Modal -->
<div class="modal fade" id="modal_reservas" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <div class="modal-body">
        <center>
          <h2>Reserva tu cita</h2>
        </center>
        <hr>
        <div class="row">
          <div id="respuesta_horario"></div>
          <div class="col-md-6">
            <center><b>Turno Mañana</b></center>
            <br>
            <div class="d-grid gap-2">
              <button class="btn btn-success" id="btn_h1" data-bs-dismiss="modal" type="button">08:00 - 08:20</button>
              <button class="btn btn-success" id="btn_h2" data-bs-dismiss="modal" type="button">08:20 - 08:40</button>
              <button class="btn btn-success" id="btn_h3" data-bs-dismiss="modal" type="button">08:40 - 09:00</button>
              <button class="btn btn-success" id="btn_h4" data-bs-dismiss="modal" type="button">09:00 - 09:20</button>
            </div>
          </div>
          <div class="col-md-6">
            <center><b>Turno Tarde</b></center>
            <br>
            <div class="d-grid gap-2">
              <button class="btn btn-success" id="btn_h5" data-bs-dismiss="modal" type="button">13:00 - 13:20</button>
              <button class="btn btn-success" id="btn_h6" data-bs-dismiss="modal" type="button">13:20 - 13:40</button>
              <button class="btn btn-success" id="btn_h7" data-bs-dismiss="modal" type="button">13:40 - 14:00</button>
              <button class="btn btn-success" id="btn_h8" data-bs-dismiss="modal" type="button">14:00 - 14:20</button>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <a href="" class="btn btn-primary">
          Escoger otra fecha
        </a>
      </div>
    </div>
  </div>
</div>






<div class="modal fade" id="modal_formulario" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalLabel">Reserva tu cita para el día <span id="dia_de_la_semana"></span></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
      </div>
      <div class="modal-body">
        <div class="row">
          <form action="http://localhost/MontCare/reservas/controller_citas.php" method="post">
            <div class="row">
              <div class="col-md-6">
                <label for="">Nombre usuario</label>
                <input type="text" class="form-control" value="<?php echo $nombre_completo; ?>" disabled>
              </div>
              <div class="col-md-6">
                <label for="">email usuario</label>
                <input type="text" class="form-control" value="<?php echo $email; ?>" disabled>
                
              </div>
              <div class="col-md-6">
                
                <input type="text" name="id_usuario" value="<?php echo $id; ?>" hidden>
              </div>
              <div class="col-md-6 mt-4 mb-3">
                <label for="">Cómo quiere la cita</label>
                <select name="cita" id="cita">
                  <option value="Presencial">Presencial</option>
                  <option value="Chat">Chat</option>
                  <option value="Videollamada">Videollamada</option>

                </select>
              </div>
              
              <?php
              include("php/conexion_be.php");

              // Obtener todas las especialidades
              $sql_especialidades = "SELECT DISTINCT id_especialidad FROM doctor";
              $result_especialidades = $conexion->query($sql_especialidades);

              $especialidades = array();

              if ($result_especialidades->num_rows > 0) {
                while ($row_especialidad = $result_especialidades->fetch_assoc()) {
                  $especialidades[] = $row_especialidad['id_especialidad'];
                }
              }
              ?>

              <div class="col-md-6">
                <label for="">Tipo de especialista</label>
                <select name="tipo_especialista" id="tipo_especialista" class="form-control">
                  <option value=""></option>

                  <?php
                  foreach ($especialidades as $id_especialidad) {
                    echo '<option value="' . $id_especialidad . '">' . $id_especialidad . '</option>';
                  }
                  ?>

                </select>
              </div>

              <div class="col-md-6">
                <label for="">Nombre Medico</label>
                <select name="nombre_medico" id="nombre_medico" class="form-control">
                  <option value=""></option>
                </select>
              </div>

              <script>
                document.getElementById('tipo_especialista').addEventListener('change', function() {
                  var selectedEspecialista = this.value;

                  // Realizar una petición AJAX para obtener los médicos con la especialidad seleccionada
                  var medicoN = new XMLHttpRequest();
                  medicoN.onreadystatechange = function() {
                    if (medicoN.readyState == 4 && medicoN.status == 200) {
                      var medicos = JSON.parse(medicoN.responseText);
                      actualizarDropdownMedicos(medicos);
                    }
                  };
                  medicoN.open("GET", "obtener_medicos.php?id_especialidad=" + selectedEspecialista, true);
                  medicoN.send();
                });

                function actualizarDropdownMedicos(medicos) {
                  var dropdownMedicos = document.getElementById('nombre_medico');
                  dropdownMedicos.innerHTML = '<option value=""></option>';

                  for (var i = 0; i < medicos.length; i++) {
                    dropdownMedicos.innerHTML += '<option value="' + medicos[i].id + '">' + medicos[i].nombres + '</option>';
                  }
                }
              </script>


            </div>
            <br>
            <div class="row">
              <div class="col-md-6">
                <label for="">Fecha de la cita</label>
                <input type="text" class="form-control" id="fecha_cita" disabled>
                <input type="text" name="fecha_cita" class="form-control" id="fecha_cita2" hidden>
              </div>
              <div class="col-md-6">
                <label for="">Hora de la cita</label>
                <input type="text" class="form-control" id="hora_cita" disabled>
                <input type="text" name="hora_cita" class="form-control" id="hora_cita2" hidden>
              </div>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar Cita</button>
        <button type="submit" class="btn btn-primary">Registrar Cita</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- segundo modal según el horario -->
<script>
  $('#btn_h1').click(function() {
    $('#modal_formulario').modal("show");
    $('#fecha_cita').val(a);
    $('#fecha_cita2').val(a);
    var h1 = "08:00 - 08:20";
    $('#hora_cita').val(h1);
    $('#hora_cita2').val(h1);
  });

  $('#btn_h2').click(function() {
    $('#modal_formulario').modal("show");
    $('#fecha_cita').val(a);
    $('#fecha_cita2').val(a);
    var h2 = "08:20 - 08:40";
    $('#hora_cita').val(h2);
    $('#hora_cita2').val(h2);
  });

  $('#btn_h3').click(function() {
    $('#modal_formulario').modal("show");
    $('#fecha_cita').val(a);
    $('#fecha_cita2').val(a);
    var h3 = "08:40 - 09:00";
    $('#hora_cita').val(h3);
    $('#hora_cita2').val(h3);
  });

  $('#btn_h4').click(function() {
    $('#modal_formulario').modal("show");
    $('#fecha_cita').val(a);
    $('#fecha_cita2').val(a);
    var h4 = "09:00 - 09:20";
    $('#hora_cita').val(h4);
    $('#hora_cita2').val(h4);
  });

  $('#btn_h5').click(function() {
    $('#modal_formulario').modal("show");
    $('#fecha_cita').val(a);
    $('#fecha_cita2').val(a);
    var h5 = "13:00 - 13:20";
    $('#hora_cita').val(h5);
    $('#hora_cita2').val(h5);
  });

  $('#btn_h6').click(function() {
    $('#modal_formulario').modal("show");
    $('#fecha_cita').val(a);
    $('#fecha_cita2').val(a);
    var h6 = "13:20 - 13:40";
    $('#hora_cita').val(h6);
    $('#hora_cita2').val(h6);
  });

  $('#btn_h7').click(function() {
    $('#modal_formulario').modal("show");
    $('#fecha_cita').val(a);
    $('#fecha_cita2').val(a);
    var h7 = "13:40 - 14:00";
    $('#hora_cita').val(h7);
    $('#hora_cita2').val(h7);
  });

  $('#btn_h8').click(function() {
    $('#modal_formulario').modal("show");
    $('#fecha_cita').val(a);
    $('#fecha_cita2').val(a);
    var h8 = "14:00 - 14:20";
    $('#hora_cita').val(h8);
    $('#hora_cita2').val(h8);
  });
</script>