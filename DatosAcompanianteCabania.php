<?php include 'template/header.php' ?>


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">


<br>
<div class="container mt-1">
    <div class="row justify-content-center">
        <div class="col-md-16">
            <div class="card">
                <div class="card-header">
                    BIENESTAR SOCIAL & SST | PROCESO RESERVA CABAÑAS | DATOS DE LOS ACOMPAÑANTES
                 </div>
                <form class="p-4" method="POST" action="RegistrarDatosacompaniante.php" enctype="multipart/form-data">



<div class="">
    <!--o-->
    <div class="">
        <!--informacion sobre pautas para poder reservar-->
        <p>
        <h4>ANTES DE SEGUIR CON LA RESERVA TENGA EN CUENTA:</h4><strong>PROHIBIDO </strong>Ingresar con más personas de las autorizadas por alojamiento o con personas que no estén registradas en el formato de acompañantes, de acuerdo con la capacidad de las habitaciones.
        <hr />
        <?php  $radicado=$_SESSION["radicado"]; ?>
        </pr>
        <P><u><center><strong>DATOS DEL ACOMPAÑANTE</strong></center></u></P>
        <hr>
        <?php    
            include("conexion.php"); 

            $existe="0";
            $sql = "SELECT radicado FROM acompaniante WHERE radicado='$radicado'";
            if(!$result = $db->query($sql)){
            die('Hay un error corriendo en la consulta o datos no encontrados!!! [' . $db->error . ']');
            }
            while($row = $result->fetch_assoc())
            {
                $radicado=stripslashes($row["radicado"]);
                $existe=$existe+1;
                                        
            }
            
                
        ?>
            
            <p class="text-right">Huéspedes registrados: <?php echo $existe;?> </p>

        <!-- PRIMER BLOQUE | FECHA RECIBIDO & MEDIO A TRAVÉS DEL CUAL SE RECIBIÓ -->

        <div class="col-md-8 order-md-1">
            <!--<h1 class="display-6">Ingreso conceptos médicos | ICM |</h1> -->
            <form class="needs-validation" novalidate="">

</div>
        

        <input class="controls" type="hidden" name="documento" value='<?php echo $_SESSION["documen"];?>'>


        <div class="row">


<div class="col-md-4 mb-3"> 
    <label>Tipo documento</label>
    <select required class="form-select" placeholder="Seleccione" id="m_rec" name="tipo_doc">
        <option value="">Selecione TIPO DE DOCUMENTO</option>
        <option required class="controls" type="text" name="tipo_doc">Cédula de ciudadanía</option>
        <option required class="controls" type="text" name="tipo_doc">Cédula de extranjería</option>
        <option required class="controls" type="text" name="tipo_doc">NIUP - Registro Civil de nacimiento</option>
        <option required class="controls" type="text" name="tipo_doc">Pasaporte</option>
        <option required class="controls" type="text" name="tipo_doc">Tarjeta de identidad</option>
    </select>
</div>




<div class="col-md-3 mb-3">
    <label>No. documento</label>
    <input required type="text" class="form-control"   maxlength="10" name="no_documento" onkeypress='return validaNumericos(event)' >
        <!---  indicador de que solo digite numeros      --->
    <script>
        function validaNumericos(event) {
            if(event.charCode >= 48 && event.charCode <= 57){
            return true;
            }
            return false;        
        }
    </script>
</div>

<div class="col-md-2 mb-3">
    <label>PDF documento</label>
    <input required accept=".pdf" class="controls"  type="file"  name="pdf_doc">
</div>
<div class="row">

<div  class="col-md-3 mb-3">
<label  name="fecha_nacimiento">Fecha nacimiento:</label>
<input required type="date" class="form-control"  name="fecha_nacimiento">
</div>



<div class="col-4 mb-3">                
<label name="dpto_nac">Departamento nacimiento</label>
<select required id="dpto_nac" class="multisteps-form__select form-control" name="dpto_nac">
   
    
</select>
</div>


<div  class="col-4 mb-3">
<label  name="mpio_nac">Municipio nacimiento</label>
<select required id="mpio_nac" class="multisteps-form__select form-control" name="mpio_nac">
    
    
</select>
</div>

<div class="col-md-3 mb-3">
    <label>Fecha expedición:</label>
    <input required type="date" class="form-control"  name="fecha_exp">
</div>

<div class="col-4 mb-3">
    <label>Departamento de expedición</label>
    <select required id="dpto_exp" class="multisteps-form__select form-control" name="dpto_exp">
        <option> Selecciona departamento</option>             
    </select>
</div>
               
                
                
                       

<div class="col-4 mb-3">
    <label>Municipio nacimiento</label>
    <select required id="mpio_exp" class="multisteps-form__select form-control" name="mpio_exp">
        <option>Selecciona municipio</option>
        
    </select>
