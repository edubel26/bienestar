<?php
include("header_admin.php");
?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
<?php

        $radicado=$_SESSION["radicado"];

        include("../conexion.php");

        $sql = "SELECT * FROM estadodesolicitud WHERE radicado='$radicado'";
        if(!$result = $db->query($sql)){
        die('Hay un error corriendo en la consulta o datos no encontrados!!! [' . $db->error . ']');
        }
        while($row = $result->fetch_assoc())
        {
            $radicado=stripslashes($row["radicado"]);
        /////////////SUBCONSULTA
        $sql2 = "SELECT * FROM solicitud WHERE radicado='$radicado'";
        if(!$result2 = $db->query($sql2)){
        die('Hay un error corriendo en la consulta o datos no encontrados!!! [' . $db->error . ']');
        }
        while($row2 = $result2->fetch_assoc())
        {
            $nombre=stripslashes($row2["nombre"]);
            $documento=stripslashes($row2["documento"]);
        }

        $sql3 = "SELECT * FROM usuario WHERE documento='$documento'";
        if(!$result3 = $db->query($sql3)){
        die('Hay un error corriendo en la consulta o datos no encontrados!!! [' . $db->error . ']');
        }
        while($row3 = $result3->fetch_assoc())
        {
            $email=stripslashes($row3["email"]);
        }

        /////////////SUBCONSULTA

        $fk_id_Estado_Solicitud=stripslashes($row["fk_id_Estado_Solicitud"]);

        //////subconsulta
        $sql3 = "SELECT * FROM estados_de_la_solicitud WHERE id_EstadoSolicitud='$fk_id_Estado_Solicitud'";
        if(!$result3 = $db->query($sql3)){
        die('Hay un error corriendo en la consulta o datos no encontrados!!! [' . $db->error . ']');
        }
        while($row3 = $result3->fetch_assoc())
        {
            $EstadoSolicitud=stripslashes($row3["EstadoSolicitud"]);
        }
        //////subconsulta

        echo'<form class="p-4" method="POST" action="AdminActualizar.php" enctype="multipart/form-data">';
        echo'<div class="container">';
        echo'<div class="">';
        echo'<div class="col-md-16">';
        echo'<div class="card">';
        echo'<div class="card-header">';
        echo"<table class='table table-bordered'>";
        echo"<tdead>";
        echo"<tr>";
        echo" <td scope='col' colspan='4'><center><h4>ACTUALIZACION ESTADO </center></h4></td>";         
        echo"</tr>";
        echo"<tdead>";
        echo"  <tr>";
        echo"   <th scope='col'>Numero de documento.</th>";
        echo"    <th scope='col'>Nombre completo.</th>";
        echo"    <th scope='col'>Radicado</th>";
        echo"    <th scope='col'>Estado actual</th>";
        echo"  </tr>";
        echo"</tdead>";
        echo"<tbody>";
        echo'    <tr>';
        echo"       <td> $documento </td>";
        echo"       <td> $nombre </td>";
        echo"           <input type='hidden' name='email' value='$email'>";
        echo"           <input type='hidden' name='radicado' value='$radicado'>";
        echo"       <td> $radicado </td>";
        echo"       <td> $EstadoSolicitud </td>";
        echo'    </tr>';
       
        $sql="SELECT id_EstadoSolicitud, EstadoSolicitud FROM estados_de_la_solicitud ";
        if(!$result = $db->query($sql)){
        die('Hay un error corriendo en la consulta o datos no encontrados!!! [' . $db->error . ']');
        }
        echo"<tbody>"; 

        
    ?>
        <tbody>
            <tr>
                <td colspan='4'>
                    <div class="row">
                        <div class="col-md-4 ml-5">
                            <CENTER><label>Actualizar</label></CENTER>
                            <center> <select name="EstadoSolicitud"  class="multisteps-form__select form-control" >
                                <option value="">Seleccione estado</option>
                                <?php
                                    while ($row = $result->fetch_assoc()) 
                                    {
                                ?>
                                <option required name="EstadoSolicitud" value="<?php echo $row['EstadoSolicitud']?>"><?php echo $row['EstadoSolicitud']?></option>
                                <?php
                                    }
                                ?>
                            </select>
                            
                        </div>
                        <div class="col-md-2 p-4">
                            <button class="btn btn-primary">actualizar</button>  
                        </div>
                    </div>
                </td>
            </tr>
        </tbody>
<?php  

        echo"</tabla> ";
        echo'</div>';
        echo'</div>';
        echo'</div>';
        

        echo'</div>';
        echo'</form>';
        echo'</div>';
    }

 
?>