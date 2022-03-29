<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Str;

class MateriasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('_materia')->insert([
            'Nombre'=> 'Informatica',
            'Descripcion'=> 'es el ares de la ciencia que se encarga de estudiar la administracion de metodos',
        ]);
    }
}
