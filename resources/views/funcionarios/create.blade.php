@extends('layouts.app')

@section('css')
  <link rel="stylesheet" type="text/css" href="{{asset('vendor/css/bootstrap-select.min.css')}}">

@endsection

@section('content')

<main role="main" class="container"> <br><br>
<div class="container">
  <div class="row">
    <div class="col-sm-12 col-md-12">
			<div class="jumbotron">
        <h1 style="text-align: center;">Cadastrar Funcionário</h1>
        <div class="box-ticket">
          <form action="{{route('funcionarios.store')}}" method="POST" id="formulario">     <!--açao de enviar para o BD-->
            @csrf
            <div class="form-row">
              <div class="form-group col-md-12">
                <label for="matricula">Matrícula</label>
                <input type="text" class="form-control matricula" name="matricula" id="matricula">
              </div>
            </div>
            <div class="form-group">
              <label for="nome">Nome Completo <span class="red">*</span></label>
              <input type="text" class="form-control" name="nome" id="nome">
            </div>
            <div class="form-row">
              <div class="form-group col-md-12">
                <label for="cpf">CPF <span class="red">*</span></label>
                <input type="text" class="form-control cpf" name="cpf" id="cpf">
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-12">
                <label for="pis">PIS</label>
                <input type="text" class="form-control pis" name="pis" id="pis">
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-12">
                <label for="vencimentos">Vencimentos</label>
                <input type="text" class="form-control vencimentos" name="vencimentos" id="vencimentos">
              </div>
            </div>
            <div class="form-group">
              <label for="telefone">Telefone</label>
              <input type="text" class="form-control telefone" name="telefone" id="telefone">
            </div>

            <div class="form-group">
              <label for="admissao">Data</label>
              <input type="text" class="form-control date" name="admissao" id="admissao">
            </div>

            <div class="form-row">
              <div class="form-group col-md-4">
                <label for="secretaria">Programa(Secretaria) <span class="red">*</span></label>
                <select id="secretaria" name="secretaria" class="form-control selectpicker" data-show-subtext="true" data-live-search="true">
                  <option selected value="-1">Escolha...</option>
                  @foreach($secretarias as $secretaria)
                    <option value="{{$secretaria->id}}">{{$secretaria->descricao}}</option>
                  @endforeach
                </select>
              </div>
            </div>

            <div class="form-row">
              <div class="form-group col-md-4">
                <label for="vinculo">Vinculo <span class="red">*</span></label>
                <select id="vinculo" name="vinculo" class="form-control selectpicker" data-show-subtext="true" data-live-search="true">
                  <option selected value="-1">Escolha...</option>
                  @foreach($vinculos as $vinculo) 
                        <option value="{{$vinculo->id}}">{{$vinculo->descricao}}</option>
                  @endforeach
                </select>
              </div>
            </div>

            <div class="form-row">
              <div class="form-group col-md-4">
                <label for="qualificacao">Qualificação <span class="red">*</span></label>
                <select id="qualificacao" name="qualificacao" class="form-control selectpicker" data-show-subtext="true" data-live-search="true">
                  <option selected value="-1">Escolha...</option>
                  @foreach($qualificacaos as $qualificacao)
                        <option value="{{$qualificacao->id}}">{{$qualificacao->descricao}}</option>
                  @endforeach
                </select>
              </div>
            </div>

            <div class="form-row">
              <div class="form-group col-md-4">
                <label for="cargo">Cargo<span class="red">*</span></label>
                <select id="cargo" name="cargo" class="form-control selectpicker" data-show-subtext="true" data-live-search="true">
                  <option selected value="-1">Escolha...</option>
                  @foreach($cargos as $cargo)
                        <option value="{{$cargo->id}}">{{$cargo->descricao}}</option>
                  @endforeach
                </select>
              </div>
            </div>

            <div class="form-row">
              <label for="observacao">Observação:</label>
              <div class="input-group">
                <textarea class="form-control" rows="5" name="observacao" id="observacao"></textarea>
              </div>  
            </div>


              <div class="form-group" style="margin-top: 10px; text-align: center;">
                <button type="submit" class="btn btn-primary" id="enviarBtn">Registrar</button>
              </div>
          </form>  
        </div>
      </div>
    </div>
  </div>
</div>
</main>

@endsection


@section('js')


  <script type="text/javascript" src="{{asset('vendor/js/bootstrap-select.min.js')}}"></script>

  <script type="text/javascript">
   
   $(document).ready(function(){

  $('.matricula').mask('00.000-0', {reverse: true});
  $('.telefone').mask('(00) 00000-0000'); 
  $('.cpf').mask('000.000.000-00', {reverse: true});
  $('.pis').mask('0000.000.00/00', {reverse: true});
  $('.vencimentos').mask("000.000.000.000.000,00", {reverse: true});
  $('.date').mask('00/00/0000');
});
   

$("#fomulario").submit(function() {      
  $(".vencimentos").unmask();
});


  </script>
@endsection