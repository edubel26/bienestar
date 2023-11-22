<?php include ("seguridadIngresoCabania.php");

$_SESSION["documen"];

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

<?php 
include("../conexion.php");

  if (!isset($_POST['buscar'])){$_POST['buscar'] = '';}
  if (!isset($_REQUEST["mostrar_todo"])){$_REQUEST["mostrar_todo"] = '';}

?>

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
            <a class="dropdown-item" href="IngresoCabaniabusqueda.php">Búsqueda de solicitudes</a>
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
<!-- /////// header  /////// -->


<div class="container mt-5">
<div class="col-12 ">
<div class="card">
                <div class="card-header">
                    BIENESTAR SOCIAL & SST | PROCESO INGRESO DE HUÉSPEDES. 
                </div>
                <div class="p-4">



                    <div class="">
                        <!--o-->
                        <div class="">
                            <!--informacion sobre pautas para poder reservar-->
                            
                            <h4><CENTER>ANTES DE DAR INGRESO A LOS VISITANTES TENGA EN CUENTA :</CENTER></h4>
                            <br/>
                            - Solicitar número de documento o radicado de la solicitud del funcionario. <br/>
                            - Solicitar los documentos de los acompañantes para verificacion de datos.<br/>
                            - Solo se da ingreso ha los funcionarios, acompañantes que estén registrados en la página web y que tengan los mismos datos del documento registrado.<br/>
                            - No se permite dar ingreso ha acompañantes que pasen el limite acordado en la reserva.   

                            <hr />

<form method="POST" action="IngresoCabaniabusqueda.php">
<div class="mb-3">
<label class="form-label">Buscar por N°Documento o radicado:</label>
<input autocomplete="off" type="text" class="form-control" id="buscar" name="buscar" value="<?php echo $_POST['buscar']; ?>">
</div>

<div class="row">
    <div class="col-12 col-md-7">
        <button type="text" class="btn btn-primary">Buscar</button>
        </form>
    </div>
  
</div>
<!-- Columns start at 50% wide on mobile and bump up to 33.3% wide on desktop -->
<div class="row">


</div>


  </div>


<div class="card col-12 mt-0 border-0">
<div class="card-body border-0">
<!-- ////////////////////////////////  -->

<table class="table table-striped">
    <thead>
        <tr>
        <th scope="col"></th>        
        <th scope="col"></th>        
        <th scope="col"></th>
        <th scope="col"></th>     
        <th scope="col" colspan="3"><center>Visitantes</center></th>
        <th scope="col"></th>
        <th scope="col"></th>
        <th scope="col"></th>
        
        
      </tr>
    </thead>
    <thead>
      <tr>
       <th scope="col">#</th>
       <th scope="col">Nombre completo</th>
       <th scope="col">Documento</th>
       <th scope="col">Radicado</th>
       <th scope="col">Destino</th>
       <th scope="col">Estado de la solicitud</th>
       <th scope="col">Tipo de uso</th>
       <th scope="col">Fecha de la solicitud</th>
       <th scope="col">Fecha de finalización</th>
       <th scope="col">Revisión de huéspedes.</th>
       
       </tr>
    </thead>
