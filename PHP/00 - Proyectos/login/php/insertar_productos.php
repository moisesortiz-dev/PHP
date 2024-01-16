<?php

// Función para agregar un nuevo producto
function agregarNuevoProducto($nombre, $descripcion, $precio) {
    global $conexion;

    // Ajusta la consulta para omitir la columna ID, ya que se generará automáticamente
    $stmt = $conexion->prepare("INSERT INTO productos (nombre, descripcion, precio) VALUES (?, ?, ?)");
    $stmt->bind_param("ssd", $nombre, $descripcion, $precio);

    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        $stmt->close();
        return true; // Éxito
    } else {
        $stmt->close();
        return false; // Error
    }
}

// Función para eliminar un producto
function eliminarProducto($idProducto) {
    global $conexion;

    $stmt = $conexion->prepare("DELETE FROM productos WHERE id = ?");
    $stmt->bind_param("i", $idProducto);

    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        $stmt->close();
        return true; // Éxito
    } else {
        $stmt->close();
        return false; // Error
    }
}

// Manejar el formulario para agregar nuevos productos
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['guardarNuevoProducto'])) {
    $nuevoNombre = $_POST["nuevoNombre"];
    $nuevaDescripcion = $_POST["nuevaDescripcion"];
    $nuevoPrecio = $_POST["nuevoPrecio"];

    if (agregarNuevoProducto($nuevoNombre, $nuevaDescripcion, $nuevoPrecio)) {
        // Redirigir a la página principal después de agregar el producto
        header("Location: administracion.php");
        exit();
    } else {
        echo "Error al agregar el producto.";
    }
}

// Manejar el formulario para eliminar productos
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['eliminarProducto'])) {
    $idProductoEliminar = $_POST['eliminarProducto'];

    if (eliminarProducto($idProductoEliminar)) {
        // Redirigir a la página principal después de eliminar el producto
        header("Location: administracion.php");
        exit();
    } else {
        echo "Error al eliminar el producto.";
    }
}
?>
