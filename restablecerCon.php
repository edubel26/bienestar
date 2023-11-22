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
	<?php include 'template/header_login.php' ?>
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
			      			<h3 class="mb-4">Recuperar cuenta</h3>
			      		</div>
			      	</div>
							<form action="evaluar.php" method="POST"  class="signin-form">
			      		<div class="form-group mb-3">
			      			<label class="label" for="name">correo</label>
			      			<input name="email" type="emal" class="form-control" placeholder="email" required>
			      		</div>
                          <button type="submit" class="form-control btn btn-primary rounded submit px-3">Restablecer</button>
                    </form> 
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