</div>

    <div class="row">


        <div class="col-md-4 mb-3">
            <label>Primer Nombre</label>
            <input required type="text" class="form-control"  name="primer_nombre">
        </div>




        <div  class="col-md-4 mb-3">
            <label >Segundo Nombre</label>
            <input  type="text" class="form-control" name="segundo_nombre">
        </div>




        <div  class="col-md-4 mb-3">
            <label>Tercer Nombre</label>
            <input  type="text" class="form-control" name="tercer_nombre">
        </div>




        <div class="row">

            <div  class="col-md-4 mb-3">
                <label>Primer apellido</label>
                <input required type="text" class="form-control"  name="primer_apellido">
            </div>


            <div  class="col-md-4 mb-3">
                <label  name="segundo_apellido">Segundo apellido</label>
                <input  type="text" class="form-control"  name="segundo_apellido">
            </div>


                <br />

               
                <?php
                 include ("conexion.php");

                 $sql="SELECT id_eps, eps FROM epss ";
                 if(!$result = $db->query($sql)){
                die('Hay un error corriendo en la consulta o datos no encontrados!!! [' . $db->error . ']');
                }
               ?>
                
                <div class="col-md-4 mb-3">
                    <label name="eps_afiliado">EPS afiliado</label>
                    <select name="eps_afiliado" required id="eps_afiliado" class="multisteps-form__select form-control" name="mpio_nac">
                        <option value="">Seleccione su EPS</option>
                        <?php
                            while ($row = $result->fetch_assoc()) 
                              {
                        ?>
                        
                        <option required name="eps_afiliado" value="<?php echo $row['eps']?>"><?php echo $row['eps']?></option>
                        <?php
                              }
                        ?>
                    </select>
                </div>







                <?php
                 include ("conexion.php");

                 $sql2="SELECT id_parentesco, parentesco FROM parentesco ";
                 if(!$result2 = $db->query($sql2)){
                die('Hay un error corriendo en la consulta o datos no encontrados!!! [' . $db->error . ']');
                }
               ?>
                <div class="col-4 mb-3">
                    <label>Parentesco con el funcionario</label>
                    <select  required class="multisteps-form__select form-control" name="psco_func" >
                        <option value="">Selecciona parentesco</option>
                        <?php
                            while ($row2 = $result2->fetch_assoc()) 
                            {
                        ?>
                            <option required class="controls" type="text" name="psco_func" value="<?php echo $row2['parentesco']?>"><?php echo $row2['parentesco']?></option>
                   
                        <?php
                            }
                        ?>
                    </select>
                </div>



                <input required class="controls" type="hidden" name="radicado" value='<?php echo $_SESSION["radicado"];?>'>
            
            
            
            </div>
            </form>
                
                <center> <input type="submit" class="btn btn-primary" value="REGISTRAR ACOMPAÑANTE"></center> 
            </br>
            </br>
                     <hr  />
            </br>
            </br>

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
                    
                        if($existe > "0"){

                            $correcto=true;

                        }else{
                            $correcto=false;
                        }
                

                    
            ?>
                       
<!---  -----------------------------------------   -->
<!---  -----------------------------------------   -->   

        <?php if($correcto) {

            ?>
            


                    <div class="container">
                        <div class="row">
                            <div class="col-md-3 offset-md-4 ">
                                <form  method="POST" action="ConfirmacionDatosEnvioSolicitud.php" enctype="multipart/form-data">
                                    <input required class="controls" type="hidden" name="documento" value='<?php echo $_SESSION["documen"];?>'>
                                    <input required class="controls" type="hidden" name="radicado" value='<?php echo $_SESSION["radicado"];?>'>
                                    <button  type="submit" class="btn btn-primary">CONTINUAR</button>
                                </form>                            
                            </div>
                            <div class="col-md-1">
                                <form  method="POST" action="DatosFuncionarioCabania.php" enctype="multipart/form-data">
                                    <button type="submit" class="btn btn-secondary">volver</button>
                                </form>
                            </div>
                        </div>
                    </div>


    
        <?php }else{?>
                <form class="p-4" method="POST" action="DatosFuncionarioCabania.php" enctype="multipart/form-data">
                  <center> <button type="submit" class="btn btn-primary">volver</button></center>
                </form>        
        <?php } ?>
        
        

               
            
    <!---  -----------------------------------------   -->
    <!---  -----------------------------------------   --> 
            </br>    
            </div>
        </div>
    </div>
</div>
<br>
<br>
<br>
<script src="js/js/jquery.min.js"></script>
<script src="js/select1.js"></script>
<script src="js/select2.js"></script>
<?php include 'template/footer.php' ?> 