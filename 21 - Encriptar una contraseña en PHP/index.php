<?php

$clave = "HolaMundo123";

// No se utilizan estos hash ya...

/*echo md5($clave);
echo "<br>";

echo sha1($clave);
echo "<br>";

echo hash("md5", $clave);
*/
/*
    echo password_hash($clave,PASSWORD_DEFAULT);
    echo "<br>";

    echo password_hash($clave,PASSWORD_BCRYPT);
    echo "<br>";
*/

//Para verificar si ha sido procesada por un password hash

$clave_procesada = password_hash($clave,PASSWORD_BCRYPT, ["cost" => 15]);

echo password_verify($clave, $clave_procesada);
?>