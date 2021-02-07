@extends('layouts.app')


@section('css')   

    <style>
        .ponteiro{
            cursor: pointer;
        }
    </style>

@endsection


@section('content')

<main role="main" class="container">
      
  <div class="container" style="padding-top: 7rem;">
    <div class="row">
      <div class="col-sm-12 col-md-12">
      <table class="table table-dark table-hover">
        <thead>
          <tr>
            <th scope="col">Matrícula</th>
            <th scope="col">Nome</th>
            <th scope="col">CPF</th>
            <th scope="col">Telefone</th>
          </tr>
        </thead>
        <tbody>
          @forelse ($funcionarios ?: [] as $funcionario)
                <tr class="ponteiro" role="button" data-href="{{url("/funcionarios/{$funcionario->id}")}}">
                    <th scope="row">{{$funcionario->matricula}}</th>
                    <td>{{$funcionario->nome}}</td>
                    <td>{{$funcionario->cpf}}</td>
                    <td>{{$funcionario->telefone}}</td>            
                </tr>
          @empty
          <tr>
            <td colspan="6" class="text-center">Parabéns!!! Não existem funcionarios abertos!</td>
          </tr>
          @endforelse
        </tbody>
      </table>
      </div>
    </div>
  </div>

</main>

@endsection

@section('js')
<script type="text/javascript">

//FUNÇAO DE DEIXAR A LINHA CLICAVEL
$(function(){            
     $(".table").on("click", "tr[role=\"button\"]", function (e) {
          window.location = $(this).data("href");
     });
});

</script>
@endsection