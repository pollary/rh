@extends('layouts.app')

@section('css')
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/css/bootstrap-select.min.css')}}">
@endsection

@section('content')

    <main role="main" class="container">
      <br><br>
<div class="container">
  <div class="row">
    <div class="col-sm-12 col-md-12">
			<div class="jumbotron">
        <h1 style="text-align: center;">Relatório: Chamado #{{$data['numero']}}</h1>
        <div class="box-ticket">

       	<div class="informacoes">
       		<fieldset>
       			<legend><b>Ocorrência</b></legend>
       			<p><b><u>Número</u>:</b> {{$data['numero']}}</p>
       			<p><b><u>Data de Abertura</u>:</b> {{$data['data_abertura']}}</p>
       			<p><b><u>Solicitante</u>:</b> {{$data['solicitante']}}</p>
       			<p><b><u>Departamento</u>:</b> {{$data['departamento']}}</p>
       			<p><b><u>Assunto</u>:</b> {{$data['assunto']}}</p>
       		</fieldset>
       		<fieldset>
       			<legend><b>Descrição</b></legend>
  				{!!$data['descricao'] !!}
       		</fieldset>       		
       		<fieldset>
       			<legend><b>Status</b></legend>
       			<p><b><u>Status da Ocorrência</u>:</b> {{$data['status']}}</p>
       			<p><b><u>Tarefa Atribuída a</u>:</b> {{$data['atribuido_a']}}</p>
       			<p><b><u>Problema Resolvido</u>:</b> {{$data['resolvido']}}</p>
       			<p><b><u>Prioridade</u>:</b> {{$data['prioridade']}}</p>
       			<p><b><u>Data de Vencimento:</u></b> {{$data['data_vencimento']}}</p>
       		</fieldset>
       	</div>


		<div id="resultado" style="display:none;" class="animate-bottom">
		Ticket criado com sucesso! <br>
		O identificador(id) é: <b>522-BDA-QB8</b>.
		Visualize o status do seu chamado <a href="./status.html?id=1">aqui</a>.
		</div>
		<div id="erro" style="display:none;" class="animate-bottom">
		<b style="color: red;">Erro:</b><br>
		Ocorreu um problema! <br>
		O ticket não foi criado, tente novamente.
		</div>  
        </div>
      </div>
    </div>
  </div>
</div>

  <div id="loader"></div>


    </main>


@endsection

@section('js')

	<script type="text/javascript">

    document.getElementById("loader").style.display = "none";

    function showPage()
    {
      console.log("Deu Certo");
      document.getElementById("loader").style.display = "none";
      document.getElementById("resultado").style.display = "block";
      document.getElementById("erro").style.display = "block";
    }
	</script>
@endsection