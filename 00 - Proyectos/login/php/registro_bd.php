<?php

// Comprobamos que se han recibido los datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtenemos los datos del formulario
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $clave = $_POST["clave"];

    // Verificamos si el checkbox está marcado o no
    $es_administrador = isset($_POST["es_administrador"]) ? 'si' : 'no';

    // Incluimos el archivo con la conexión a la base de datos
    include("config.php");

    // Verificamos si el correo ya existe en la base de datos
    $verificar_correo = $conn->prepare("SELECT correo FROM usuarios WHERE correo = ?");
    $verificar_correo->bind_param("s", $correo);
    $verificar_correo->execute();
    $verificar_correo->store_result();

    if ($verificar_correo->num_rows > 0) {
        echo "Error al registrar: El correo ya está registrado.";
    } else {
        // Evitamos la inyección SQL utilizando consultas preparadas
        $stmt = $conn->prepare("INSERT INTO usuarios (nombre, correo, contraseña, administrador) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $nombre, $correo, password_hash($clave, PASSWORD_DEFAULT), $es_administrador);

        // Ejecutamos la sentencia preparada
        if ($stmt->execute()) {
            echo "Registro exitoso";
            header("Location: ../html/login.php");
            exit();
        } else {
            echo "Error al registrar: " . $stmt->error;
        }
    }

    // Cerramos la conexión a la base de datos
    $stmt->close();
    $verificar_correo->close();
    $conn->close();
}

?>