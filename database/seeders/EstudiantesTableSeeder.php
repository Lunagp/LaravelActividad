<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Str;

class EstudiantesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('_estudiante')->insert([
            'Nom_estudiante'=>'Luna Angelica',
            'Ape_estudiante' => 'Giraldo Pulgarin',
            'Direccion' => 'Carrera 19 #2a-105',
            'Tipo_doc' => 'Cedula de ciudadania',
            'Num_doc' => 1002969210
        ]);
    }
}
