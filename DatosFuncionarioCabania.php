<?php include 'template/header.php' ?>


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

<br>
<div class="container mt-1">
    <div class="row justify-content-center">
        <div class="col-md-16">
            <div class="card">
                <div class="card-header">
                    BIENESTAR SOCIAL & SST | PROCESO RESERVA CABAÑAS | DATOS DEL FUNCIONARIO.
                 </div>
                <form class="p-4" method="POST" action="RegistrarDatosFuncionario.php" enctype="multipart/form-data">



<div class="">
    <!--o-->
    <div class="">
        <!--informacion sobre pautas para poder reservar-->
        <p>
        <h4>ANTES DE SEGUIR CON LA RESERVA TENGA EN CUENTA:</h4><strong>PROHIBIDO </strong>Ingresar con un número de personas superior a las autorizadas en el registro.
        
        <hr />
        <p>
        
        <P><u><center><strong>DATOS DEL FUNCIONARIO</strong></center></u></P>
        <hr>
        <!-- PRIMER BLOQUE | FECHA RECIBIDO & MEDIO A TRAVÉS DEL CUAL SE RECIBIÓ -->

        <div class="col-md-8 order-md-1">
            <!--<h1 class="display-6">Ingreso conceptos médicos | ICM |</h1> -->
            <form class="needs-validation" novalidate="">

</div>
<?php $_SESSION["radicado"];?>
        <input class="controls" type="hidden" name="documento" value='<?php echo $_SESSION["documen"];?>'>
        
        
<?php
$documento=$_SESSION["documen"];
include ("conexion.php");

$sql="SELECT nombre, apellido, tipo_doc FROM usuario WHERE documento='$documento' ";
if(!$result = $db->query($sql)){
die('Hay un error corriendo en la consulta o datos no encontrados!!! [' . $db->error . ']');
}while ($row = $result->fetch_assoc()) 
{
    $nombre=stripslashes($row['nombre']);
    $apellido=stripslashes($row['apellido']);
    $tipo_doc=stripslashes($row['tipo_doc']);

}
?>
<input class="controls" type="hidden" name="nombre" value='<?php echo $nombre ;?>'>
<input class="controls" type="hidden" name="apellido" value='<?php echo $apellido;?>'>
<input class="controls" type="hidden" name="no_documento" value='<?php echo $_SESSION["documen"];?>'>
<input class="controls" type="hidden" name="tipo_doc" value='<?php echo $tipo_doc;?>'>
<input class="controls" type="hidden" name="cantidad_p" value='<?php echo $_SESSION["cantidad_p"];?>'>
<div class="row">
        <div class="col-md-4 mb-3">
            <label>PDF del documento</label>
            <input required accept=".pdf" class="controls"  type="file"  name="pdf_doc">
        </div>
        <?php
                 include ("conexion.php");

                 $sql="SELECT id_eps, eps FROM epss ";
                 if(!$result = $db->query($sql)){
                die('Hay un error corriendo en la consulta o datos no encontrados!!! [' . $db->error . ']');
                }
               ?>
                
                <div class="col-md-4 mb-3">
                    <label name="eps_afiliado">EPS afiliado</label>
                    <select required name="eps_afiliado"  id="eps_afiliado" class="multisteps-form__select form-control" name="mpio_nac">
                        <option value="">Seleccione su EPS</option>
                        <?php
                            while ($row = $result->fetch_assoc()) 
                              {
                        ?>
                        
                        <option  name="eps_afiliado" value="<?php echo $row['eps']?>"><?php echo $row['eps']?></option>
                        <?php
                              }
                        ?>
                    </select>
                </div>
</div>

<div class="row">

    <div  class="col-md-3 mb-3">
        <label  name="fecha_nacimiento">Fecha nacimiento:</label>
        <input required type="date" class="form-control"  name="fecha_nacimiento">
    </div>




    <div class="col-md-4 mb-3">                
        <label name="dpto_nac">Departamento </label>
        <select required id="dpto_nac" class="multisteps-form__select form-control" name="dpto_nac">
        
        </select>
    </div>


    <div  class="col-md-4 mb-3">
        <label  name="mpio_nac">Municipio</label>
        <select required id="mpio_nac" class="multisteps-form__select form-control" name="mpio_nac">
           
        </select>
    </div>
    </div>
</div>

<div class="row">
    <div class="col-md-3 mb-3">
        <label>Fecha expedición:</label>
        <input required type="date" class="form-control"  name="fecha_exp">
    </div>

    <div class="col-md-4 mb-3">
        <label>Departamento</label>
        <select required id="dpto_exp" class="multisteps-form__select form-control" name="dpto_exp">
            <option>Selecciona departamento</option>             
        </select>
    </div>
                   
                                     

    <div class="col-md-4 mb-3">
        <label>Municipio</label>
        <select required id="mpio_exp" class="multisteps-form__select form-control" name="mpio_exp">
            <option>Selecciona municipio</option>
            
        </select>
    </div>
