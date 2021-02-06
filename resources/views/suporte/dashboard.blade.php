@extends('layouts.app')

@section('css')
  <link rel="stylesheet" type="text/css" href="{{asset('vendor/css/bootstrap-table.min.css')}}"> 
  <link rel="stylesheet" type="text/css" href="{{asset('vendor/css/Chart.min.css')}}">

@endsection

@section('content')

<main role="main" class="container">  
  	<div class="row">
    	<div class="col-sm-12 col-md-12">
	      <div class="jumbotron">
	        <div class="box-ticket">
				<form>
				  <div class="form-row">
				    <div class="form-inline col-md-12">
				      <label>Período: &nbsp;</label>
				      <select class="form-control">
				        <option selected>Mês Atual</option>
				        <option>4 Meses</option>
				        <option>6 Meses</option>
				        <option>12 Meses</option>
				      </select>
				    </div>
				  </div>
				</form>

				<div id="container" style="width: 100%;">
					<canvas id="canvas"></canvas>
				</div>

				<div class="estatisticas">
					<ul class="nav nav-tabs" id="myTab" role="tablist">
					  <li class="nav-item">
					    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Departamento</a>
					  </li>
					  <li class="nav-item">
					    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Atendente</a>
					  </li>
					</ul>
					<div class="tab-content" id="myTabContent">
					  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
					    <table class="table" id="tabela-departamento">
					      <thead class="thead-dark">
					        <tr>
					          <th scope="col">Departamento</th>
					          <th scope="col">Aberto</th>
					          <th scope="col">Encerrado</th>
					          <th scope="col">Atrasado</th>
					        </tr>
					      </thead>
					      <tbody>
					        <tr>
					          <th scope="row">Recursos Humanos</th>
					          <td>2</td>
					          <td>5</td>
					          <td>1</td>
					        </tr>
					        <tr>
					          <th scope="row">Diretoria Administrativa</th>
					          <td>1</td>
					          <td>6</td>
					          <td>2</td>
					        </tr>
					        <tr>
					          <th scope="row">Gabinete do Vereador X</th>
					          <td>1</td>
					          <td>3</td>
					          <td>3</td>
					        </tr>
					      </tbody>
					    </table>   
					  </div>
					  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
					    <table class="table" id="tabela-departamento">
					      <thead class="thead-dark">
					        <tr>
					          <th scope="col">Atendimento</th>
					          <th scope="col">Aberto</th>
					          <th scope="col">Encerrado</th>
					          <th scope="col">Atrasado</th>
					        </tr>
					      </thead>
					      <tbody>
					        <tr>
					          <th scope="row">Recursos Humanos</th>
					          <td>2</td>
					          <td>5</td>
					          <td>1</td>
					        </tr>
					        <tr>
					          <th scope="row">Diretoria Administrativa</th>
					          <td>1</td>
					          <td>6</td>
					          <td>2</td>
					        </tr>
					        <tr>
					          <th scope="row">Gabinete do Vereador X</th>
					          <td>1</td>
					          <td>3</td>
					          <td>3</td>
					        </tr>
					      </tbody>
					    </table>   
					  </div>
					</div>
				</div> <!-- estatisticas -->
			</div>
		</div>
	</div>
</main>

@endsection

@section('js')

<script type="text/javascript" src="{{asset('vendor/js/Chart.min.js')}}"></script>
<script type="text/javascript" src="{{asset('vendor/js/chart-utils.js')}}"></script>
<script type="text/javascript">

    var MONTHS = ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'September', 'October', 'November', 'December'];
    var color = Chart.helpers.color;
    var barChartData = {
      labels: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto'],
      datasets: [{
        label: 'Chamados',
        backgroundColor: color(window.chartColors.blue).alpha(1).rgbString(),
        borderColor: window.chartColors.blue,
        borderWidth: 1,
        data: [
          20,
          40,
          100,
          80,
          60,
          40,
          50,
          0
        ]
      }, {
        label: 'Atendimentos',
        backgroundColor: color(window.chartColors.green).alpha(0.7).rgbString(),
        borderColor: window.chartColors.green,
        borderWidth: 1,
        data: [
          40,
          80,
          100,
          60,
          40,
          50,
          80,
          0
        ]
      }]

    };

    window.onload = function() {
      var ctx = document.getElementById('canvas').getContext('2d');
      window.myBar = new Chart(ctx, {
        type: 'bar',
        data: barChartData,
        options: {
          responsive: true,
          legend: {
            position: 'top',
          },
          title: {
            display: true,
            text: 'Relatório Anual de Chamados'
          }
        }
      });

    };

    var colorNames = Object.keys(window.chartColors);


</script>

@endsection