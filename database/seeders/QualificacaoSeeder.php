<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Qualificacao;


class QualificacaoSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$qualificacaos=[                         
			['descricao' => 'Fundamental Completo'],               
			['descricao' => 'Fundamental Incompleto'],                
			['descricao' => 'Medio Completo'],               
            ['descricao' => 'Medio Incompleto'],
            ['descricao' => 'Superior'],
            ['descricao' => 'Pos Graduado']	
		];

		foreach ($qualificacaos as $key=>$value)
		{
			Qualificacao::create($value);
		}

	}
}