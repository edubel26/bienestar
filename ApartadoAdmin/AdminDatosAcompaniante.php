<?php
include ("seguridad_admin.php");

$radicado=$_POST["radicado"];
?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<link rel="stylesheet" href="assets/css/style.css">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <title>SIBIS</title>
  <!-- Required meta tags -->
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS v5.0.2 -->
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

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
            ACTIVIDADES
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="AdminAutorizacion.php">Autorización de alojamiento</a>
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

                    <div class=""><?php echo $_SESSION["email"];?></div>
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
<!-- /////// header  /////// -->
<div class="container p-4 ml-5">
    <div class="text-wrap">
        <div class="col-md-200">
            <div class="card ">
                <div class="card-header table-responsive">
                    <div class="row table-responsive">

                        <div class="p-5 ">
                           <center><h4 >Confirmacion de datos.</h4> </center> 
                        </div>
                    </div>
                    <?php
                    
                    $cont="0";

                    include("../conexion.php");  
                    
                    $sql="SELECT * FROM solicitud WHERE radicado='$radicado'";
                    if(!$result = $db->query($sql)){
                    die('Hay un error corriendo en la consulta o datos no encontrados!!! [' . $db->error . ']');
                    }
                    while($row = $result->fetch_assoc())
                    {
                    $radicado=stripslashes($row["radicado"]);
                    
                    
                    $cont=$cont+1;			
                    }

                    if($cont > 0){


                        echo'<table class="table table-bordered ">';
                        echo'<thead>';
                        echo'    <tr>';
                        echo'       <th scope="col" colspan="6"><center>Datos del huéspedes</center></th>';
                        echo"       <th scope='col' ><center>
                        <form action='AdminCambioEstado.php' method='POST'>
                            <input type='hidden' name='radicado' value='$radicado'>  
                        <button class='btn btn-primary'>acualizar</button>
                        </form>
                        </center></th>";
                        $_SESSION["radicado"]=$radicado;
                        echo'    </tr>';
                        echo'</thead>';
                        echo'<thead>';
                        echo'    <tr>';
                        echo'       <th scope="col"> Estado de la reserva</th>';
                        echo'       <th scope="col"> Habitación </th>';
                        echo'       <th scope="col"> Fecha de inicio </th>';
                        echo'       <th scope="col"> Fecha de finalización </th>';
                        echo'       <th scope="col"> Dias totales </th>';
                        echo'       <th scope="col"> Tipo de uso </th>';
                        echo'       <th scope="col"> Huéspedes </th>';
                        echo'    </tr>';
                        echo'</thead>';
                        echo'<tbody >';

                        include("../conexion.php");

                        $sql = "SELECT * FROM solicitud WHERE  radicado='$radicado' ";  
                        if(!$result = $db->query($sql)){
                        die('Hay un error corriendo en la consulta o datos no encontrados!!! [' . $db->error . ']');
                        }while($row = $result->fetch_assoc()){ 

                            $habitacion=stripslashes($row["habitacion"]);
                            $cantidad_p=stripslashes($row["cantidad_p"]);
                            $uso=stripslashes($row["uso"]);
                            $f_ini=stripslashes($row["f_ini"]);
                            $f_fin=stripslashes($row["f_fin"]);
                            $fk_id_Estado_Solicitud=stripslashes($row["fk_id_Estado_Solicitud"]);
                            $dias_total=stripslashes($row["dias_total"]);

                        }

                        include("../conexion.php");

                        $sql = "SELECT * FROM acompaniante WHERE  radicado='$radicado'";  
                        if(!$result = $db->query($sql)){
                        die('Hay un error corriendo en la consulta o datos no encontrados!!! [' . $db->error . ']');
                        }while($row = $result->fetch_assoc()){ 

                            $automovil=stripslashes($row["automovil"]);
                        }


                        include("../conexion.php");

                        $sql = "SELECT * FROM medio_trasporte WHERE  radicado='$radicado'";  
                        if(!$result = $db->query($sql)){
                        die('Hay un error corriendo en la consulta o datos no encontrados!!! [' . $db->error . ']');
                        }while($row = $result->fetch_assoc()){ 

                            $medio_tras=stripslashes($row["medio_tras"]);
                            $placa=stripslashes($row["placa"]);
                            $color=stripslashes($row["color"]);
                            $modelo=stripslashes($row["modelo"]);
                        }

                        echo'<tbody>';
                        echo'    <tr>';
                        echo"       <td> $fk_id_Estado_Solicitud </td>";
                        echo"       <td> $habitacion </td>";
                        echo"       <td> $f_ini </td>";
                        echo"       <td> $f_fin </td>";
                        echo"       <td> $dias_total </td>";
                        echo"       <td> $uso </td>";
                        echo"       <td> $cantidad_p</td>";
                        echo'    </tr>';
                        echo'</tbody>';
                        echo'<thead>';
                        

                        $correcto=false;

                        if($automovil=="si"){

                            $correcto=true;   

                        }else{

                            $correcto=false;

                        }
                        if($correcto){
                            echo'    <tr>';
                            echo'       <th scope="col"> Medio de trasporte </th>';
                            echo'       <th scope="col">Tipo de trasporte</th>';
                            echo'       <th scope="col">Placa</th>';
                            echo'       <th scope="col">Color</th>';
                            echo'       <th scope="col">Modelo</th>'; 
                            echo'    </tr>';
                            echo'</thead>'; 
                            echo'<thead>';
                            echo"    <tr>";
                            echo"    <td> $automovil </td>";
                            echo"    <td> $medio_tras </td>";
                            echo"    <td> $placa </td>";
                            echo"    <td> $color </td>";
                            echo"    <td> $modelo </td>";
                            echo'    </tr>';
                            echo'</tbody>';
                        

                        echo'    </tr>';
                        echo'</tbody>';
                    }
                    echo'<thead>';
                    echo'    <tr>';
                    echo'       <th scope="row" colspan="8"><center>Huéspedes</center></th>';
                    echo'    </tr>';
                    echo'</thead>';
                    echo'<thead>';
                    echo'    <tr>';
                    echo'       <th scope="col" colspan="2"> Nombre completo</th>';
                    echo'       <th scope="col" colspan="2"> Tipo de documento</th>';
                    echo'       <th scope="col"> Documento </th>';
                    echo'       <th scope="col"> Tipo EPS</th>';
                    echo'       <th scope="col"> PDF Documento</th>';
                    echo'    </tr>';
                    echo'</thead>';

                    include("../conexion.php");

                    $sql = "SELECT * FROM acompaniante WHERE  radicado='$radicado' ";  
                    if(!$result = $db->query($sql)){
                    die('Hay un error corriendo en la consulta o datos no encontrados!!! [' . $db->error . ']');
                    }while($row = $result->fetch_assoc()){ 

                        $tipo_doc=stripslashes($row["tipo_doc"]); 
                        $documento=stripslashes($row["documento"]); 
                        $documento=stripslashes($row["documento"]); 
                        $nombre=stripslashes($row["nombre"]);
                        $apellido=stripslashes($row["apellido"]);
                        $eps_afiliado=stripslashes($row["eps_afiliado"]);
                        $automovil=stripslashes($row["automovil"]);
                        $pdf_doc=stripslashes($row["pdf_doc"]);
                        
                        
                        include("AdminVisualizacionPdf.php");

                        $imagen=$folder.$pdf_doc; 
                       
                        echo'    <tr>';
                        echo"    <td colspan='2'> $nombre  $apellido </td>";
                        echo"    <td colspan='2'> $tipo_doc </td>";
                        echo"    <td> $documento </td>";
                        echo"    <td> $eps_afiliado</td>";
                        echo"    <td>";
                        echo"<address>
                            <a href='$imagen 'target='_blank' >$pdf_doc</a>    
                             </address>";
                        echo"    </td>";                            
                        echo'    </tr>';
                        echo'</tbody>';
                    }
                    
                    include("../conexion.php");

                    $sql = "SELECT * FROM invitados WHERE radicado='$radicado'";  
                    if(!$result = $db->query($sql)){
                    die('Hay un error corriendo en la consulta o datos no encontrados!!! [' . $db->error . ']');
                    }
                    $existe="0";
                    while($row = $result->fetch_assoc())
                
                    { 
                        $radicado=stripslashes($row["radicado"]);
                        $existe=$existe+1;
                    }
                        $correcto=false;
                                                        
                        if($existe!=="0"){
                
                            $correcto=true;
                
                        }else{
                            $correcto=false;
                        }
                
                
                        if($correcto){
                
                          include("ApartadoAdminlistaInvitados.php");

                        }

                    echo'<thead>';
                    echo'    <tr>';
                    echo'       <th scope="row" colspan="8"><center><a href="AdminAutorizacion.php">volver</a></center></th>';
                    echo'    </tr>';
                    echo'</thead>';
                    echo'</table>';

                        


                    }else{
                        echo'
                            <script>
                                alert(! ERROR ¡Radicado no existe! ");
                                window.location="AdminAutorizacion.php";                         
                            </script>
                            exit;
                        ';
                    }

                    ?>
                    
                </div>
            </div>
        </div>
    </div>
</div>  
</body>
</html>