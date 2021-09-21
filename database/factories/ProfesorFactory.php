<?php

use App\Profesores;
use Faker\Generator as Faker;

$factory->define(Profesores::class, function (Faker $faker) {
    return [
        "nombre" => "Enrique",
        "apellido" => "Lopez",
        "dui" => "157482658",
        "telefono" => "85489612",
        "email" => "javier@gmail.com",
        "clave" => bcrypt("javier2021"),
    ];
});
