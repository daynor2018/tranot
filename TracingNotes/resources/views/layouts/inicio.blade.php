<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/welcome.css">
</head>
<body>
	<div class="container-fluid">
		<div class="row banner">
			<div class="col-lg-2 text-center">
				<img class="logo" src="images/logo2.png">
			</div> 
			<div class="col-lg-6 titleleft">
				<nav class="navbar navbar-expand-lg navbar-dark">
				<a class="navbar-brand" href="#">TRANOT</a>
				<ul class="navbar-nav">
					<li class="nav-item"><a class="nav-link disabled" >Sistema de seguimiento para gestionar y verificar notas</a></li>
				</ul>
				</nav>				
			</div>
			<div class="col-lg-4 titleright">
				<nav class="navbar navbar-expand-lg navbar-dark">
					  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
					    <span class="navbar-toggler-icon"></span>
					  </button>
					  <div class="collapse navbar-collapse" id="navbarNavDropdown">
					    <ul class="navbar-nav ml-auto">
					      <li class="nav-item">
					        <a class="nav-link" href="#">CONTACTOS</a>
					      </li>
					      <li class="nav-item dropdown">
					        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					          INGRESO
					        </a>
					        <div class="dropdown-menu dropdown-menu-right bg-warning" aria-labelledby="navbarDropdownMenuLink">
					          <a class="dropdown-item disabled" href="#">ESTUDIANTE</a>
					          <a class="dropdown-item disabled" href="#">DOCENTE</a>
					        </div>
					      </li>
					    </ul>
					  </div>
					</nav>
			</div>
		</div>
		<div class="row">
		<div class="col-lg-12">
			@yield('contenido')
			</div>
		</div>
	<div class="row">
		<div class="container-fluid banner">
      		<div class="footer-copyright text-center py-2">© 2018 Copyright:<a href="#"> unifranz.edu.bo</a>
      		</div>
		</div>
	</div>
	<script src="jquery/jquery-3.3.1.slim.min.js"></script>
	<script src="popper/popper.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>	
</body>
</html>