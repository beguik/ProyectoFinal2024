<?php
$conexion = new mysqli("localhost", "root", "", "calendar");


if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

$sql = "SELECT * FROM eventos";
$resultado = $conexion->query($sql);
$events = [];

if ($resultado->num_rows > 0) {
    while ($fila = $resultado->fetch_assoc()) {
        $event = [
            'title' => $fila['titulo'],
            'start' => $fila['fecha'],
            'descripcion' => $fila['descripcion'],
        ];
        $events[] = $event;
    }
}

$conexion->close();
header('Content-Type: application/json');
echo json_encode($events);
?>
