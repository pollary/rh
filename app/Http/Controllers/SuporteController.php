<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuporteController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //W$this->middleware('auth');
    }

    public function index()
    {
        $mexerica = [];
        return view('suporte/index', compact('mexerica'));
    }

    public function dashboard()
    {
        $mexerica = [];
        return view('suporte/dashboard', compact('mexerica'));
    }

    public function status()
    {
        $data = ['numero' => 12, 'data_abertura' => '10/11/2019',
        'solicitante' => 'José da Silva','departamento' => 'Recursos Humanos', 'assunto' => 'Computador não funciona', 'status' => 'Aberta', 'atribuido_a' => 'Jefferson Galvão', 'resolvido' => 'Não', 'prioridade' => 'Normal', 'data_vencimento' => '10/10/2019',
        'descricao' => "<p>Cupcake ipsum dolor sit amet marzipan chocolate. Brownie wafer donut halvah cookie cotton candy. Apple pie topping donut gummi bears dragée sugar plum. Cookie lollipop gummies cake jelly-o icing. Cookie candy canes cupcake donut sugar plum. Candy cookie candy chocolate dessert pastry jelly-o bear claw powder.</p>

                <p>Cookie lemon drops cookie sesame snaps wafer powder. Liquorice candy topping sugar plum soufflé jelly-o bonbon. Halvah pudding soufflé. Icing sweet roll candy gummi bears candy canes dragée danish. Candy canes gummi bears sweet roll donut. Lollipop lemon drops lemon drops sugar plum candy biscuit jujubes cotton candy cake. Dessert gummi bears liquorice fruitcake cookie. Marzipan brownie gingerbread wafer jelly beans croissant marshmallow. Gingerbread sugar plum donut dragée danish candy marshmallow.</p>"];
        return view('suporte/status', compact('data'));
    }
}
