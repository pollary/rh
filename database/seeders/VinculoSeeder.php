<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Vinculo;


class VinculoSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$vinculos=[                         
			['descricao' => 'Concursado'],               
			['descricao' => 'Contratado'],                
			['descricao' => 'Comissionado'],            
			['descricao' => 'Cedido']	
		];

		foreach ($vinculos as $key=>$value)
		{
			Vinculo::create($value);
		}

	}
}