<?php

//datos de la base de datos

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registro_usuarios";


//Crea la conexion

$conn = new mysqli($servername, $username, $password, $dbname);


//verificamos la conexion

if($conn->connect_error){
    die("La conexion a la base de datos fallo: ") . $conn->connect_error;
}
?>