@extends('layouts.app')

@section('content')

<main role="main" class="container">
      
  <div class="container" style="padding-top: 7rem;">
    <div class="row">
      <div class="col-sm-12 col-md-12">
      <table class="table table-dark table-hover">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Departamento</th>
            <th scope="col">Solicitante</th>
            <th scope="col">Assunto</th>
          </tr>
        </thead>
        <tbody>
          @forelse ($chamados ?: [] as $chamado)
            <tr>
              <th scope="row">{{$chamado->id}}</th>
              <td>{{$chamado->departamento}}</td>
              <td>{{$chamado->solicitante}}</td>
              <td>{{$chamado->assunto_detalhe}}</td>
              
            </tr>
          @empty
          <tr>
            <td colspan="6" class="text-center">Parabéns!!! Não existem chamados abertos!</td>
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
  var sucessoBtn = document.getElementById("sucesso-btn");
  sucessoBtn.addEventListener('click', function(event){
    event.preventDefault();
    console.log("gogogo");
    var id = document.getElementById('chamado-id').value;
    var url = "{{ url('/chamados') }}/"+id; //Trocando o html ':id' pelo valor real do id
    //console.log(url); 
    window.location.href = url;
  });
</script>
@endsection