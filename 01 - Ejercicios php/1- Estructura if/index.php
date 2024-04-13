<html>
    <head>
        <title>Estructura if</title>
    </head>
    <body>
        <?php
            $valor = rand(1,10);
            echo "El valor sorteado es: $valor <br>";

            if($valor >= 5){
                echo "El valor es mayor a 5";
            }else{
                echo "El valor es menor a 5";
            }
        ?>      

    </body>
</html>