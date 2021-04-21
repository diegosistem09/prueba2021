<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Libros;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        #\App\Models\Libros::factory(10)->create();
        \App\Models\Prueba::factory(10)->create();
    }
}
