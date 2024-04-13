<html>
    <head>
        <title>Estructura anidada</title>
    </head>
    <body>
        <?php
            $valor = rand(1, 100);
            echo "El valor sorteado es: $valor <br>";

            if($valor <= 9){
                echo "El valor tiene un digito";
            }elseif( $valor >=100){
                echo "El valor tiene 3 digitos";
            } else{
                echo "El valor tiene 2 digitos";
            }
        ?>
    </body>
</html>