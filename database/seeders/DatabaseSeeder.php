<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\AssuntoSeeder;
use Database\Seeders\DepartamentoSeeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AssuntoSeeder::class);
        $this->call(DepartamentoSeeder::class);
    }
}