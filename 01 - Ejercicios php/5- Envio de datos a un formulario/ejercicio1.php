<html>
    <head>

    </head>
    <body>
        <?php
            $nombre;
            $edad;
            $correo;
            $nombre = $_REQUEST['nombre'];
            $edad = $_REQUEST['edad'];
            $correo = $_REQUEST['gmail'];
            echo "La persona se llama: $nombre, su edad es:  $edad y su correo es: $correo";
            echo "<br>";

            if( $edad >= 18){
                echo " $nombre, es mayor de edad $edad";
            } else{
                echo "$nombre, es menor de edad $edad";
            }
        ?>
    </body>
</html>