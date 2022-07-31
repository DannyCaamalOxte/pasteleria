@extends('layouts.app')
@section('titulo','Registro')
@section('contenido')

<!-- inicio div padre -->
<div>
	<!-- <h1>Login</h1> -->
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<!-- <div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Inicio</h2>
				</div> -->
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-5">
					<div class="login-wrap p-4 p-md-5">
		      	<!-- <div class="icon d-flex align-items-center justify-content-center">
		      		<span class="fa fa-user-o"></span>
		      	</div> -->
		      	<h3 class="text-center mb-4">Registrar nuevo usuario</h3>
						<form action="" method="POST" class="login-form">
							@csrf
							<div class="form-group">
		      			<input type="text" class="form-control rounded-left" placeholder="Nombre" id="name" name="name">
		      		</div>
		      		@error('name')

	            <p class="form-control rounded-left border-danger text-red" style="color:red;">{{$message}}</p>

	            @enderror


		      		<div class="form-group">
		      			<input type="email" class="form-control rounded-left" placeholder="Correo" id="email" name="email">
		      		</div>
		      		@error('email')

	            <p class="form-control rounded-left border-danger text-red" style="color:red;">{{$message}}</p>

	            @enderror
	            <div class="form-group d-flex">
	              <input type="password" class="form-control rounded-left" placeholder="Contraseña" id="password" name="password">
	            </div>
	            @error('password')

	            <p class="form-control rounded-left border-danger text-red" style="color:red;">{{$message}}</p>

	            @enderror
	             <div class="form-group d-flex">
	              <input type="password" class="form-control rounded-left" placeholder="Confirmar contraseña" id="password_confirmation" name="password_confirmation">
	            </div>

	            <!-- <p class="form-control rounded-left border-danger text-red" style="color:red;">Error</p> -->
	           <!--  <div class="form-group d-md-flex">
	            	<div class="w-50">
	            		<label class="checkbox-wrap checkbox-primary">Remember Me
									  <input type="checkbox" checked>
									  <span class="checkmark"></span>
									</label>
								</div>
								<div class="w-50 text-md-right">
									<a href="#">Forgot Password</a>
								</div>
	            </div> -->
	            <div class="form-group">
	            	<button type="submit" class="btn btn-dark" style="background-image: url(img/fondo4.jpg);">Registrar e iniciar</button>
	            </div>
	          </form>
	        </div>
				</div>
			</div>
			<div align="center">
      <img src="img/martha.png" width="120" height="120">
    </div>
		</div>
	</section>
	

</div>
<!-- fin div padre -->



@endsection