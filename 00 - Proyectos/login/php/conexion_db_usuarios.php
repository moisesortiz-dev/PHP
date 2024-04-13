<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registro_usuarios";

// Conexión a la base de datos usando mysqli
$conexion = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Obtener información de todos los usuarios usando mysqli
$consultaUsuarios = "SELECT * FROM usuarios";
$resultadoUsuarios = $conexion->query($consultaUsuarios);

// Verificar si la consulta fue exitosa
if ($resultadoUsuarios) {
    // Obtener los resultados como un array asociativo
    $usuarios = $resultadoUsuarios->fetch_all(MYSQLI_ASSOC);
} else {
    // Manejar el error si la consulta falla
    die("Error al ejecutar la consulta: " . $conexion->error);
}
?>