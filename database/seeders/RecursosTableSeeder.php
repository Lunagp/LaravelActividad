<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Str;

class RecursosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('_recursos')->insert([
            'Nom_recursos' => 'Economico',
            'tipo'=> 'Monetario',
        ]);
    }
}
