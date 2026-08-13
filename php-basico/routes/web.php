<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mi-path', function () {

    $name = "Lucas";
    $apellido = "Ardila";
    $edad = 20;

    echo "<h1>Hola $name $apellido</h1>";
    echo "<p>Tengo $edad años</p>";

    $array = ["Esto", "Es", "Un", "Array"];

    foreach ($array as $item) {
        echo "$item <br>";
    }

    return '=====================';
});

function validateEdad($edad) {
    if ($edad >= 18 ) {
        return "Soy mayor de edad";
    } else {
        return "Soy menor de edad";
    }
}