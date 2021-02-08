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
			['descricao' => 'Banco de Alimentos'],
			['descricao' => 'Casa do Idoso'],
			['descricao' => 'Casa da Criança'],
			['descricao' => 'Casa dos Conselhos'],
			['descricao' => 'Abrigo Reviver(venezuelanos)'],
			['descricao' => 'Abrigo Superação'],
			['descricao' => 'Abrigo Conviver(casa de passagem)'],
			['descricao' => 'Centro POP'],
			['descricao' => 'CRPD'],
			['descricao' => 'CREAS'],
			['descricao' => 'CRAS BACURI'],
			['descricao' => 'CRAS BOM JESUS'],
			['descricao' => 'CRAS CAFETEIRA'],
			['descricao' => 'CRAS COQUELANDIA'],
			['descricao' => 'CRAS SANTA RITA'],
			['descricao' => 'CRAS RECANTO UNIVERSITÁRIO'],
			['descricao' => 'RESTAURANTE POPULAR'],
			['descricao' => 'CONSELHO TUTELAR AREA I'],
			['descricao' => 'CONSELHO TUTELAR AREA II'],
			['descricao' => 'SCFV BACABA'],
			['descricao' => 'SCFV BOM JESUS'],
			['descricao' => 'SCFV ALVORADA'],
			['descricao' => 'SCFV VILA DAVI'],
			['descricao' => 'SCFV VILA VITÓRIA'],
			['descricao' => 'SCFV JOÃO CASTELO'],
			['descricao' => 'SCFV SÃO JOSÉ'],
			['descricao' => 'SCFV INDEPENDENTE'],
			['descricao' => 'SCFV CENTRO NOVO'],
			['descricao' => 'SCFV VILA CONCEIÇÃO I'],
			['descricao' => 'SCFV VILA CONCEIÇÃO II'],
			['descricao' => 'SCFV SÃO FÉLIX'],
			['descricao' => 'SCFV OLHO DÁGUA'],
			['descricao' => 'SCFV COQUELANDIA'],
			['descricao' => 'SCFV PETROLINA'],
			['descricao' => 'SCFV SÃO FELIZ'],
			['descricao' => 'SEDES']
				
		];

		foreach ($secretarias as $key=>$value)
		{
			Secretaria::create($value);
		}

	}
}