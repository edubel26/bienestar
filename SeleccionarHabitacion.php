<?php
             
    class login {  
                 
        public function entrada ($documento ,$uso, $destino, $cantidad_p, $f_ini, $f_fin,  $nombre, $apellido)
        {


            include 'template/header.php';
?>
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
<?php             

                    echo'<form class="p-4" method="POST" action="VerificarHabitacion.php" enctype="multipart/form-data">';
                    
                    echo"<input required class='controls' type='hidden' name='nombre' value='$nombre $apellido'>";
                    echo'<div class="container">';
                    echo'<div class="row justify-content-center">';
                    echo'<div class="col-md-16 ">';
                    echo'<div class="card">';
                    echo'<div class="card-header">';
                    echo"<table class='table  table-striped'>";
                    echo"<thead>";
                    echo"<tr>";
                    echo" <th scope='col'></th>";
                    echo" <th scope='col'></th>";
                    echo" <th scope='col'></th>"; 
                    echo" <th scope='col'><center><h4>SOLICITUD</center></h4></th>";
                    echo"<th scope='col'></th>";
                    echo"<th scope='col'></th>";
                    echo"<th scope='col'></th>";
                    echo"<th scope='col'></th>";          
                    echo"</tr>";
                    echo"<thead>";
                    echo"  <tr>";
                    echo"   <th scope='col'>Numero de documento.</th>";
                    echo"    <th scope='col'>Nombre completo. </th>";
                    echo"    <th scope='col'>Fecha de inicio.</th>";
                    echo"    <th scope='col'>Fecha de finalización.</th>";
                    echo"    <th scope='col'>Días totales.</th>";
                    echo"    <th scope='col'>Tipo de uso.</th>";
                    echo"    <th scope='col'>Lugar de destino.</th>";
                    echo"    <th scope='col'>Total huéspedes.</th>";
                    echo"  </tr>";
                    echo"</thead>";
                    echo"<tbody>";
                    echo"<tr>"; 
                    echo"
                    <input required class='controls' type='hidden' name='documento' value='$documento'>
                    <td>$documento</td>
                    ";
                    
                    echo"<input required class='controls' type='hidden' name='nombre' value='$nombre $apellido'>";
                    
                    echo"<td>$nombre $apellido</td>";
                    
                    $fecha1= new DateTime($f_ini);
                    $fecha2= new DateTime($f_fin);
                    $diff = $fecha1->diff($fecha2);
                    echo"
                    <td name='$f_ini'>$f_ini</td>
                    <input required class='controls' type='hidden' name='f_ini' value='$f_ini'>
                    ";
                    echo"
                    <td name='$f_fin'>$f_fin</td>
                    <input required class='controls' type='hidden' name='f_fin' value='$f_fin'>
                    ";
                    echo"
                    <td>$diff->days  dias </br></td>
                    <input required class='controls' type='hidden' name='dias_total' value='$diff->days'>
                    ";

                   
                    include("conexion.php"); 

                    $sql = "SELECT * FROM uso WHERE id_uso='$uso'";
                    if(!$result = $db->query($sql)){
                    die('Hay un error corriendo en la consulta o datos no encontrados!!! [' . $db->error . ']');
                    }
                    while($row = $result->fetch_assoc())
                    {
                        $uso=stripslashes($row["uso"]);
                      
                    }

                    

                    include("conexion.php"); 

                    $sql = "SELECT * FROM destino WHERE id_destino='$destino'";
                    if(!$result = $db->query($sql)){
                    die('Hay un error corriendo en la consulta o datos no encontrados!!! [' . $db->error . ']');
                    }
                    while($row = $result->fetch_assoc())
                    {
                        $destino=stripslashes($row["destino"]);
                      
                    }

                   
                    
                    
                    include("conexion.php"); 




                    $sql = "SELECT * FROM can_acomp WHERE id_can='$cantidad_p'";
                    if(!$result = $db->query($sql)){
                    die('Hay un error corriendo en la consulta o datos no encontrados!!! [' . $db->error . ']');
                    }
                    while($row = $result->fetch_assoc())
                    {
                        $cantidad_p=stripslashes($row["can_acomp"]);
                      
                    }

                    

                    echo"
                    <td name='uso'>$uso</td>
                    <input required class='controls' type='hidden' name='uso' value='$uso'>
                    ";
                    echo"
                    <td name='destino'>$destino</td>
                    <input required class='controls' type='hidden' name='destino' value='$destino'>
                    ";
                    
                    echo"
                    <td name='cantidad_p'>$cantidad_p</td>
                    <input required class='controls' type='hidden' name='cantidad_p' value='$cantidad_p'>
                    ";
                    echo"</tr>";   
                    echo"</tbody>";
                    echo"</table>";
                    echo"<table class='table  table-striped'>";
                    echo"<thead>";
                    echo"<tr>";
                    echo" <th scope='col'></th>";
                    echo" <th scope='col'>";
                    

                    $bytes=random_bytes(3);


                    if($destino=="Bogotá"){
                    
                        $radicado="B".$documento.bin2hex($bytes);

                    }elseif($destino=="Cartagena"){
                    
                      $radicado="C".$documento.bin2hex($bytes);
                     
                      
                    }elseif($destino=="San Andrés"){
                    
                      $radicado="S.A".$documento.bin2hex($bytes);
                      
                    
                    }
                    
                    $_SESSION["radicado"]=$radicado;
                    
                    
                    
                    echo"<input required class='controls' type='hidden' name='radicado' value='$radicado'>";                  

?>

                    <div class="col-md-8 mb-3">
                    <label>Habitaciones</label>
                    <select  name="habitacion" required id="habitacion" class="multisteps-form__select form-control col-md-6 mb-3" name="mpio_nac">
                    <option value="">Seleccione habitacion</option>

                    <?php

                    include("conexion.php");                           
                            
                    $sql="SELECT * FROM habitacion WHERE destino='$destino'";
                    if(!$result = $db->query($sql)){
                    die('Hay un error corriendo en la consulta o datos no encontrados!!! [' . $db->error . ']');
                    }
                    while($row = $result->fetch_assoc())
                    {
                        
                        $habitacion=stripslashes($row["habitacion"]);
                        
                       echo $destinoo=stripslashes($row["destino"]);
                         

                            if($destino==$destinoo){
                                
                            
                                ?>    


                                    <option required name="habitacion" value="<?php echo $row['habitacion']?>"><?php echo $row['habitacion']?></option>
                        
                    
                                <?php 
 
                            }

                        
                      }    
                    echo "<center><input th class='position-absolute bottom-0 start-50 btn btn-primary' type='submit' value='Continuar'></center>"; 
                    echo"</th>";
                    echo"</tbody>";
                    echo"</table>";
                    echo'</form>';
                    echo'   <form class="p-4" method="POST" action="InicioDeSolicitud.php" enctype="multipart/form-data">';
                    echo "      <center><input th class='btn btn-primary ' type='submit' value='regresar'></center>"; 
                    echo'   </form>';
                    echo'</div>';
                    echo'</div >';
                    echo'</div >';
                    echo'</div >';                                                  
                    echo'</div>';  
                 
                    
                }//*metodo

            }//Clase
            $final=new login();
            $final->entrada($_POST["documento"], $_POST["uso"], $_POST["destino"], $_POST["cantidad_p"], $_POST["f_ini"], $_POST["f_fin"],  $_POST["nombre"], $_POST["apellido"]);
        ?>
    </body>
</html>