<?php
$fecha_1 = "2021/11/29";
$fecha_2 = "2021-11-30";

$numeros = "Uno Dos Tres Cuatro Cinco Seis Siete";

//explode(delimitador, string, limitador);

    $array_fecha = explode("/", $fecha_1);
    echo $array_fecha[0];
    echo "<br>";

//explode(delimitador, string, limitador);

    $array_fecha1 = explode("-", $fecha_2);
    echo $array_fecha1[1];
    echo "<br>";

//explode(delimitador, string, limitador) con espacio;

$array_numeros = explode(" ", $numeros);
echo $array_numeros[1];
?>