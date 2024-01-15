<?php
// Iniciamos la sesión
session_start();

// Incluimos la conexión a la base de datos
include("../php/config.php");

// Obtenemos los datos del formulario
$email = $_POST["email"];
$clave = $_POST["claveCorreo"]; // Asegúrate de que coincida con el nombre del campo en tu formulario

// Verificamos si el usuario logeado existe en la base de datos
$sql = "SELECT * FROM usuarios WHERE correo = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    // Verificamos la contraseña utilizando password_verify
    if (password_verify($clave, $row['contraseña']) && $row['administrador'] == 'si') {
        // Contraseña y administrador válidos, establecemos variables de sesión y redirigimos
        $_SESSION['usuario_registrado'] = true;
        $_SESSION['es_administrador'] = true;
        header("Location: ../html/user_login_admin.php");
        exit();
    } else {
        // Contraseña incorrecta o no es administrador, redirigir a user_login.php con mensaje de error
        $_SESSION['error_login'] = "Contraseña incorrecta o no es administrador";
        header("Location: ../html/user_login.php");
        exit();
    }
} else {
    // Usuario no encontrado, establecemos mensaje de error y redirigimos al login
    $_SESSION['error_login'] = "Usuario no registrado";
    header("Location: ../html/login.php");
    exit();
}

// Cerramos la conexión a la base de datos
$stmt->close();
$conn->close();
?>