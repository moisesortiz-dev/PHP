<?php

   $ordenadores = ["Acer Nitro", "Windows 11", "AMD Ryzen 5 4600H", "SSD 256GB", "RAM 24HB"];

   $frutas = [
    "Fresas" => 100,
    "Peras" => 30,
    "Sandias" => 10,
    "Melocotones" => 17,
    "Manzanas" => 9
   ];

    //Recorrerr array solo con valor
   foreach($ordenadores as $valor){
    echo $valor."<br>";
   }

    //Recorrerr array solo con clave y valor
   foreach($frutas as $clave => $valores){
    echo $clave." - ".$valores."<br>";
   }
   

?>