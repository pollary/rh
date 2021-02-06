<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Secretaria;


class SecretariaSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$secretarias=[                         //SECRETARIAS
			['descricao' => 'A'],               //saude
			['descricao' => 'B'],                //infra
			['descricao' => 'C'],               //secretaria de desenvolvimento
			['descricao' => 'D']	
		];

		foreach ($secretarias as $key=>$value)
		{
			Secretaria::create($value);
		}

	}
}