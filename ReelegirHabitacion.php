<?php
        
    class login {  
                 
        public function entrada ( $nombre, $documento ,$uso, $destino, $cantidad_p, $f_ini, $f_fin,  $dias_total, $radicado)
        {

            include 'template/header.php' 
?>
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
<?php             

                    echo'<form class="p-4" method="POST" action="VerificarHabitacion.php" enctype="multipart/form-data">';
                    
                    echo"<input required class='controls' type='hidden' name='nombre' value='$nombre'>";
                    
                    echo'<div class="container mt-1">';
                    echo'<div class="row justify-content-center">';
                    echo'<div class="col-md-16">';
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
                    
                    echo"<input required class='controls' type='hidden' name='nombre' value='$nombre '>";
                    
                    echo"<td>$nombre </td>";
                    
                   
                    echo"
                    <td name='$f_ini'>$f_ini</td>
                    <input required class='controls' type='hidden' name='f_ini' value='$f_ini'>
                    ";
                    echo"
                    <td name='$f_fin'>$f_fin</td>
                    <input required class='controls' type='hidden' name='f_fin' value='$f_fin'>
                    ";
                    echo"
                    <td>$dias_total  dias </br></td>
                    <input required class='controls' type='hidden' name='dias_total' value='$dias_total'>
                    ";


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
                        
                        $destinoo=stripslashes($row["destino"]);
                        

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
            $final->entrada($_GET["nombre"], $_GET["documento"], $_GET["uso"], $_GET["destino"], $_GET["cantidad_p"], $_GET["f_ini"], $_GET["f_fin"],  $_GET["dias_total"] , $_GET["radicado"]);
        ?>
    </body>
</html>
