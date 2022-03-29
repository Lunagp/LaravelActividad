<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(EstudiantesTableSeeder::class);
        $this->call(MateriasTableSeeder::class);
        $this->call(RecursosTableSeeder::class);
        // \App\Models\User::factory(10)->create();
    }
}
