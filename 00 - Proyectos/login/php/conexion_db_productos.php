<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registro_usuarios";

// Conexión a la base de datos
$conexion = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Obtener información de todos los productos
$consulta = $conexion->query("SELECT id, nombre, descripcion, precio FROM productos");

if ($consulta->num_rows > 0) {
    // Crear un array asociativo con los productos
    $productos = [];
    while ($producto = $consulta->fetch_assoc()) {
        $productos[] = $producto;
    }
} else {
    echo "No se encontraron productos";
}

?>