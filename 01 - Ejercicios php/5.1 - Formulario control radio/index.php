<html>
    <head>
        <title>Boton radio</title>
    </head>
    <body>
        <?php
        $valor1;
        $valor2;
        $suma;
        $resta;

        $valor1 = $_REQUEST['valor1'];
        $valor2 = $_REQUEST['valor2'];

        if($_REQUEST['radio1'] == "sumar"){
            $suma = $valor1 + $valor2;
            echo "La suma es: $suma";
        }else{
            if($_REQUEST['radio1'] == "restar"){
                $resta = $valor1 - $valor2;
                echo "La resta es: $resta";
            }
        }


        ?>
    </body>
</html>