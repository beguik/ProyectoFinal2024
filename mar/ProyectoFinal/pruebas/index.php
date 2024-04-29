<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Event Calendar</title>
    <link href="style.css" rel="stylesheet" type="text/css">
    <link href="calendar.css" rel="stylesheet" type="text/css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/5.10.1/main.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                events: 'datoseventos.php', 
                eventClick: function(info) {
                    $('#eventInfo').html('<h2>' + info.event.title + '</h2><p>' + info.event.extendedProps.descripcion + '</p>');
                    $('#eventInfo').show();
                }
            });

            calendar.render();
        });
    </script>
</head>
<body>
<nav class="menu">
    <div>
        <h1>Event Calendar</h1>
    </div>
</nav>
<div class="content home">
    <div class="calendar-container-small" id="calendar-container">
        <div id="calendar"></div>
        <div id="eventInfo" style="display: none;"></div> <!-- Div para mostrar la información del evento, oculto inicialmente -->
    </div>
</div>
</body>
</html>

</body>
<script href="fullcalendar-6.1.11/packages/google-calendar/index.global.min.js"></script>
<script src="fullcalendar-6.1.11/packages/core/index.global.min.js"></script>
<script src="fullcalendar-6.1.11/packages/interaction/index.global.min.js"></script>
<script src="fullcalendar-6.1.11/packages/daygrid/index.global.min.js"></script>
<script src="fullcalendar-6.1.11/packages/timegrid/index.global.min.js"></script>
<script src="fullcalendar-6.1.11/packages/list/index.global.min.js"></script>

</html>
