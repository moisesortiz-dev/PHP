<html>
    <head>
        <title>Estructura repetitiva for</title>
    </head>
    <body>
        <?php
        $valor = rand(1, 100);
        $inicio = 0;
        while($inicio <= $valor){
            echo $inicio;
            echo "<br>";
            $inicio++;
        }
        ?>
    </body>
</html>