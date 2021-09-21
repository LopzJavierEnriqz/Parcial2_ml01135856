<?php

use App\Profesores;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfesoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement("SET FOREIGN_KEY_CHECKS = 0 ");
        DB::table('profesor')->truncate();
        DB::statement("SET FOREIGN_KEY_CHECKS = 1 ");

        DB::table('profesor')->insert([
            "nombre" => "javier",
            "apellido" => "moran",
            "dui" =>"157482658",
            "telefono" =>"85489612",
            "email" =>"javier@gmail.com",
            "clave" =>bcrypt("javier2021"),
        ]);

        factory(Profesores::class,18)->create();
    }
}
