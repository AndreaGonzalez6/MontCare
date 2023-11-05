<?php
include("citas-medicas/includes/db.php");
?>


<script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.9/index.global.min.js'></script>
<script>
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
        var a = info.dateStr;
        const fechaComoCadena = a;
        var numeroDia = new Date(fechaComoCadena).getDay();

        if((numeroDia == "6")){
          alert("No hay atención el día domingo");
        }else{
          $('#modal_reservas').modal("show");
        }
      },
    });
    calendar.render();
  });
  
</script>
<style>
  a {
    color: rgba(var(--bs-link-color-rgb), var(--bs-link-opacity, 1));
    text-decoration: none;
    color: black;
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
    margin: 80px;
  }
</style>
<div id='calendar'></div>

<?php
include ('reservas/parte.php');
?>


    

    <!-- Botón para abrir el modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal_reservas">
        Abrir Modal
    </button>

    <!-- Modal -->
    <div class="modal fade" id="modal_reservas" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalLabel">Título del Modal</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                </div>
                <div class="modal-body">
                    <!-- Contenido del modal -->
                    <p>Este es el contenido del modal.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-primary">Guardar cambios</button>
                </div>
            </div>
        </div>
    </div>



