<?php
//Con el include si el archivo no existe manda un error pero sigue el proceso

include("index.php");
//include("inde.php"); este archivo no existe
include("index.php");

// Con include_once solo se requiere el archivo una unica vez, y se sigue ejecutando una vez comprobado

//Con requiere, no se sigue ejecutando el proceso

require("index.php");

// requiere_once solo lo comprueba una vez
?>