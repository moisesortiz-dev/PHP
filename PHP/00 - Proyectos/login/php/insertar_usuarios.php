<?php
//agregar usuarios desde la web a la base de datos
function agregarNuevoUsuario($nombre, $correo, $administrador) {
    global $conexion;

    // Preparar la consulta
    $stmt = $conexion->prepare("INSERT INTO usuarios (nombre, correo, administrador) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $nombre, $correo, $administrador);

    // Ejecutar la consulta
    $stmt->execute();

    // Verificar si la inserción fue exitosa
    if ($stmt->affected_rows > 0) {
        $stmt->close();
        return true; 
    } else {
        $stmt->close();
        return false; 
    }
}

// Manejar el formulario para agregar nuevos usuarios
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['guardarNuevoUsuario'])) {
    $nombre = filter_var($_POST["nombre"], FILTER_SANITIZE_STRING);
    $correo = filter_var($_POST["correo"], FILTER_SANITIZE_EMAIL);
    $administrador = filter_var($_POST["administrador"], FILTER_SANITIZE_STRING);

    if (agregarNuevoUsuario($nombre, $correo, $administrador)) {
        header("Location: administracion.php"); // Redireccionar a la página principal después de agregar el usuario
        exit();
    } else {
        echo "Error al agregar usuario.";
    }
}


// eliminar usuarios desde la web en la base de datos

// Función para eliminar un usuario por su ID
function eliminarUsuario($id) {
    global $conexion;

    $stmt = $conexion->prepare("DELETE FROM usuarios WHERE id = ?");
    $stmt->bind_param("i", $id);

    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        $stmt->close();
        return true; // Éxito
    } else {
        $stmt->close();
        return false; // Error
    }
}

// Manejar el formulario para eliminar usuarios
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['eliminarUsuario'])) {
    $idUsuario = $_POST["eliminarUsuario"];

    if (eliminarUsuario($idUsuario)) {
        // Redirigir a la página principal después de eliminar el usuario
        header("Location: administracion.php");
        exit();
    } else {
        echo "Error al eliminar usuario.";
    }
}

?>