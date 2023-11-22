<?php
session_start();


?>
<!doctype html>
<html lang="es">
  <head>
  	<title>SIBIS</title>
    <meta charset="utf-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">
	<?php include 'template/header_register.php' ?>
	</head>
	
	<body>
	
	<section class="ftco-section">
		
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section"></h2>
				</div>
				
			</div>
			<div class="row justify-content-center">
				<div class="col-md-12 col-lg-10">
					<div class="wrap d-md-flex">
						<div class="img" style="background-image: url(img/bg-1.jpg);">
			      </div>
						<div class="login-wrap p-4 p-md-5">
			      	<div class="d-flex">
			      		<div class="w-100">
			      			<h3 class="mb-4">REGISTAR A SIBIS</h3>
			      		</div>
			      	</div>
					  <form action="CrearCuenta.php" method="POST" class="signin-form" onsubmit="myButton.disabled = true; return true;">

                          <div class="form-group mb-3">
			      			<label class="label">Nombres</label>
			      			<input id="campo" onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()"
							 name="nombre" ucfirst type="text" class="form-control" placeholder="Names" required>
			      		</div>
                          <div class="form-group mb-3">
			      			<label class="label">Apellidos</label>
			      			<input id="camp" onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()"
							name="apellido" ucfirst type="text" class="form-control" placeholder="Surnames" required>
			      		</div>



						<div class="form-group mb-3"> 
							<label>Tipo documento</label>
							<select required class="form-select" placeholder="Seleccione" id="m_rec" name="tipo_doc">
								<option value="">Selecione TIPO DE DOCUMENTO</option>
								<option required class="controls" type="text" name="tipo_doc">Cédula de ciudadanía</option>
								<option required class="controls" type="text" name="tipo_doc">Cédula de extranjería</option>
								<option required class="controls" type="text" name="tipo_doc">NIUP - Registro Civil de nacimiento</option>
								<option required class="controls" type="text" name="tipo_doc">Pasaporte</option>
								<option required class="controls" type="text" name="tipo_doc">Tarjeta de identidad</option>
							</select>
						</div>

						<div class="form-group mb-3">
			      			<label class="label">Numero de documento</label>
			      			<input  name="documento" type="text" class="form-control"  maxlength="10" placeholder="Document number" required onkeypress='return validaNumericos(event)'>
							            <!---  indicador de que solo digite numeros      --->
										<script>
											function validaNumericos(event) {
												if(event.charCode >= 48 && event.charCode <= 57){
												return true;
												}
												return false;        
											}
										</script>
			      		</div>
                          <div class="form-group mb-3">
			      			<label class="label">correo electrónico DE MIGRACION COLOMBIA</label>
			      			<input  name="email" type="email" autocomplete="off"  class="form-control" placeholder="Email" required>
			      		</div>

		            <div class="form-group mb-3">
		            	<label class="label">Contraseña</label>
		              <input name="password" type="password" class="form-control" placeholder="Password" required>
		            </div>
					<div class="form-group mb-3">
		            	<label class="label">Confirmar contraseña</label>
		              <input name="password2" type="password" class="form-control" placeholder="Password" required>
		            </div>
		            <div class="form-group">
		            	<button id="myButton" type="submit"  class="form-control btn btn-primary rounded submit px-3">REGISTAR A SIBIS</button>
		            </div>
		            <div class="form-group d-md-flex">
		            	<div class="w-50 text-left">
									</div>

		            </div>
		        </form>
		          <p class="text-center">Ya tengo una cuenta? <a  href="InicioDeSesion.php">Iniciar sesion</a></p>
		        </div>
		      </div>
				</div>
			</div>
		</div>
	</section>
	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

