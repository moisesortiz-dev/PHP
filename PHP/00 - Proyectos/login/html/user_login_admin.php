<?php
session_start();

// Verifica si el usuario está logeado como administrador
if (!isset($_SESSION['es_administrador']) || $_SESSION['es_administrador'] !== true) {
    // Si no es administrador, redirige a la página de inicio de sesión
    header("Location: login.php");
    exit();
}

// Cerrar sesión al hacer clic en el botón
if (isset($_POST['logout'])) {
    session_destroy(); // Cierra la sesión
    header("Location: login.php"); // Redirige a la página de inicio de sesión
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estás como administrador</title>
</head>
<body>
    <h1>Estás logeado, Como administrador</h1>
    
    <!-- Botón para cerrar sesión -->
    <form method="post">
        <button type="submit" name="logout">Cerrar Sesión</button>
    </form>
</body>
</html>