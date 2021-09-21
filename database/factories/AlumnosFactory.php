<?php

use App\Alumnos;
use Faker\Generator as Faker;

$factory->define(Alumnos::class, function (Faker $faker) {
    return [
        "nombre" => "Enrique",
        "apellido" => "Lopez",
        "fecha_nacimiento" => "15/08/2001",
        "direccion" => "la paz, tapalhuaca",
        "genero" => "M",
        "telefono" => "45859612",
        "email" => "javier@gmail.com",
        "clave" => bcrypt("javier20")
    ];
});
