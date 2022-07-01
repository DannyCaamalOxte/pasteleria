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
        <p class="card-text">Acceda para administrar las ventas de las diferentes sucursales.</p>
        <a href="ventas" class="btn btn-primary" style="background-image: url(img/fondo4.jpg);">Kimbila</a>
        <a href="ventasc" class="btn btn-primary" style="background-image: url(img/fondo4.jpg);">Citilcum</a>
        <a href="ventast" class="btn btn-primary" style="background-image: url(img/fondo4.jpg);">Tekanto</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card card border-warning">
      <div class="card-body">
        <h5 class="card-title">Inventario y administración de los productos</h5>
        <p class="card-text">Acceda para administrar todos los postres y productos de las sucursales.</p>
        <a href="productos" class="btn btn-primary" style="background-image: url(img/fondo4.jpg);">kimbila</a>
        <a href="productosc" class="btn btn-primary" style="background-image: url(img/fondo4.jpg);">Citilcum</a>
        <a href="productost" class="btn btn-primary" style="background-image: url(img/fondo4.jpg);">Tekanto</a>
      </div>
    </div>
  </div>
</div>
<br>
<div class="row">
  <div class="col-sm-6">
    <div class="card card border-danger">
      <div class="card-body">
        <h5 class="card-title">Historial de ventas</h5>
        <p class="card-text">Acceda para administrar las ventas de las sucursales.</p>
        <a href="ventasHechas" class="btn btn-primary" style="background-image: url(img/fondo4.jpg);">Kimbila</a>
        <a href="ventasHechasc" class="btn btn-primary" style="background-image: url(img/fondo4.jpg);">Citilcum</a>
        <a href="ventasHechast" class="btn btn-primary" style="background-image: url(img/fondo4.jpg);">Tekanto</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card card border-info">
      <div class="card-body">
        <h5 class="card-title">Pedidos</h5>
        <p class="card-text">Acceda para adminstrar y ver los pedidos de las sucursales.</p>
        <a href="pedidos" class="btn btn-primary" style="background-image: url(img/fondo4.jpg);">Aceeder</a>
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
      <div align="center">
      <img src="img/martha.png" width="120" height="120">
    </div>

	

 


	</div>
	<!-- TERMINA VUE -->

	
@endsection

@push('scripts')
	<script type="text/javascript" src="js/vue-resource.js"></script>
	<script type="text/javascript" src="js/apis/apiProducto.js"></script>
@endpush

<input type="hidden" name="route" value="{{url('/')}}">