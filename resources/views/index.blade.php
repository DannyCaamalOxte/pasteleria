@extends('layouts.master')
@section('titulo','Inicio')
@section('contenido')
	
	<!-- INICIA VUE -->
	<div id="index">

		<!--inicio de card-->
			<div class="row">
  <div class="col-sm-6">
    <div class="card card border-success">
      <div class="card-body">
        <h5 class="card-title">Admnistrador de ventas</h5>
        <p class="card-text">acceda para administrar las ventas.</p>
        <a href="ventas" class="btn btn-primary">Ir a panel de ventas</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card card border-warning">
      <div class="card-body">
        <h5 class="card-title">Administrador de postres</h5>
        <p class="card-text">acceda para administrar todos los postres.</p>
        <a href="productos" class="btn btn-primary">Ir a panel de postres</a>
      </div>
    </div>
  </div>
</div>
<br>
<div class="row">
  <div class="col-sm-6">
    <div class="card card border-danger">
      <div class="card-body">
        <h5 class="card-title">Special title treatment</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="ventas" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card card border-info">
      <div class="card-body">
        <h5 class="card-title">Special title treatment</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="productos" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>
</div>
<br>
			<div class="row">
				<div class=" col-sm-6 card border-success" style="max-width: 18rem;">
  <div class="card-header">Header</div>
  <div class="card-body text-success">
    <h5 class="card-title">Success card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
				
			</div>


			<!--fin de card-->

	

 


	</div>
	<!-- TERMINA VUE -->

	
@endsection

@push('scripts')
	<script type="text/javascript" src="js/vue-resource.js"></script>
	<script type="text/javascript" src="js/apis/apiProducto.js"></script>
@endpush

<input type="hidden" name="route" value="{{url('/')}}">