<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\CargoSeeder;
use Database\Seeders\SecretariaSeeder;
use Database\Seeders\VinculoSeeder;
use Database\Seeders\Qualificacao;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CargoSeeder::class);
        $this->call(SecretariaSeeder::class);
        $this->call(VinculoSeeder::class);
        $this->call(QualificacaoSeeder::class);
    }
}