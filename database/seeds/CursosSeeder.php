<?php
use App\Cursos;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CursosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement("SET FOREIGN_KEY_CHECKS = 0 ");
        DB::table('cursos')->truncate();
        DB::statement("SET FOREIGN_KEY_CHECKS = 1 ");

        DB::table('cursos')->insert([
            "nombre" => "database",
            "año" => "2021",
            "ciclo" =>"2",
            "idprofesor" =>"1"
        ]);
        factory(Cursos::class,18)->create();
    }
}
