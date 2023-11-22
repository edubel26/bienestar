<!DOCTYPE html>
<html lang="en">

<?php
session_start();

if(isset($_GET['radicado']) && isset($_GET['documento'])){
    $radicado =$_GET['radicado'];
	$documento =$_GET['documento'];
    

}else{
    header("location:../../login.php");
}
?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<link rel="stylesheet" href="assets/css/style.css">

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 
<!-- /////// header  /////// -->
<div class="container p-4 ml-5">
    <div class="text-wrap">
        <div class="col-md-200">
            <div class="card table-responsive ">
                <div class="card-header table-responsive">
                    <div class="row">

                        <div class="p-5 ">
                           <center><h4 >Confirmacion de datos.</h4> </center> 
                        </div>
                    </div>
                    <?php
                    
                 
                  
                    $cont="0";

                    $radicado=$_GET["radicado"];
                    
                    $_SESSION["radicado"]=$radicado;

                    include("../../conexion.php");  
                    
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


                        echo'<table class="table table-bordered table-responsive">';
                        echo'<thead>';
                        echo'    <tr>';
                        echo'       <th scope="col" colspan="5"><center>Datos del funcionario</center></th>';
                        echo"       <th scope='col' ><center>
                        <form action='AdminActualizarEstado.php' method='POST'>
                            <input type='hidden' name='radicado' value='$radicado'>
                        <button class='btn btn-primary'>acualizar</button>
                        </form>
                        </center></th>";
                        echo'    </tr>';
                        echo'</thead>';
                        echo'<thead>';
                        echo'    <tr>';
                        echo'       <th scope="col"> Estado de la reserva</th>';
                        echo'       <th scope="col"> Habitación </th>';
                        echo'       <th scope="col"> Fecha de inicio </th>';
                        echo'       <th scope="col"> Fecha de finalización </th>';
                        echo'       <th scope="col"> Fecha de la solicitud  </th>';
                        echo'       <th scope="col"> Huéspedes </th>';
                        echo'    </tr>';
                        echo'</thead>';
                        echo'<tbody >';

                        include("../../conexion.php");

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
                            $fecha_de_solicitud=stripslashes($row["fecha_de_solicitud"]);
                            

                        }

                        include("../../conexion.php");

                        $sql = "SELECT * FROM acompaniante WHERE  radicado='$radicado'";  
                        if(!$result = $db->query($sql)){
                        die('Hay un error corriendo en la consulta o datos no encontrados!!! [' . $db->error . ']');
                        }while($row = $result->fetch_assoc()){ 

                            $automovil=stripslashes($row["automovil"]);
                        }


                        include("../../conexion.php");

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
                        echo"       <td> $fecha_de_solicitud</td>";
                        echo"       <td> $cantidad_p </td>";
                        echo'    </tr>';
                        echo'</tbody>';
                        $correcto=false;

                        if($automovil=="si"){

                            $correcto=true;   

                        }else{

                            $correcto=false;

                        }
                        if($correcto){
                            echo'<thead>';
                            echo'    <tr>';
                            echo'       <th scope="col"> Medio de trasporte </th>';

                            echo'    <th scope="col">Tipo de trasporte</th>';
                            echo'    <th scope="col">Placa</th>';
                            echo'    <th scope="col">Color</th>';
                            echo'    <th scope="col">Modelo</th>'; 
                            echo'    </tr>';
                            echo'</thead>';
                            echo'</tbody>';
                            echo"    <tr>";
                            echo"    <td> $automovil </td>";
                            echo"    <td> $medio_tras </td>";
                            echo"    <td> $placa </td>";
                            echo"    <td> $color </td>";
                            echo"    <td> $modelo </td>";
                            echo'    </tr>';
                            echo'</tbody>';
                        }else{

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
                    echo'       <th scope="col"> Tipo de documento</th>';
                    echo'       <th scope="col"> Documento </th>';
                    echo'       <th scope="col"> Tipo EPS</th>';
                    echo'       <th scope="col"> PDF Documento</th>';
                    
                    echo'    </tr>';
                    echo'</thead>';



                    include("../../conexion.php");

                    $sql = "SELECT * FROM acompaniante WHERE  radicado='$radicado' ";  
                    if(!$result = $db->query($sql)){
                    die('Hay un error corriendo en la consulta o datos no encontrados!!! [' . $db->error . ']');
                    }while($row = $result->fetch_assoc()){ 

                        $tipo_doc=stripslashes($row["tipo_doc"]); 
                        $documento=stripslashes($row["documento"]); 
                        $no_documento=stripslashes($row["no_documento"]); 
                        $nombre=stripslashes($row["nombre"]);                        
                        $apellido=stripslashes($row["apellido"]);                        
                        $eps_afiliado=stripslashes($row["eps_afiliado"]);
                        $automovil=stripslashes($row["automovil"]);
                        $pdf_doc=stripslashes($row["pdf_doc"]);
                        
                        include ("AdminVisualizacionPdf.php");

                        $imagen=$folder.$pdf_doc; 
                       
                        echo'    <tr>';
                        echo"    <td colspan='2'> $nombre $apellido</td>";
                        echo"    <td> $tipo_doc </td>";
                        echo"    <td> $no_documento </td>";
                        echo"    <td> $eps_afiliado</td>";
                        echo"    <td >";
                        echo"<address>
                                <a href='$imagen 'target='_blank' >$pdf_doc</a>    
                             </address>";
                        echo"    </td>";                            
                        echo'    </tr>';
                        echo'</tbody>';
                      } 
                      ?>
                        <script >
                            sessionStorage.setItem(${radicado});
                            var data = sessionStorage.getItem(${radicado});
                        </script>
                        
                    <?php

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

                                include("AdminlistaInvitados.php");

                            }
                      

                    }else{
                        echo'
                            <script>
                                alert(! ERROR ¡Radicado no existe! ");
                                window.location="../../Index.php";                         
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