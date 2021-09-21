<?php

use App\Alumnos;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class AlumnosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement("SET FOREIGN_KEY_CHECKS = 0 ");
        DB::table('alumnos')->truncate();
        DB::statement("SET FOREIGN_KEY_CHECKS = 1 ");

        DB::table('alumnos')->insert([
            "nombre" => "javier",
            "apellido" => "moran",
            "fecha_nacimiento" => "15/08/2001",
            "direccion" => "la paz, tapalhuaca",
            "genero"=>"M",
            "telefono"=>"45859612",
            "email"=>"javier@gmail.com",
            "clave"=>bcrypt("javier20")
        ]);

        factory(Alumnos::class,18)->create();
            
    }
}
