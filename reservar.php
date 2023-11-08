<?php
include('reservas/parte.php');
include("php/conexion_be.php");

?>


<!-- Puedes mostrar más información del usuario aquí -->

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />


  <link rel="stylesheet" href="css/all.css" />
  <link rel="stylesheet" href="css/bootstrap.css"/>
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
              $('#modal_reservas').modal("show");
              $('#dia_de_la_semana').html(dias[numeroDia] + " " + a);
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
<div class="modal fade" id="modal_reservas" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalLabel">Reserva tu cita para el día <span id="dia_de_la_semana"></span></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
      </div>
      <div class="modal-body">
        <div class="row">
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
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar cita</button>

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
                <input type="text" class="form-control" value="<?php echo $nombre_completo;?>" disabled>
              </div>
              <div class="col-md-6">
                <label for="">email usuario</label>
                <input type="text" class="form-control" value="<?php echo $email;?>" disabled>
                <input type="text" name="id_usuario" value="<?php echo $id;?>" hidden>
              </div>
              <div class="col-md-6">
                <label for="">Nombre Medico</label>
                <input type="text" name="nombre_medico" class="form-control">
              </div>
              <div class="col-md-6">
                <label for="">Tipo de servicio</label>
                <select name="tipo_especialista" id="" class="form-control">
                  <option value="PEDIATRIA">PEDIATRÍA</option>
                  <option value="TRAUMATOLOGIA">TRAUMATOLOGÍA</option>
                  <option value="CARDIOLOGIA">CARDIOLOGÍA</option>
                </select>
              </div>
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