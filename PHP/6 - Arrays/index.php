<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>
    
</body>
</html>
<?php

    #Escalares - Se acceden al elemento a traves de un indice

        $estudiantes = array ("Carlos", "Moises", "Miriam", "Adrian");

    #Tambien se puede poner con corchetes, opcion mejor

        $estudiantes = ["Carlos", "Moises", "Miriam", "Adrian"];


        //echo $estudiantes[3];

    // Para modificar el valor de un array

        $estudiantes[3] = "Pepe";
       // echo $estudiantes[3];

    #---------------------------------------------------------------------------------------------------------

    # Asociativos - Se utiliza con clave - valor

    $tutor = [
            "Nombre" => "Carlos",
            "Apellido" => "Ortiz",
            "Edad" => 19
        ];
        echo $tutor["Nombre"];
        echo $tutor["Apellido"];
        
        echo $tutor["Edad"];

        //Para modificarlo

        $tutor["Edad"] = 31;
        echo $tutor["Edad"];

    # Multidimensionales - Son arrays de varias dimensiones

    $tutor2 = [
        "Nombre" => "Miriam",
        "Apellido" => "Ortiz",
        "Edad" => 26,
        "Cursos" => ["Php", "Python", "Css"]
    ];

    //Para acceder al array de cursos
    echo $tutor2 ["Cursos"][1];

    //Para contar todos los elementos del array

    echo count($tutor2);


?>