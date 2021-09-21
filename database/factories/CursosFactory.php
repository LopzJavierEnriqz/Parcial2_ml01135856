<?php
use App\Cursos;
use Faker\Generator as Faker;

$factory->define(Cursos::class, function (Faker $faker) {
    return [
        "nombre" => "POO",
        "año" => "2021",
        "ciclo" => "2",
        "idprofesor" => "1"
    ];
});
