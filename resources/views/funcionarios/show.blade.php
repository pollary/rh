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
        <h1 style="text-align: center;">Funcionário - {{$funcionario->nome}}</h1>
        <div class="box-ticket">
          <form id="formulario">     <!--açao de enviar para o BD-->
            <meta name="csrf-token" content="{{ csrf_token() }}">
            <div class="form-row">
              <div class="form-group col-md-12">
                <label for="matricula">Matrícula</label>
                <p><b>{{$funcionario->matricula}}</b></p>
              </div>
            </div>
            <div class="form-group">
              <label for="nome">Nome Completo </label>
              <p><b>{{$funcionario->nome}}</b></p>
            </div>
            <div class="form-row">
              <div class="form-group col-md-12">
                <label for="cpf">CPF </label>
                <p><b>{{$funcionario->cpf}}</b></p>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-12">
                <label for="pis">PIS</label>
                <p><b>{{$funcionario->pis}}</b></p>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-12">
                <label for="vencimentos">Vencimentos</label>
                <p><b>{{$funcionario->vencimentos}}</b></p>
              </div>
            </div>
            <div class="form-group">
              <label for="telefone">Telefone</label>
              <p><b>{{$funcionario->telefone}}</b></p>
            </div>
            <div class="form-row">
              <div class="form-group col-md-4">
                <label for="secretaria">Programa(Secretaria)</label>
                <p><b>{{$funcionario->_secretaria["descricao"]}}</b></p>
              </div>
            </div>
            
            <div class="form-row">
              <div class="form-group col-md-4">
                <label for="vinculo">Vinculo</label>
                <p><b>{{$funcionario->_vinculo["descricao"]}}</b></p>
              </div>
            </div>
           
            <div class="form-row">
              <div class="form-group col-md-4">
                <label for="qualificacao">Qualificação</label>
                <p><b>{{$funcionario->_qualificacao["descricao"]}}</b></p>
              </div>
            </div>

            <div class="form-row">
              <div class="form-group col-md-4">
                <label for="cargo">Cargo</label>
                <p><b>{{$funcionario->_cargo["descricao"]}}</b></p>
              </div>
            </div>
            <div class="form-row">
              <label for="observacao">Observação:</label>
              <div class="input-group">
                <textarea class="form-control" rows="5" readonly>{{$funcionario->observacao}}</textarea>
              </div>  
            </div>
            <div class="form-group" style="margin-top: 10px; text-align: center;">
                <a role="button" class="btn btn-warning" href="{{url("/funcionarios/{$funcionario->id}/edit")}}">Editar</a>
                <button  class="btn btn-danger" id="deletarBtn" >Deletar</button>
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

        $('.telefone').mask('(00) 0000-0000'); 
        $('.cpf').mask('000.000.000-00', {reverse: true});
        $('.pis').mask('0000.000.00/00', {reverse: true});
        $('.vencimentos').mask("000.000.000.000.000,00", {reverse: true});
    });
   

    $("#fomulario").submit(function() {      
        $(".vencimentos").unmask();
    });

    var deletarBtn = document.getElementById("deletarBtn");
    deletarBtn.addEventListener("click",function(event){
        event.preventDefault();
        const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
                confirmButton: 'btn btn-success',
                cancelButton: 'btn btn-danger'
            },
            buttonsStyling: false
            })

            swalWithBootstrapButtons.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes, delete it!',
            cancelButtonText: 'No, cancel!',
            reverseButtons: true
            }).then((result) => {
            if (result.isConfirmed) {
                $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });


                $.ajax({
                type: "DELETE",
                url: "{{url("/funcionarios/{$funcionario->id}")}}"
            }) 
            .done(function(response) {
                console.log( "Sucesso:\n" );
                console.log(response);
                swalWithBootstrapButtons.fire(
                'Deletado!',
                'Seu Funcionario Foi DEMITIDO!.',
                'successo'
                );
                window.location.href = "{{url('funcionarios')}}";
            })
            .fail(function() {
                console.log( "error" );
            });





                swalWithBootstrapButtons.fire(
                'Deleted!',
                'Your file has been deleted.',
                'success'
                )
            } else if (
                /* Read more about handling dismissals below */
                result.dismiss === Swal.DismissReason.cancel
            ) {
                swalWithBootstrapButtons.fire(
                'Cancelled',
                'Your imaginary file is safe :)',
                'error'
                )
            }
            })
    
    
    });




  </script>
@endsection