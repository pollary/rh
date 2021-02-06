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
        <h1 style="text-align: center;">CRIAR CHAMADO</h1>
        <div class="box-ticket">
          <form>
            <div class="form-row">
              <div class="form-group col-md-12">
                <label for="inputEmail4">Email <span class="red">*</span></label>
                <input type="email" class="form-control" id="inputEmail4">
              </div>
            </div>
            <div class="form-group">
              <label for="inputAddress">Nome Completo <span class="red">*</span></label>
              <input type="text" class="form-control" id="inputAddress">
            </div>
            <div class="form-group">
              <label for="inputAddress2">Telefone <span class="red">*</span></label>
              <input type="text" class="form-control" id="inputAddress2">
            </div>
            <div class="form-row">
              <div class="form-group col-md-4">
                <label for="inputState">Departamento</label>
                <select id="inputState" class="form-control selectpicker" data-show-subtext="true" data-live-search="true">
                  <option selected>Escolha...</option>
                  <option>Recursos Humanos</option>
                  <option>Gabinetes</option>
                  <option>Financeiro</option>
                  <option>Diretoria Administrativa</option>
                </select>
              </div>
            </div>

            <div class="form-row">
              <div class="form-group col-md-4">
                <label for="inputState">Assunto</label>
                <select id="assunto" class="form-control selectpicker" data-show-subtext="true" data-live-search="true">
                  <option selected>Escolha...</option>
                  <option id="problema-computador" value="2">Problema com Computador</option>
                  <option>Problema com Autenticação/Sistema</option>
                  <option>Dúvida</option>
                  <option>Elogio</option>
                </select>
              </div>
            </div>

            <div class="form-row" id="select-problema">
              <div class="form-group col-md-4">
                <label for="inputState">Especifique o Problema</label>
                <select  class="form-control selectpicker" data-show-subtext="true" data-live-search="true">
                  <option selected>Escolha...</option>
                  <option>Tela Azul - Crash no Sistema</option>
                  <option>Audio Não Funciona</option>
                  <option>Sistema Operacional Não Inicia</option>
                  <option>Computador Desliga Sozinho</option>
                  <option>Computador Reiniciando</option>
                  <option>Computador Liga - Tela Preta</option>
                  <option>Relógio do Sistema Atrasado</option>
                  <option>Outros</option>
                </select>
              </div>
            </div>

            <div class="form-row">
              <label for="comment">Descreva a Ocorrência: <span class="red">*</span></label>
              <div class="input-group">
                <textarea class="form-control" rows="5" id="comment" ></textarea>
              </div>  
            </div>


              <div class="form-group" style="margin-top: 10px; text-align: center;">
                <button type="submit" class="btn btn-primary" id="enviarBtn">Registrar</button>
              </div>
          </form>

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
</div><div id="loader"></div>
</main>

@endsection


@section('js')

  <script type="text/javascript" src="{{asset('vendor/js/bootstrap-select.min.js')}}"></script>

  <script type="text/javascript">
   

    var loader = document.getElementById("loader");
    document.getElementById("loader").style.display = "none";

    var selectProblema = document.getElementById("select-problema");
    selectProblema.style.display = "none";
    console.log("hidden");
    var problemaComputador = document.getElementById("assunto");
    problemaComputador.addEventListener('change', function(){
      
      if (problemaComputador.value == 2) 
      {
        selectProblema.style.display = "block";
      }else
      {
        selectProblema.style.display = "none";
      }
      
    });

    var registrar = document.getElementById("enviarBtn");

    registrar.addEventListener('click', function(event){
      event.preventDefault();
      var loader = document.getElementById("loader");
      loader.removeAttribute('display');
      loader.style.display = null;
      setTimeout(showPage,3000);
    })

    function showPage()
    {
      console.log("Deu Certo");
      document.getElementById("loader").style.display = "none";
      document.getElementById("resultado").style.display = "block";
      document.getElementById("erro").style.display = "block";
    }
  </script>
@endsection