<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Cargo;


class CargoSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$cargos=[                         
			['descricao' => 'a'],               //descricao dos cargos
			['descricao' => 'b'],                
			['descricao' => 'c'],            
			['descricao' => 'd']	
		];

		foreach ($cargos as $key=>$value)
		{
			Cargo::create($value);
		}

	}
}