<?php 
if(!empty($_POST))
{

        // resaltamos el resultado
        function resaltar_frase($string, $frase, $taga = '', $tagb = ''){
            return ($string !== '' && $frase !== '')
            ? preg_replace('/('.preg_quote($frase, '/').')/i'.('true' ? 'u' : ''), $taga.'\\1'.$tagb, $string)
            : $string;
             }
    
  
      $aKeyword = explode(" ", $_POST['buscar']);
      $filtro = "WHERE nombre LIKE LOWER('%".$aKeyword[0]."%') OR documento LIKE LOWER('%".$aKeyword[0]."%') OR radicado LIKE LOWER('%".$aKeyword[0]."%' OR destino LIKE LOWER('%".$aKeyword[0]."%' OR fk_id_Estado_Solicitud LIKE LOWER('%".$aKeyword[0]."%') OR f_ini LIKE LOWER('%".$aKeyword[0]."%')";
      $query ="SELECT * FROM solicitud WHERE nombre LIKE LOWER('%".$aKeyword[0]."%') OR documento LIKE LOWER('%".$aKeyword[0]."%') OR radicado LIKE LOWER('%".$aKeyword[0]."%') OR destino LIKE LOWER('%".$aKeyword[0]."%')";
  

     for($i = 1; $i < count($aKeyword); $i++) {
        if(!empty($aKeyword[$i])) {
            $query .= "OR nombre LIKE '%" . $aKeyword[$i] . "%'  OR documento LIKE '%" . $aKeyword[$i] . "%' OR radicado LIKE '%" . $aKeyword[$i] . "%' OR destino LIKE '%" . $aKeyword[$i] . "%' OR fk_id_Estado_Solicitud LIKE '%" . $aKeyword[$i] . "%' OR uso LIKE '%" . $aKeyword[$i] . "%' OR f_ini LIKE LOWER('%".$aKeyword[0]."%')";
        }
      }
     
     $result = $db->query($query);
     $numero = mysqli_num_rows($result);
     if (!isset($_POST['buscar'])){
     echo "Has buscado la palabra:<b> ". $_POST['buscar']."</b>";
     }

     if( mysqli_num_rows($result) > 0 AND $_POST['buscar'] != '') {
        $row_count=0;
        echo "<br>Resultados encontrados:<b> ".$numero."</b>";
        
        While($row = $result->fetch_assoc()) {   
            $row_count++;   
            echo "<tr><td>".$row_count."</td><td>". resaltar_frase($row['nombre'] ,$_POST['buscar']) . "</td><td>". resaltar_frase($row['documento'] ,$_POST['buscar']) . "</td><td>". resaltar_frase($row['radicado'] ,$_POST['buscar']) . "</td><td>". resaltar_frase($row['destino'] ,$_POST['buscar']) . "</td>
            <td>". resaltar_frase($row['fk_id_Estado_Solicitud'] ,$_POST['buscar']) . "</td><td>". resaltar_frase($row['uso'] ,$_POST['buscar']) . "</td><td>". resaltar_frase($row['f_ini'] ,$_POST['buscar']) ."</td><td>". resaltar_frase($row['f_fin'] ,$_POST['buscar']) . "</td>";
        $radicado=resaltar_frase($row['radicado'] ,$_POST['buscar']);

            
            echo" 
            <td>
              <form  action='IngresoCabaniaDatosSolicitud.php' method='POST'>
                <input type='hidden'  name='radicado' value='$radicado'>
                <button class='btn btn btn-primary'>Ver</button>
              </form>
            </td>
            </tr>";}
            
        echo "</table>";
	
    }
    else {
      //mostramos todos los resultados
      if( $_REQUEST["mostrar_todo"] == 'ok') {
        $row_count=0;
        echo "<br>Resultados encontrados:<b> ".$numero."</b>";
        
        While($row = $result->fetch_assoc()) {   
            $row_count++;   
            echo "<tr><td>".$row_count." </td><td>". resaltar_frase($row['nombre'] ,$_POST['buscar']) . "</td><td>". resaltar_frase($row['documento'] ,$_POST['buscar']) . "</td><td>". resaltar_frase($row['radicado'] ,$_POST['buscar']) . "</td><td>". resaltar_frase($row['destino'] ,$_POST['buscar']) . "</td>
            <td>". resaltar_frase($row['fk_id_Estado_Solicitud'] ,$_POST['buscar']) . "</td><td>". resaltar_frase($row['f_ini'] ,$_POST['buscar']) . "</td><td>". resaltar_frase($row['f_fin'] ,$_POST['buscar']) . "</td></tr> ";
        }

        
        echo "</table>";
	
    }
    }
}


?>


</div>
</div>

</div>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/js/bootstrap.min.js"></script>
</body>
</html>