</div>    

    <div class="row">


                <br />

               
                
                <?php 
             
            $destino=$_SESSION["destino"];
            $documento=$_SESSION["documen"];
            $radicado=$_SESSION["radicado"];

            
            include ("conexion.php");

            $sql="SELECT * FROM solicitud where documento='$documento' and radicado='$radicado'";
            if(!$result = $db->query($sql)){
           die('Hay un error corriendo en la consulta o datos no encontrados!!! [' . $db->error . ']');
           }while ($row = $result->fetch_assoc()) 
           {
            
                $destino=stripslashes($row['destino']);

           }


           
            $correcto=false;

            if($destino=="Cartagena"){

                $correcto=true;

            }else{
                $correcto=false;
            }
                  
        ?>
        <?php if($correcto){?>
            <hr />
                    <center><h5> INFORMACION COMPLEMENTARIA PARA SU RESERVA </h5></center>
                    <hr />
                <div class="row">
                <div  class="col-md-4 mb-3">
                    <label for="">Medio de transporte:</label><br>      
                    
                    <div class="form-check form-check-inline">
                        <input required class="form-check-input" type="radio" name="automovil" id="inlineRadio1" value="si">
                        <label class="form-check-label" for="inlineRadio1">SI</label>
                        </div>
                        <div class="form-check form-check-inline">
                        <input required  class="form-check-input" type="radio" name="automovil" id="inlineRadio2" value="no">
                        <label class="form-check-label" for="inlineRadio2">NO</label>
                        </div>
                    </div>

                    <div class="col-4 mb-3">                
                        <label >Tipo de trasporte</label>
                        <select class="multisteps-form__select form-control" name="medio_tras">
                        <option value="">Seleccione su medio de trasporte</option>
                        <option class="controls" type="text" name="medio_tras">Automóvil</option>
                        <option class="controls" type="text" name="medio_tras">Motocicleta</option>
                        <option class="controls" type="text" name="medio_tras">Bicicleta</option>
                        </select>
                    </div>
                </div>

                    <div class="row">


                        <div  class="col-md-4 mb-3">
                            <label>Numero de placa</label>
                            <input  autocomplete="off" type="text" class="form-control"  name="placa">
                        </div>


                        <div  class="col-md-4 mb-3">
                            <label>Color</label>
                            <input  autocomplete="off" type="text" class="form-control"  name="color">
                        </div>

                        <div  class="col-md-4 mb-3">
                            <label>Modelo</label>
                            <input  autocomplete="off" type="text" class="form-control"  name="modelo">
                        </div>
</div>
            </div>
                
                

        <?php }else{?>
        <?php }?>
                

            <div  class="col-md-4 mb-3">
                <input  type="hidden" class="form-control"  name="psco_func" value="funcionario">
            </div>
               
               



                <input  class="controls" type="hidden" name="radicado" value='<?php echo $_SESSION["radicado"];?>'>
            
            </form>
                <center> <input type="submit" class="btn btn-primary" value="Registrar funcionario"></center> 
            </br>
            </br> 

            <!-- apartado para si llevan autos -->

                  
            

            <?php 
            
            include ("conexionUno.php");
            
            $existe="0";

            $documento=$_SESSION["documen"];
            $radicado=$_SESSION["radicado"];
                
                $res=$conexion->query("select * from acompaniante where 
                documento='$documento' and radicado='$radicado'")or die($conexion->error);
                while($row = $res->fetch_assoc())
                {   
                    $radicado=stripslashes($row["radicado"]);
                    $fecha_radicado=stripslashes($row["fecha_radicado"]);
                    $existe=$existe+1;
                }
                    
                    
                $correcto=false;
                
                    if($existe >"0"){

                        $correcto=true;

                    }else{
                        $correcto=false;
                    }
            

                
        ?>
                   
<!---  -----------------------------------------   -->
<!---  -----------------------------------------   -->   

    <?php if($correcto){

        
            $cantidad_p=$_SESSION["cantidad_p"];
            
            $correcto=false;
                                                
            if($cantidad_p=="1"){

                $correcto=true;

            }else{
                $correcto=false;
            }


        if($correcto){


                echo"  
                <hr  />
                    <form class='p-4' method='POST' action='ConfirmacionDatosEnvioSolicitud.php' enctype='multipart/form-data'>
                    <center> <input type='submit' class='btn btn-primary' value='continuar'></center>
                    </form>
                </div>";
        }else{   

            
            $cantidad_p=$_SESSION["cantidad_p"];
            
            $correcto=false;

            $can="Máximo 40 invitados.";                               
            if($cantidad_p==$can){

                $correcto=true;

            }else{
                $correcto=false;
            }


                if($correcto){


                        echo"  
                            <hr  />
                                <form class='p-4' method='POST' action='DatosInvitadosCabania.php' enctype='multipart/form-data'>
                                <center> <input type='submit' class='btn btn-primary' value='continuar'></center>
                                </form>
                        </div>";
                }else{
                    echo"      
                    <hr  />
                        <form class='p-4' method='POST' action='DatosAcompanianteCabania.php' enctype='multipart/form-data'>
                            <center> <input type='submit' class='btn btn-primary' value='continuar'></center>
                        </form>
                    </div>";
                }
            }
     }else{?>
        <hr  />

            </div>
        <?php }?>
            </div>
        </div>
    </div>
</div>
<br>
<br>
<script src="js/me_traspo_1.js"></script>
<script src="js/me_traspor.js"></script>
<script src="js/js/jquery.min.js"></script>
<script src="js/select1.js"></script>
<script src="js/select2.js"></script>
<?php include 'template/footer.php' ?> 