<?php
include("headerIngresoCabania.php");
$radicado=$_POST["radicado"];
?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

<div class="container p-4 ml-5">
    <div class="text-wrap">
        <div class="col-md-100">
            <div class="card table-responsive">
                <div class="card-header table-responsive">
                    <div class="row">
                        <div class="p-3">
                            <img class='logo-migra'
                                height='60'
                                width='200'
                                src='../img/migra.png'
                                alt='migracion colombia'
                            />
                        </div>
                        <div class="">
                           <h4><center>Apartado revisión de huéspedes.</center> </h4>  
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

                    $_SESSION["radicado"]=$radicado;

                    if($cont > 0){


                        echo'<table class="table table-bordered">';
                        echo'<thead>';
                        echo'    <tr>';
                        echo'       <th colspan="8"><center>Información de la reserva</center></th>';
                        echo'    </tr>';
                        echo'</thead>';
                        echo'<thead>';
                        echo'    <tr>';
                        echo'       <th scope="col"> Estado de la reserva</th>';
                        echo'       <th scope="col"> Habitación </th>';
                        echo'       <th scope="col"> Fecha de inicio </th>';
                        echo'       <th scope="col"> Fecha de finalización </th>';
                        echo'       <th scope="col"> Huéspedes </th>';;
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
                        echo"       <td> $cantidad_p </td>";
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

                        

                            echo'    <th scope="col">Tipo de trasporte</th>';
                            echo'    <th scope="col">Placa</th>';
                            echo'    <th scope="col">Color</th>';
                            echo'    <th scope="col">Modelo</th>'; 
                            echo'    </tr>';
                            echo'</thead>';   

                        }else{
                            echo'    </tr>';
                            echo'</thead>'; 
                        }                      

                        echo'</tbody>';
                       if($correcto){ echo"    <tr>";
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
                    echo'       <th scope="col"> Nombre completo</th>';
                    echo'       <th scope="col"> Tipo de documento</th>';
                    echo'       <th scope="col"> Documento </th>';
                    echo'       <th scope="col"> Tipo EPS</th>';
                    echo'       <th scope="col"> PDF Documento</th>';;
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
                        $primer_apellido=stripslashes($row["apellido"]);
                        $apellido=stripslashes($row["apellido"]);
                        $eps_afiliado=stripslashes($row["eps_afiliado"]);
                        $automovil=stripslashes($row["automovil"]);
                        $pdf_doc=stripslashes($row["pdf_doc"]);
                        
                        include ("VisualizacionPdf.php");

                        $imagen=$folder.$pdf_doc; 
                       
                        echo'    <tr>';
                        echo"    <td> $nombre $apellido</td>";
                        echo"    <td> $tipo_doc </td>";
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
                    $radicado;
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
                
                          include("ApartadoDeIngresolistaInvitados.php");

                        }

                        echo'<thead>';
                        echo'    <tr>';
                        echo'       <th scope="row" colspan="12"><center><a href="IngresoCabaniabusqueda.php">volver</a></center></th>';
                        echo'    </tr>';
                        echo'</thead>';


                    }else{
                        echo'
                            <script>
                                alert(! ERROR ¡Radicado no existe! ");
                                window.location="IngresoCabaniabusqueda.php";                         
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