<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('cursos', function(){
    return "Bienvenidoa  la pagina cursos";
});

Route::get('cursos/create', function () {
    return "En esta pagina podras crear un curso";
});

//Se le puede pasar una variable opcional a la ruta
Route::get('cursos/{cursos}', function($cursos){
    return "Bienvenido al curso de: $cursos";
});

//Se le puede pasar una variable opcional a la ruta si esta con ?, si esta la muestra, sino se inicializa como null
Route::get('cursos/{cursos}/{categoria?}', function($cursos, $categoria = null){

    if($categoria){
        return "Bienvenido al curso $cursos, de la categoria $categoria";
    }else{

    }
    return "Bienvenido al curso de: $cursos";
});

?>