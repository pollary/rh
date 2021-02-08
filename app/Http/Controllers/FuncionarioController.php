<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cargo;
use App\Models\Secretaria;
use App\Models\Vinculo;
use App\Models\Funcionario;
use App\Models\Qualificacao;

class FuncionarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $funcionarios = Funcionario::all();
        
        return view('funcionarios.index', compact(['funcionarios']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cargos = Cargo::all();
        $secretarias = Secretaria::all();
        $vinculos = Vinculo::all();
        $qualificacaos = Qualificacao::all();
        
        //dd(compact(['cargos','secretaria','vinculo'])); Funçao De Debugar
        

        return view('funcionarios.create', compact(['cargos','secretarias','vinculos','qualificacaos']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*$data = $request->validate(
            [           
                'nome' => 'required',
                'cpf' => 'required',
                'vinculo' => 'required',
                'cargo' => 'required',
                'secretaria' => 'required'
            ]); */
        $data = $request->all();    

        $funcionario = new Funcionario; 
        $funcionario->nome = $data["nome"];
        $funcionario->cpf = $data["cpf"];
        $funcionario->pis = $data["pis"];
        $funcionario->telefone = $data["telefone"];  
        $funcionario->observacao = $data["observacao"];        
        $funcionario->vencimentos = strval($data["vencimentos"]);
        $funcionario->matricula = $data["matricula"];
        $funcionario->secretaria = $data["secretaria"];
        $funcionario->vinculo = $data["vinculo"];
        $funcionario->qualificacao = $data["qualificacao"];
        $funcionario->cargo = $data["cargo"];      
        //dd($request->all());
        //dd($funcionario);
        $funcionario->save();
        //return redirect(route("funcionarios.index"));
        return redirect(url("funcionarios"));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //$funcionario = Funcionario::with("_vinculo")->where("id", $funcionario->id)->first();
        $funcionario = Funcionario::with(["_vinculo","_secretaria","_cargo","_qualificacao"])->find($id);
        //dd($funcionario);
        return view("funcionarios.show",compact("funcionario"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Funcionario $funcionario)
    {
        $cargos = Cargo::all();
        $secretarias = Secretaria::all();
        $vinculos = Vinculo::all();
        $qualificacaos = Qualificacao::all();
        return view('funcionarios.edit', compact(['cargos','secretarias','vinculos',"funcionario","qualificacaos"]));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Funcionario $funcionario)
    {
        $data = $request->all();    
 
        $funcionario->nome = $data["nome"];
        $funcionario->cpf = $data["cpf"];
        $funcionario->pis = $data["pis"];
        $funcionario->telefone = $data["telefone"];  
        $funcionario->observacao = $data["observacao"];        
        $funcionario->vencimentos = strval($data["vencimentos"]);
        $funcionario->matricula = $data["matricula"];
        $funcionario->secretaria = $data["secretaria"];
        $funcionario->vinculo = $data["vinculo"];
        $funcionario->qualificacao = $data["qualificacao"];
        $funcionario->cargo = $data["cargo"];      
        //dd($request->all());
        //dd($funcionario);
        $funcionario->save();
        return redirect(route("funcionarios.index"));
        //dd($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Funcionario $funcionario)
    {
        $funcionario->delete();
        return response("excluido com sucesso", 200);
    }
}
