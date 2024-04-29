$(document).ready(function() {
    $('#calendar').fullCalendar({
      events: 'datoseventos.php', // Archivo PHP que proporciona los eventos desde la base de datos
      eventClick: function(event) {
        alert('Evento: ' + event.title + '\nFecha: ' + moment(event.start).format('YYYY-MM-DD') + '\nDescripción: ' + event.descripcion);
      }
    });
  });