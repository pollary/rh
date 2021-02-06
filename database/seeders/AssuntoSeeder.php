<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Assunto;
use App\Models\AssuntoDetalhe;
use App\Models\Prioridade;

class AssuntoSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$assuntos=[
			['descricao' => 'Problema com Computador'],
			['descricao' => 'Problema com Autenticação/Sistema'],
			['descricao' => 'Dúvida'],
			['descricao' => 'Elogio']	
		];

		foreach ($assuntos as $key=>$value)
		{
			Assunto::create($value);
		}

		$assuntoDetalhes=[
			['descricao' => 'Tela Azul - Crash no Sistema'],
			['descricao' => 'Audio Não Funciona'],
			['descricao' => 'Sistema Operacional Não Inicia'],
			['descricao' => 'Computador Desliga Sozinho'],
			['descricao' => 'Computador Reiniciando'],
			['descricao' => 'Computador Liga - Tela Preta'],
			['descricao' => 'Relógio do Sistema Atrasado'],
			['descricao' => 'Outros']
		];

		foreach ($assuntoDetalhes as $key=>$value)
		{
			AssuntoDetalhe::create($value);
		}

		$prioridades=[
			['descricao' => 'Baixa'],
			['descricao' => 'Normal'],
			['descricao' => 'Alta']
		];

		foreach ($prioridades as $key=>$value)
		{
			Prioridade::create($value);
		}

	}
}