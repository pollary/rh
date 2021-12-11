<!DOCTYPE html>
<html>
<head>
	<title>Secretaria de Desenvolvimento Social - Sistema de RH</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/css/bootstrap-grid.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/css/bootstrap-reboot.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/css/sticky-footer-navbar.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/css/font-awesome.min.css')}}">
  <style>
    .a-hover:hover{
      background-color: #343a40 !important;
    }

    .a-hover button{
      color:lightgray;
    }

    .a-hover button:hover{
      text-decoration: none;
      color:white;
    }
  </style>
	@yield('css')
  <link rel="stylesheet" type="text/css" href="{{asset('css/styles.css')}}">
</head>
<body>

    <header>

      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="{{url('/')}}">Sistema do RH</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav w-100">
            <li class="nav-item active">
              <a class="nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('/dashboard')}}">Admin</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('/funcionarios')}}">Funcionarios</a>
            </li>
            <li class="nav-item">
              <!--<a class="nav-link" href="#">Base de Conhecimento</a>-->
            </li>
            @auth
            <li class="nav-item dropdown ml-auto ">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> {{ Auth::user()->name }} </a>
              <ul class="dropdown-menu dropdown-menu-dark dropdown-menu-right bg-dark" aria-labelledby="navbarDropdownMenuLink">
                  <li>
                    <a class="dropdown-item a-hover" href="#">
                      <!-- Authentication -->
                      <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button class="btn btn-link" type="submit">Sair</button>
                      </form>
                    </a>
                  </li>
                </ul>
            </li>
            @endauth
          </ul>
        </div>
      </nav>
    </header>
<br>

<div id="principal" style="overflow-y:scroll;">