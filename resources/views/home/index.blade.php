@extends('layouts.app')

@section('content')

<main role="main" class="container">
      
  <div class="container main-container">
    <div class="row">
      <div class="col-sm-6 col-md-6 card-center">
        <a href="{{ route('chamados.create') }}">
        <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
          <div class="card-header">Cadastrar Novo Funcionario</div>
          <div class="card-body">
            <h5 class="card-title"><i class="fa fa-ticket fa-big" aria-hidden="true"></i></h5>
          </div>
        </div>
        </a>
      </div>
      <div class="col-sm-6 col-md-6 card-center">
        <a href="#" id="status-btn" data-toggle="modal" data-target=".bd-example-modal-sm">
        <div class="card text-white bg-teal mb-3" style="max-width: 18rem;">
          <div class="card-header">Consultar Funcionario</div>
          <div class="card-body">
            <h5 class="card-title"><i class="fa fa-book fa-big" aria-hidden="true"></i></h5>
          </div>
        </div>
      </a>
      </div>
    </div>
  </div>

</main>

<div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title w-100 text-center">Nome Do Funcionario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <input type="text" class="form-control" id="chamado-id">
          </div>
          <div class="form-group text-center">
            <button type="button" class="btn btn-success bg-teal" id="sucesso-btn">Acessar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

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