<?php 
session_start();
    include ("conexionUno.php");
    $email =$_GET['email'];
    $token =$_GET['token'];
    $codigo =$_GET['codigo'];
    $res=$conexion->query("select * from passwords where 
    email='$email' and token='$token' and codigo=$codigo")or die($conexion->error);
    $correcto=false;
	
    if(mysqli_num_rows($res) > 0){
		
        $fila = mysqli_fetch_row($res);
        $fecha =$fila[4];
        $fecha_actual=date("Y-m-d h:m:s");
        $seconds = strtotime($fecha_actual) - strtotime($fecha);
        $minutos=$seconds / 60;
        $correcto=true;
		
    }else{
        $correcto=false;

    }  

?>
<!doctype html>
<html lang="en">
  <head>
  	<title></title>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">
	
	</head>
	
	<body>
	<?php include 'template/headerverificacion.php' ?>
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
			      			<h3 class="mb-4">Cambio de Contraseña</h3>
			      		</div>
			      	</div>
					  <?php if($correcto){ ?>
							<form action="nuevacontra.php" method="POST"  class="signin-form">
							<input type="hidden" class="form-control" id="c2" name="email" value="<?php echo $email?>">
							<input type="hidden" class="form-control" id="c4" name="token" value="<?php echo $token?>">
							<input type="hidden" class="form-control" id="c3" name="codigo" value="<?php echo $codigo?>">
			      		<div class="form-group mb-3">
			      			<label class="label" for="password">Nueva Contraseña</label>
			      			<input name="p1" type="password" class="form-control" placeholder="password" required>
			      		</div>
		            <div class="form-group mb-3">
		            	<label class="label" for="password">Confirmar Contraseña</label>
		              <input name="p2" type="password" class="form-control" placeholder="Password" required>
		            </div>
					
		            <div class="form-group">
		            	<button type="submit" class="form-control btn btn-primary rounded submit px-3">Restablecer contraseña</button>
		            </div>
		            <div class="form-group d-md-flex">
		            	<div class="w-50 text-left">

									</div>

		            </div>
		          </form>
		        <?php }else{ ?>
                <div class="alert alert-danger" >Código incorrecto o vencido</div>
            	<?php } ?>
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


