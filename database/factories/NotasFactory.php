<?php
use App\Notas;
use Faker\Generator as Faker;

$factory->define(Notas::class, function (Faker $faker) {
    return [
        "nota1" => "9",
        "nota2" => "9",
        "nota3" => "9",
        "nota4" => "9",
        "promedio" => "9",
        "parcial" => "9",
        "idcurso" => "2",
        "idprofesor" => "2",
        "idalumno" => "2"
    ];
});
