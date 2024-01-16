<?php
session_start();

// Cerrar sesión al hacer clic en el botón
if (isset($_POST['logout'])) {
    session_destroy(); 
    header("Location: login.php"); 
    exit();
}