<?php
function saludo(){
    echo "Hola, mi nombre es Moises";
}

saludo();

// Para poder asignar la funcion a una variable tiene que tener return

function saludo1(){
    return "Hola, mi nombre es Moises";
}

$saludo = saludo1();

echo saludo1();


// Para poder pasar parametros a la funcion

function saludo2($nombre){
    return "Hola, mi nombre es $nombre";
}
echo saludo2("Pepe");

?>