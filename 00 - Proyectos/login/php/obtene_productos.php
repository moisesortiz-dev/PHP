<?php

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