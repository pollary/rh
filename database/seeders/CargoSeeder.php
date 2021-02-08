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
			['descricao' => 'ASMA'],
			['descricao' => 'Serviços Gerais'],
			['descricao' => 'Auxiliar de serviços de infraestrutura'],
			['descricao' => 'Zelador'],
			['descricao' => 'Merendeira'],
			['descricao' => 'Cozinheiro'],
			['descricao' => 'Técnico em Administração nível básico'],
			['descricao' => 'Técnico em Administração nível médio'],
			['descricao' => 'Assistente administrativo'],
			['descricao' => 'Cuidador social'],
			['descricao' => 'Auxiliar de enfermagem'],
			['descricao' => 'Motorista'],
			['descricao' => 'Magarefe'],
			['descricao' => 'Balanceiro'],
			['descricao' => 'Monitor de Creche'],
			['descricao' => 'Vigia'],
			['descricao' => 'Porteiro'],
			['descricao' => 'Agente de segurança interna'],
			['descricao' => 'Técnico em informática'],
			['descricao' => 'Assistente social'],
			['descricao' => 'Psicólogo'],
			['descricao' => 'Pedagogo'],
			['descricao' => 'Professor Nivel I'],
			['descricao' => 'Professor Nivel III'],
			['descricao' => 'Nutricionista'],
			['descricao' => 'Fisioterapeuta'],
			['descricao' => 'Educador físico'],
			['descricao' => 'Instrutor de libras'],
			['descricao' => 'Interprete de libras'],
			['descricao' => 'Instrutor de braile'],
			['descricao' => 'Psicopedagoga'],
			['descricao' => 'Coordenador'],
			['descricao' => 'Diretor de departamento'],
			['descricao' => 'Assessor de projetos estratégicos'],
			['descricao' => 'Chefe de setor'],
			['descricao' => 'Chefe de núcleo administrativo'],
			['descricao' => 'Assessor técnico de planejamento'],
			['descricao' => 'Assessor de gabinete I'],
			['descricao' => 'Assessor de gabinete II'],
			['descricao' => 'Assessor de gabinete III'],
			['descricao' => 'Assessor de projetos especiais'],
			['descricao' => 'Assessor de administração pública'],
			['descricao' => 'Diretor de secretária'],
			['descricao' => 'Diretor executivo'],
			['descricao' => 'Superintendente'],
			['descricao' => 'Conselheiro Tutelar'],
			['descricao' => 'Secretária municipal adjunta'],
			['descricao' => 'Secretária Municipal de desenvolvimento social'],
			['descricao' => 'Orientador Social'],
			['descricao' => 'Instrutor de dança'],
			['descricao' => 'Entrevistador cadunico'],
			['descricao' => 'Instrutor de esportes'],
			['descricao' => 'Instrutor de capoeira'],
			['descricao' => 'Instrutor de bolos, tortas e salgados'],
			['descricao' => 'Instrutor de Teatro'],
			['descricao' => 'Educador social'],
			['descricao' => 'Instrutor de informática'],
			['descricao' => 'Digitador'],
			['descricao' => 'Terapeuta ocupacional']
			
		];

		foreach ($cargos as $key=>$value)
		{
			Cargo::create($value);
		}

	}
}