<?php include 'template/header.php' ?>


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">





<?php

$documento=$_SESSION["documen"];

                       
    echo'<div class="container-xxl p-5">';
    echo'<div class="row " >';
    echo'<div class="col-md-16">';
    echo'<div class="card">';
    echo'<div class="card-header">';
    echo'<table class="table  table-responsive">';
    echo'<thead>';
    echo'    <tr>';       
    echo'    <th></th>';
    echo'    <th></th>';  
    echo'    <th></th>';     
    echo'    <th colspan="3"><center>Mis solicitudes</center></th>';
    echo'    <th></th>';
    echo'    <th></th>';
    echo'    <th></th>';
    echo'    <th></th>';
    echo'   </tr>';
    echo'</thead>';

    

    include ("conexion.php");

    $sql = "SELECT * FROM usuario WHERE documento='$documento'";
    if(!$result = $db->query($sql)){
     die('Hay un error corriendo en la consulta o datos no encontrados!!! [' . $db->error . ']');
            }
        while($row = $result->fetch_assoc())
        {
            $nombre=stripslashes($row["nombre"]);
            $apellido=stripslashes($row["apellido"]);
        } 
        
    echo'<thead>';
    echo'   <tr>';
    echo'   <th>Documento</th>';
    echo'   <th>Tipo de uso</th>';
    echo'   <th>Destino</th>';
    echo'   <th colspan="2">Habitacion de la reserva </th>';
    echo'   <th>Fecha inicio</th>';
    echo'   <th>Fecha finalización</th>';
    echo'   <th>Estado de la reserva</th>';
    echo'   <th></th>';
    echo'   <th></th>';
    echo'   </tr>';
    echo'</thead>';

    
    
    include ("conexion.php");
    $sql = "SELECT * FROM solicitud WHERE documento='$documento'";
    if(!$result = $db->query($sql)){
     die('Hay un error corriendo en la consulta o datos no encontrados!!! [' . $db->error . ']');
            }
        while($row = $result->fetch_assoc())
        {
            $documento=stripslashes($row["documento"]);
            $uso=stripslashes($row["uso"]);
            $destino=stripslashes($row["destino"]);
            $habitacion=stripslashes($row["habitacion"]);
            $f_ini=stripslashes($row["f_ini"]);
            $f_fin=stripslashes($row["f_fin"]);
            $fk_id_Estado_Solicitud=stripslashes($row["fk_id_Estado_Solicitud"]);
            $fecha_de_solicitud=stripslashes($row["fecha_de_solicitud"]);
            $radicado=stripslashes($row["radicado"]);
        
    echo'<tbody>';
    echo'    <tr>';
    echo"    <td>$documento</td>";
    echo"    <td>$uso </td>";
    echo"    <td>$destino </td>";
    echo"    <td colspan='2'>$habitacion </td>";
    echo"    <td>$f_ini </td>";
    echo"    <td>$f_fin </td>";
    echo"    <td>$fk_id_Estado_Solicitud</td>";
    echo"    <td>
                <form  action='descargar_pdf.php' method='POST'>
                    <input type='hidden'  name='radicado' value='$radicado'>
                    <input class='controls' type='hidden' name='documento' value='$documento'>
                    <center><button class='btn btn btn-link'>Imprimir</button></center>
                </form> 
            </td>";
    echo"   <td>
                
                <!-- Button trigger modal -->
                        <button type='button' class='btn btn btn-link' data-toggle='modal' data-target='#exampleModal'>
                        Eliminar
                        </button>

                        <!-- Modal -->
                        <div class='modal fade' id='exampleModal' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                        <div class='modal-dialog' role='document'>
                            <div class='modal-content'>
                            <div class='modal-header'>
                                <h5 class='modal-title' id='exampleModalLabel'>Eliminar solicitud</h5>
                                <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                <span aria-hidden='true'>&times;</span>
                                </button>
                            </div>
                            <div class='modal-body'>
                                ¿ Esta seguro que desea ELIMINAR la solicitud. ? 
                            </div>
                            <div class='modal-footer'>
                                <button type='button' class='btn btn-secondary' data-dismiss='modal'>Cerrar</button>
                                <form  action='EliminarSolicitudMiPerfil.php' method='POST'>
                                    <input type='hidden'  name='radicado' value='$radicado'>
                                    <input class='controls' type='hidden' name='documento' value='$documento'>
                                    <button class='btn btn btn-primary'>Eliminar</button>
                                </form>
                            </div>
                            </div>
                        </div>
                        </div>
                    
                    
                 
    </td>";
    echo'    </tr>';
    echo'</tbody>';
}
    echo'<tbody>'; 
    
    echo'</div>';
    echo'</div>';
    echo'</div>';
    echo'</div>';
    echo'</div> ';

    ?>

</body>
</html>