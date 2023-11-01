<script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.9/index.global.min.js'></script>
<script>
  document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {
      initialView: 'multiMonthYear',
      locale: 'es',
      events: [{
        title: 'Citas', 
        start: '2023-11-01', 
        end: '2023-11-01', 
        color: 'green'
      }]
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
#calendar{
  margin: 80px;
}


    </style>
<div id='calendar'></div>