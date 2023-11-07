<?php
include("citas-medicas/includes/db.php");
?>


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
<style>
  .fc .fc-col-header-cell-cushion {
    text-decoration: none;
  }

  .fc .fc-daygrid-day-number {

    color: black;
    text-decoration: none;
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

<?php
include('reservas/parte.php');
?>






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
              <button class="btn btn-success" id="btn_h5" data-bs-dismiss="modal" type="button">08:00 - 08:20</button>
              <button class="btn btn-success" id="btn_h6" data-bs-dismiss="modal" type="button">08:20 - 08:40</button>
              <button class="btn btn-success" id="btn_h7" data-bs-dismiss="modal" type="button">08:40 - 09:00</button>
              <button class="btn btn-success" id="btn_h8" data-bs-dismiss="modal" type="button">09:00 - 09:20</button>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary">Guardar cambios</button>
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
          <form action="">
            <div class="row">
              <div class="col-md-6">
                <label for="">Nombre</label>
                <input type="text" class="form-control">
              </div>
              <div class="col-md-6">
                <label for="">Tipo de servicio</label>
                <select name="" id="" class="form-control">
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
              </div>
              <div class="col-md-6">
                <label for="">Hora de la cita</label>
                <input type="text" class="form-control" id="hora_cita" disabled>
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary">Guardar cambios</button>
      </div>
    </div>
  </div>
</div>

<!-- segundo modal según el horario -->
<script>
  $('#btn_h1').click(function(){
    $('#modal_formulario').modal("show");
    $('#fecha_cita').val(a);
    var h1 = "08:00 - 08:20";
    $('#hora_cita').val(h1);
  });
</script>


