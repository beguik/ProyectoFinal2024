<?php
/* function generarCalendario($month, $year) {
    // Obtener el primer día del mes
    $firstDayOfMonth = new DateTime("$year-$month-01");
    // Obtener el último día del mes
    $lastDayOfMonth = new DateTime("$year-$month-" . $firstDayOfMonth->format('t'));
    
    // Generar el HTML del calendario
    $calendar = '<table>';
    $calendar .= '<tr><th>L</th><th>M</th><th>X</th><th>J</th><th>V</th><th>S</th><th>D</th></tr>';
    
    $currentDate = clone $firstDayOfMonth;
    $calendar .= '<tr>';
    while ($currentDate <= $lastDayOfMonth) {
        // Agregar enlace a cada día para enviar la fecha seleccionada al mismo script
        $calendar .= '<td><a href="festividades.php?day=' . $currentDate->format('Y-m-d') . '">' . $currentDate->format('j') . '</a></td>';
        if ($currentDate->format('w') == 0) {
            $calendar .= '</tr><tr>';
        }
        $currentDate->modify('+1 day');
    }
    $calendar .= '</tr>';
    $calendar .= '</table>';
    
    return $calendar;
}

// Mostrar el calendario para febrero de 2022 (puedes cambiar el mes y el anio según necesites)
echo generarCalendario(2, 2022);

// Procesar la selección de un día
if (isset($_GET['day'])) {
    $selectedDay = new DateTime($_GET['day']);
    
    // Procesar $selectedDay para obtener información relevante de la base de datos
    // Por ejemplo, realizar una consulta SQL para buscar los eventos asociados a $selectedDay
    // Aquí solo se muestra la fecha seleccionada
    echo '<p>Información para el día seleccionado: ' . $selectedDay->format('Y-m-d') . '</p>';
} */


$mes = intval($_GET['mes']); // Sanitizar entrada convirtiendo a entero
$anio = intval($_GET['anio']);

// Establecer conexión con la base de datos (reemplaza los valores según tu configuración)
$conexion = new mysqli('localhost', 'root', '', 'proyectofinal');

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Preparar consulta SQL (usamos una sentencia preparada para evitar inyección SQL)
$sql = "SELECT * FROM eventos WHERE MONTH(fecha) = ? AND YEAR(fecha) = ?";
$consulta = $conexion->prepare($sql);
$consulta->bind_param("ii", $mes, $anio); // "ii" indica que esperamos dos valores enteros

// Ejecutar consulta
$consulta->execute();
$resultado = $consulta->get_result();

// Generar el calendario HTML
$numeroDias = cal_days_in_month(CAL_GREGORIAN, $mes, $anio);
$primerDia = date('N', mktime(0, 0, 0, $mes, 1, $anio));

$calendarioHTML = '<table>';
$calendarioHTML .= '<tr><th>Lun</th><th>Mar</th><th>Mie</th><th>Jue</th><th>Vie</th><th>Sab</th><th>Dom</th></tr>';

$contador = 0;
$calendarioHTML .= '<tr>';

// Agregar celdas vacías para los días previos al primer día del mes
for ($i = 1; $i < $primerDia; $i++) {
    $calendarioHTML .= '<td></td>';
    $contador++;
}

// Iterar sobre los días del mes
for ($dia = 1; $dia <= $numeroDias; $dia++) {
    if ($contador % 7 == 0) {
        $calendarioHTML .= '</tr><tr>';
    }
    $calendarioHTML .= '<td>' . $dia;

    // Verificar si hay eventos para este día y mostrarlos
    while ($fila = $resultado->fetch_assoc()) {
        $fechaEvento = date('j', strtotime($fila['fecha']));
        if ($fechaEvento == $dia) {
            $calendarioHTML .= '<br>' . $fila['titulo']; // Muestra el título del evento
            // Puedes mostrar más información del evento si lo deseas
        }
    }
    
    $calendarioHTML .= '</td>';
    $contador++;
}

// Agregar celdas vacías para completar la última semana
while ($contador % 7 != 0) {
    $calendarioHTML .= '<td></td>';
    $contador++;
}

$calendarioHTML .= '</tr>';
$calendarioHTML .= '</table>';

echo $calendarioHTML;

// Cerrar conexión y liberar recursos
$consulta->close();
$conexion->close();

?>