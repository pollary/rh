<?php

namespace App\Http\Controllers;

use App\Models\Chamado;
use App\Models\Departamento;
use App\Models\Assunto;
use App\Models\AssuntoDetalhe;
use Illuminate\Http\Request;

class ChamadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {     
        $chamados = Chamado::all();

        return view('suporte/chamado/index', compact('chamados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $departamentos = Departamento::all();
        $assuntos = Assunto::all();
        $detalhes = AssuntoDetalhe::all();
        return view('suporte/chamado/create', compact(['departamentos','assuntos','detalhes']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $chamado = new Chamado;
        $chamado->departamento = $data['departamento'];
        $chamado->solicitante = $data['nome'];
        $chamado->telefone = $data['telefone'];
        $chamado->email = $data['email'];
        $chamado->assunto = $data['assunto'];
        $chamado->assunto_detalhe = $data['detalhe'];
        $chamado->status = 0; // 1 - Não atendido
        $chamado->resolvido = 1; // 1 - Sim - 2 - Não
        $chamado->prioridade = 1; // 1 - Baixa - 2 - Normal - 3 - Alta
        $chamado->ocorrencia =  $data['ocorrencia'];
        $chamado->save();
        //dd($chamado);

        return \Response::json($chamado);
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Chamado  $chamado
     * @return \Illuminate\Http\Response
     */
    public function show(Chamado $chamado)
    {
        dd(['aok' => 1]);
        $data = ['numero' => 12, 'data_abertura' => '10/11/2019',
        'solicitante' => 'José da Silva','departamento' => 'Recursos Humanos', 'assunto' => 'Computador não funciona', 'status' => 'Aberta', 'atribuido_a' => 'Jefferson Galvão', 'resolvido' => 'Não', 'prioridade' => 'Normal', 'data_vencimento' => '10/10/2019',
        'descricao' => "<p>Cupcake ipsum dolor sit amet marzipan chocolate. Brownie wafer donut halvah cookie cotton candy. Apple pie topping donut gummi bears dragée sugar plum. Cookie lollipop gummies cake jelly-o icing. Cookie candy canes cupcake donut sugar plum. Candy cookie candy chocolate dessert pastry jelly-o bear claw powder.</p>

                <p>Cookie lemon drops cookie sesame snaps wafer powder. Liquorice candy topping sugar plum soufflé jelly-o bonbon. Halvah pudding soufflé. Icing sweet roll candy gummi bears candy canes dragée danish. Candy canes gummi bears sweet roll donut. Lollipop lemon drops lemon drops sugar plum candy biscuit jujubes cotton candy cake. Dessert gummi bears liquorice fruitcake cookie. Marzipan brownie gingerbread wafer jelly beans croissant marshmallow. Gingerbread sugar plum donut dragée danish candy marshmallow.</p>"];
        return view('suporte/chamado/show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Chamado  $chamado
     * @return \Illuminate\Http\Response
     */
    public function edit(Chamado $chamado)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Chamado  $chamado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Chamado $chamado)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Chamado  $chamado
     * @return \Illuminate\Http\Response
     */
    public function destroy(Chamado $chamado)
    {
        //
    }
}
