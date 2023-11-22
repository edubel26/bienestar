<?php
include ("seguridad_admin.php");

$_SESSION["documen"];
?>
<!doctype html>
<html lang="es">


<?php


$ddocumento=$_SESSION["documen"]; 

include("../conexion.php");

$sql = "SELECT * FROM usuario WHERE documento='$ddocumento'";  

if(!$result = $db->query($sql)){
die('Hay un error corriendo en la consulta o datos no encontrados!!! [' . $db->error . ']');
}
while($row = $result->fetch_assoc())
{

  $nombre=stripslashes($row["nombre"]);
  $apellido=stripslashes($row["apellido"]);
  $email=stripslashes($row["email"]);

  $_SESSION["nombre"]=$nombre;  
  $_SESSION["apellido"]=$apellido; 
  $_SESSION["email"]=$email; 

}   
?>
                    
   
<body>
  <div class="container-fluid bg-warning">
    <div class="row">
      <div class="col-md">
        <header class="py-2">
          <h3 class="text-center">SIBIS - Sistema Información BIENESTAR & SST</h3>
        </header>
      </div>
    </div>
  </div>

  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- bootstrap 4 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
    <!-- Estilos Internos -->
    
  </head>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
            ACTIVIDADES
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="AdminAutorizacion.php">Actualizar permisos</a>
          </div>
        </li>
      </ul>
    </div>
    <!-- ----- espacio------  -->  
     <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
      </ul>
    </div>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
      </ul>
    </div>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
      </ul>
    </div>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
      </ul>
    </div>
    <!-- -----  fin espacio------  -->
    <div class="collapse navbar-collapse" id="navbarNavDropdown"> 
      <!-- ----- definir si va o no va el nombre ------  -->
      <ul class="navbar-nav">
        <li class="nav-item dropdown no-caret dropdown-user me-3 me-lg-4">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
          <img class="img-fluid" src="../img/ajustes.png">
          </a>
          <div class="dropdown-menu dropdown-menu-end border-0 dropdown-menu-end border-0 shadow" data-bs-popper="static" aria-labelledby="navbarDropdownMenuLink">
            <h6 class="dropdown-header d-flex align-items-center">
                <img class="nav-link dropdown-toggle" src="../img/usuario.png">
                <div class="dropdown-user-details">
                    <div class="dropdown-user-details-name"><?php echo $_SESSION["nombre"] ?> <?php echo $_SESSION["apellido"] ?></div>

                    <div class=""><?php echo $_SESSION["email"] ?></div>
                </div>
            </h6><div class="dropdown-divider"></div>

            <a class="dropdown-item" href="salir.php">Salir</a>
          </div>
        </li>

      </ul>
    </div>
  </nav>
  </ul>
  </div>
  </nav>