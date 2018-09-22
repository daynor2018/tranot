@extends('layouts.inicio')

@section('contenido')

<nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Inicio</a>
    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Funciones</a>
    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Desarrollador</a>
  </div>
</nav>
<div class="tab-content" id="nav-tabContent">
  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
  <div class="card text-white bg-dark mb-12">
  <div class="card-header titleleft">Bienvenido al sistema TRANOT</div>
  <div class="card-body text-primary">
  {{-- comienzo de contenido --}}
	  	<div id="iniciocar" class="carousel slide carousel-fade" data-ride="carousel">
		  <div class="carousel-inner">
		    <div class="carousel-item active">
		    <div class="view">
		    <img class="d-block w-100" src="images/iniciocar1.jpg" alt="First slide">
		    <div class="mask rgba-black-light"></div>
		    </div>
		    <div class="carousel-caption">
		        <h3 class="h3-responsive titlecenter">Funcionalidad</h3>
		        <p class="titlecenter">Los resultados que presentan dicho software, son un uso adecuado de la información; con ello para el docente se logrará un uso eficiente y organizado de las notas del estudiante para que de esa manera pueda verse en el transcurso del semestre presente.</p>
      		</div>
		    </div>
		    <div class="carousel-item">
		    <div class="view">
		      <img class="d-block w-100" src="images/iniciocar2.jpg" alt="Second slide">
		      <div class="carousel-caption">
		        <h3 class="h3-responsive titlecenter">Funcionalidad</h3>
		        <p class="titlecenter">Los resultados que presentan dicho software, son un uso adecuado de la información; con ello para el docente se logrará un uso eficiente y organizado de las notas del estudiante para que de esa manera pueda verse en el transcurso del semestre presente.</p>
      		</div>
		    </div>
		    </div>
		    <div class="carousel-item">
		    <div class="view">
		      <img class="d-block w-100" src="images/iniciocar3.jpg" alt="Third slide">
		      <div class="carousel-caption">
		        <h3 class="h3-responsive titlecenter">Funcionalidad</h3>
		        <p class="titlecenter">Los resultados que presentan dicho software, son un uso adecuado de la información; con ello para el docente se logrará un uso eficiente y organizado de las notas del estudiante para que de esa manera pueda verse en el transcurso del semestre presente.</p>
      		</div>
		    </div>
		    </div>
		  </div>
		</div>
	</div>
	</div>
  </div>
  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">...</div>
  <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">...</div>
</div>
<br>

@endsection