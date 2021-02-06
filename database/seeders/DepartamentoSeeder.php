<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Departamento;

class DepartamentoSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$departamentos=[
			['descricao' => 'Almoxarifado'],
			['descricao' => 'Apoio Administrativo'],
			['descricao' => 'Biblioteca'],
			['descricao' => 'Cerimonial'],
			['descricao' => 'Comissão de Licitação'],
			['descricao' => 'Comissões'],
			['descricao' => 'Controle Interno'],
			['descricao' => 'Diretoria Administrativa'],
			['descricao' => 'Diretoria Administrativa (Anexo)'],
			['descricao' => 'Diretoria de Comunicação'],
			['descricao' => 'Diretoria de TI'],
			['descricao' => 'Diretoria Geral'],
			['descricao' => 'Financeiro'],
			['descricao' => 'Gabinete (Diogo Fernandes)'],
			['descricao' => 'Gabinete (Etinho Nordeste)'],
			['descricao' => 'Gabinete (Filipe Fernandes)'],
			['descricao' => 'Gabinete (Filipe Martins)'],
			['descricao' => 'Gabinete (Folha)'],
			['descricao' => 'Gabinete (Gerson Alves)'],
			['descricao' => 'Gabinete (Hélio Santana)'],
			['descricao' => 'Gabinete (Irmão Jairo)'],
			['descricao' => 'Gabinete (Jucelino Rodrigues)'],
			['descricao' => 'Gabinete (Laudecy Coimbra)'],
			['descricao' => 'Gabinete (Lúcio Campelo)'],
			['descricao' => 'Gabinete (Major Negreiros)'],
			['descricao' => 'Gabinete (Marilon Barbosa)'],
			['descricao' => 'Gabinete (Milton Neris)'],
			['descricao' => 'Gabinete (Moisemar Marinho)'],
			['descricao' => 'Gabinete (Rogério Freitas)'],
			['descricao' => 'Gabinete (Rogério Santos)'],
			['descricao' => 'Gabinete (Tiago Andrino)'],
			['descricao' => 'Gabinete (Vandim do Povo)'],
			['descricao' => 'Manutenção'],
			['descricao' => 'Patrimônio'],
			['descricao' => 'Presidência'],
			['descricao' => 'Procuradoria'],
			['descricao' => 'Procuradoria Geral'],
			['descricao' => 'Recursos Humanos'],
			['descricao' => 'Segurança'],
			['descricao' => 'Superintendência Legislativa']	
		];

		foreach ($departamentos as $key=>$value)
		{
			Departamento::create($value);
		}
	}
}

