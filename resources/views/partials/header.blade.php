<!DOCTYPE html>
<html>
<head>
	<title>Câmara Municipal de Palmas - Sistema de Chamados</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/css/bootstrap-grid.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/css/bootstrap-reboot.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/css/sticky-footer-navbar.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/css/font-awesome.min.css')}}">
	@yield('css')
  <link rel="stylesheet" type="text/css" href="{{asset('css/styles.css')}}">
</head>
<body>

    <header>

      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#">Sistema de Chamados</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Admin</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('suporte/chamados')}}">Chamados</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Base de Conhecimento</a>
            </li>
          </ul>
        </div>
      </nav>
    </header>
<br>

<div id="principal" style="overflow-y:scroll;">